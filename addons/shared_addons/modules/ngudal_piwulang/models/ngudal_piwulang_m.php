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
class ngudal_piwulang_m extends MY_Model {

	private $folder;

	public function __construct()
	{
		parent::__construct();
		$this->_table = 'ngudal_piwulang';
		// $this->load->model('files/file_folders_m');
		// $this->load->library('files/files');
		// $this->folder = $this->file_folders_m->get_by('name', 'ngudal_piwulang');
	}

	//create a new item
	public function create($input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			// 'fileinput' => json_encode($fileinput);
			'judul' => $input['judul'],
	'piwulang' => $input['piwulang'],
	'penulis' => $input['penulis'],
	
		);

		return $this->db->insert('ngudal_piwulang', $to_insert);
	}

	//edit a new item
	public function edit($id = 0, $input)
	{
		// $fileinput = Files::upload($this->folder->id, FALSE, 'fileinput');
		$to_insert = array(
			'judul' => $input['judul'],
	'piwulang' => $input['piwulang'],
	'penulis' => $input['penulis'],
	
		);

		// if ($fileinput['status']) {
		// 	$to_insert['fileinput'] = json_encode($fileinput);
		// }

		return $this->db->where('id', $id)->update('ngudal_piwulang', $to_insert);
	}
}
