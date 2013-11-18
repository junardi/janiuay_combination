<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_upload_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function upload_image($image_data) {
		$query = $this->db->insert("images", $image_data);
		if($query) {
			return true;
		} else {
			return false;
		}	
	}
	
	function upload_image_data($image_data) {
		$query = $this->db->insert('images_data', $image_data);
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
}





