<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_central_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	// central model for tags below 
	
	function get_tag_by_category_id($category_id) {
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('tags');
		return $query->result();
	}
	
	function add_tags($tags_data) {
	
		$query = $this->db->insert('tags', $tags_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
		
	}
	
	function delete_tags($category_id) {
		$this->db->where_in('category_id', $category_id);
		$query = $this->db->delete('tags');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_tags($category_id, $tags_data) {
		$this->db->where('category_id', $category_id);
		$query = $this->db->update('tags', $tags_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	
	
}














