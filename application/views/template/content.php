<?php 
	
	
	$header_data = array();
	if(isset($page_title) && $page_title != NULL) {
		$header_data['page_title'] = $page_title;
	}
	
	if(isset($breadcrumbs) && $breadcrumbs != NULL) {
		$header_data['breadcrumbs'] = $breadcrumbs;
	}
	
	if(isset($site_maintenance)) {
		$header_data['site_maintenance'] = $site_maintenance;
	}
	
	$this->load->view('template/header', $header_data);
	
	
	$this->load->view($main_content);
	
	
	$this->load->view('template/footer');
?>



