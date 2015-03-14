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
class ngudal_piwulang extends Public_Controller
{

    /**
     * The constructor
     * @access public
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
      $this->lang->load('ngudal_piwulang');
      $this->load->model('ngudal_piwulang_m');
      $this->template->append_css('module::ngudal_piwulang.css');
    }
     /**
     * List all ngudal_piwulangs
     *
     *
     * @access  public
     * @return  void
     */
     public function index()
     {
      // bind the information to a key
      $data['ngudal_piwulang'] = (array)$this->ngudal_piwulang_m->get_all();
      // Build the page
      $this->template->title($this->module_details['name'])
      ->build('index', $data);
    }

  }

/* End of file ngudal_piwulang.php */