<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_ngudal_piwulang extends Module {

	public $version = '1.0';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'ngudal_piwulang'
				),
			'description' => array(
				'en' => 'modul ngudal piwulang'
				),
			'frontend' => true,
			'backend' => true,
			'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'ngudal_piwulang',
			'sections' => array(
				'items' => array(
					'name' 	=> 'ngudal_piwulang:items', // These are translated from your language file
					'uri' 	=> 'admin/ngudal_piwulang',
					'shortcuts' => array(
						'create' => array(
							'name' 	=> 'ngudal_piwulang:create',
							'uri' 	=> 'admin/ngudal_piwulang/create',
							'class' => 'add'
							)
						)
					)
				)
			);
	}

	public function install()
	{
		$this->dbforge->drop_table('ngudal_piwulang');
		//$this->db->delete('settings', array('module' => 'ngudal_piwulang'));

		// $this->load->library('files/files');
		// Files::create_folder(0, 'ngudal_piwulang');

		$ngudal_piwulang = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '11',
				'auto_increment' => TRUE
				),
			'order' => array(
				'type' => 'INT',
				'constraint' => '11',
				'null' => true
				),
			'judul' => array(
	'type' => 'VARCHAR',
	'constraint' => '255',
),
'piwulang' => array(
	'type' => 'TEXT',
),
'penulis' => array(
	'type' => 'VARCHAR',
	'constraint' => '255',
),

			);

		// $ngudal_piwulang_setting = array(
		// 	'slug' => 'ngudal_piwulang_setting',
		// 	'title' => 'ngudal_piwulang Setting',
		// 	'description' => 'A Yes or No option for the ngudal_piwulang module',
		// 	'`default`' => '1',
		// 	'`value`' => '1',
		// 	'type' => 'select',
		// 	'`options`' => '1=Yes|0=No',
		// 	'is_required' => 1,
		// 	'is_gui' => 1,
		// 	'module' => 'ngudal_piwulang'
		// 	);

		$this->dbforge->add_field($ngudal_piwulang);
		$this->dbforge->add_key('id', TRUE);

		if($this->dbforge->create_table('ngudal_piwulang') AND
		   //$this->db->insert('settings', $ngudal_piwulang_setting) AND
			is_dir($this->upload_path.'ngudal_piwulang') OR @mkdir($this->upload_path.'ngudal_piwulang',0777,TRUE))
		{
			return TRUE;
		}
	}

	public function uninstall()
	{
		// $this->load->library('files/files');
		// $this->load->model('files/file_folders_m');
		// $folder = $this->file_folders_m->get_by('name', 'ngudal_piwulang');
		// Files::delete_folder($folder->id);
		$this->dbforge->drop_table('ngudal_piwulang');
		//$this->db->delete('settings', array('module' => 'ngudal_piwulang'));
		{
			return TRUE;
		}
	}


	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}

	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}
/* End of file details.php */
