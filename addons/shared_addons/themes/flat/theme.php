<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Flat extends Theme
{
    public $name			= 'Flat';
    public $author			= 'Scott Parry';
    public $author_website	= 'http://shapebootstrap.net/';
    public $website			= 'http://shapebootstrap.net/';
    public $description		= 'Flat Theme is the best free responsive site template ever. This clean yet elegant design template has been developed using Twitter Bootstrap 3 framework. This template is perfect for any business, corporate or small company site. You can use this template for your personal or clients project.';
    public $version			= '1.0.0';
	public $options 		= array(
		'background' => array(
			'title'         => 'Background',
			'description'   => 'Choose the default background for the theme.',
			'default'       => 'fabric',
			'type'          => 'select',
			'options'       => 'black=Black|fabric=Fabric|graph=Graph|leather=Leather|noise=Noise|texture=Texture',
			'is_required'   => true
		),
		'slider' => array(
			'title'         => 'Slider',
			'description'   => 'Would you like to display the slider on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'color' => array(
			'title'         => 'Default Theme Color',
			'description'   => 'This changes things like background color, link colors etc…',
			'default'       => 'pink',
			'type'          => 'select',
			'options'       => 'red=Red|orange=Orange|yellow=Yellow|green=Green|blue=Blue|pink=Pink',
			'is_required'   => true
		),
		'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */