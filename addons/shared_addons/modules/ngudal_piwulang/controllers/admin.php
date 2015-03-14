<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * modul ngudal piwulang
 *
 * @author       dwiagus
 * @website      http://cempakaweb.com
 * @package      
 * @subpackage   
 * @copyright    MIT
 */
class Admin extends Admin_Controller
{
	protected $section = 'items';

	public function __construct()
	{
		parent::__construct();

		// Load all the required classes
		$this->load->model('ngudal_piwulang_m');
		$this->load->library('form_validation');
		$this->lang->load('ngudal_piwulang');

		// $this->load->library('files/files');
		// $this->load->model('files/file_folders_m');

		// Set the validation rules
		$this->item_validation_rules = array(
				array(
	'field' => 'judul',
	'label' => 'Judul',
	'rules' => 'required|xss_clean|trim',),
	array(
	'field' => 'piwulang',
	'label' => 'Piwulang',
	'rules' => 'required|xss_clean|trim',),
	array(
	'field' => 'penulis',
	'label' => 'Penulis',
	'rules' => 'required|xss_clean|trim',),

		);

		// We'll set the partials and metadata here since they're used everywhere
		$this->template->append_js('module::admin.js')
						->append_css('module::admin.css');
	}

	/**
	 * List all items
	 */
	public function index()
	{
		$ngudal_piwulang = $this->ngudal_piwulang_m->order_by('order')->get_all();
			$this->template
		->title($this->module_details['name'])
		->set('ngudal_piwulang', $ngudal_piwulang)
		->build('admin/index');
	}

	public function create()
	{
		$ngudal_piwulang = new StdClass();
		// $folder = $this->file_folders_m->get_by('name', 'ngudal_piwulang');
		// $this->data->files = Files::folder_contents($folder->id);
		// Set the validation rules from the array above
		$this->form_validation->set_rules($this->item_validation_rules);

		// check if the form validation passed
		if($this->form_validation->run())
		{
			// See if the model can create the record
			if($this->ngudal_piwulang_m->create($this->input->post()))
			{
				// All good...
				$this->session->set_flashdata('success', lang('ngudal_piwulang.success'));
				redirect('admin/ngudal_piwulang');
			}
			// Something went wrong. Show them an error
			else
			{
				$this->session->set_flashdata('error', lang('ngudal_piwulang.error'));
				redirect('admin/ngudal_piwulang/create');
			}
		}
		$ngudal_piwulang->data = new StdClass();
		foreach ($this->item_validation_rules AS $rule)
		{
			$ngudal_piwulang->data->{$rule['field']} = $this->input->post($rule['field']);
		}
		$this->_form_data();
		// Build the view using sample/views/admin/form.php
		$this->template->title($this->module_details['name'], lang('ngudal_piwulang.new_item'))
						->build('admin/form', $ngudal_piwulang->data);
	}

	public function edit($id = 0)
	{
		$this->data = $this->ngudal_piwulang_m->get($id);

		// $this->load->model('files/file_folders_m');
		// $folder = $this->file_folders_m->get_by('name', 'ngudal_piwulang');
		// $this->data->files = Files::folder_contents($folder->id);

		// Set the validation rules from the array above
		$this->form_validation->set_rules($this->item_validation_rules);

		// check if the form validation passed
		if($this->form_validation->run())
		{
			// get rid of the btnAction item that tells us which button was clicked.
			// If we don't unset it MY_Model will try to insert it
			unset($_POST['btnAction']);

			// See if the model can create the record
			if($this->ngudal_piwulang_m->edit($id, $this->input->post()))
			{
				// All good...
				$this->session->set_flashdata('success', lang('ngudal_piwulang.success'));
				redirect('admin/ngudal_piwulang');
			}
			// Something went wrong. Show them an error
			else
			{
				$this->session->set_flashdata('error', lang('ngudal_piwulang.error'));
				redirect('admin/ngudal_piwulang/create');
			}
		}
		// starting point for file uploads
		// $this->data->fileinput = json_decode($this->data->fileinput);
		$this->_form_data();
		// Build the view using sample/views/admin/form.php
		$this->template->title($this->module_details['name'], lang('ngudal_piwulang.edit'))
						->build('admin/form', $this->data);
	}

	public function _form_data()
	{
		// $this->load->model('pages/page_m');
		// $this->template->pages = array_for_select($this->page_m->get_page_tree(), 'id', 'title');
	}

	public function delete($id = 0)
	{
		// make sure the button was clicked and that there is an array of ids
		if (isset($_POST['btnAction']) AND is_array($_POST['action_to']))
		{
			// pass the ids and let MY_Model delete the items
			$this->ngudal_piwulang_m->delete_many($this->input->post('action_to'));
		}
		elseif (is_numeric($id))
		{
			// they just clicked the link so we'll delete that one
			$this->ngudal_piwulang_m->delete($id);
		}
		redirect('admin/ngudal_piwulang');
	}
	public function order() {
		$items = $this->input->post('items');
		$i = 0;
		foreach($items as $item) {
			$item = substr($item, 5);
			$this->ngudal_piwulang_m->update($item, array('order' => $i));
			$i++;
		}
	}
}
