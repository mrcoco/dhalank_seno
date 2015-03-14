<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * ngudal_piwulang Events Class
 *
 * @author      dwiagus
 * @website     http://cempakaweb.com
 * @package     
 * @subpackage  
 * @copyright   MIT
 */
class Events_ngudal_piwulang {

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();

        //register the public_controller event
        Events::register('public_controller', array($this, 'run'));

		//register a second event that can be called any time.
		// To execute the "run" method below you would use: Events::trigger('ngudal_piwulang_event');
		// in any php file within PyroCMS, even another module.
		Events::register('ngudal_piwulang_event', array($this, 'run'));
    }

    public function run()
    {
        $this->ci->load->model('ngudal_piwulang/ngudal_piwulang_m');

        // we're fetching this data on each front-end load. You'd probably want to do something with it IRL
        $this->ci->ngudal_piwulang_m->limit(5)->get_all();
    }

}
/* End of file events.php */