<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_maintenance extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$data['page_title'] = "Site Maintenance";
		
		$site_url = site_url();
		$breadcrumb_link = "<p>Site Under Maintenance</p>";
		
		$data['breadcrumbs'] = "
			<div id='breadcrumbs' class='grid_12'>
				{$breadcrumb_link}
			</div>
		";
		
		$data['site_maintenance'] = true;

		$data['main_content'] = "site_maintenance_view";
		$this->load->view('template/content', $data);
	}

}