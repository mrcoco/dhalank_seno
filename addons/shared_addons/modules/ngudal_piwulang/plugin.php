<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * modul ngudal piwulang
 *
 * @author 		dwiagus
 * @website		http://cempakaweb.com
 * @package 	
 * @subpackage 	
 * @copyright 	MIT
 */
class Plugin_ngudal_piwulang extends Plugin
{
	/**
	 * Item List
	 * Usage:
	 *
	 * {{ ngudal_piwulang:items limit="5" order="asc" }}
	 *      {{ id }} {{ name }} {{ slug }}
	 * {{ /ngudal_piwulang:items }}
	 *
	 * @return	array
	 */
	function items()
	{
		$this->load->model('ngudal_piwulang/ngudal_piwulang_m');
		return $this->ngudal_piwulang_m->get_all();
	}
}

/* End of file plugin.php */