<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index() {
		
		$this->load->helper('security');
		
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		
		$data = array(
			'username' => $username,
			'password' => do_hash($password),
			'admin_location' => site_url() . "/admin"
		);
		
		$this->load->model('employee_model');
		
		$validate_user = $this->employee_model->validate_employee($data['username'], $data['password']);
		
		if($validate_user) {
			
			$session_data = array(
				"username" => $username,
				"is_logged_in" => true
			);
			
			$this->session->set_userdata($session_data);
			$data['status'] = true;
			
		} else {
			$data['status'] = false;
		}
	
		echo json_encode($data);
	}
	
}