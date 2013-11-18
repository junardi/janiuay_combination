<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_barangay_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function add_barangay($barangay_data) {
		$query = $this->db->insert('barangays', $barangay_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
}