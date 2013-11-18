<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangay_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_barangays() {
		$this->db->select('name');
		$query = $this->db->get('barangays');		
		return $query->result();
	}
	
}