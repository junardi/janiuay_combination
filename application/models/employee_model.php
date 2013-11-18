<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function validate_employee($username, $password){
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('employees');
		
		return $query->result();
	}
	
}