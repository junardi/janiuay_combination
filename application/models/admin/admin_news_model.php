<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_news_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function add_news($news_data) {
		$query = $this->db->insert('news', $news_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_news() {	
		$query = $this->db->get('news');
		return $query->result();
	}
	
	function get_news_id_by_title($title) {
		$this->db->select('news_id');
		$this->db->where('title', $title);
		$query = $this->db->get('news');
		
		return $query->result();
	}
	
	function get_news_by_id($news_id) {
		$this->db->where('news_id', $news_id);
		$query = $this->db->get('news');
		
		return $query->result();
	}
	
	function delete_news($news_id) {
		$this->db->where_in('news_id', $news_id);
		$query = $this->db->delete('news');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_news($news_id, $news_data) {
		$this->db->where('news_id', $news_id);
		$query = $this->db->update('news', $news_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
}




