<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_tags_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_page_tags_by_url($url) {
		$this->db->where('url', $url);
		$query = $this->db->get('page_tags');
		
		return $query->result();
	}
	
	function add_page_tags($page_tags_data) {
		$query = $this->db->insert('page_tags', $page_tags_data);
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_page_tags($page_tag_id, $page_tags_data) {
		$this->db->where('page_tag_id', $page_tag_id);
		$query = $this->db->update('page_tags', $page_tags_data);
		if($query) {
			return true;
		} else {
			return false;
		}
	}

}