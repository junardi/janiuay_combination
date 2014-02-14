<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_page_tags_data_by_search_value($search_value) {
		$this->db->like('page_tags', $search_value);
		$query = $this->db->get('page_tags');
		return $query->result();
	}
	
	function get_tags_data_by_search_value($search_value) {
		$this->db->like('tags', $search_value);
		$query = $this->db->get('tags');
		return $query->result();
	}
	
	function get_news_data_by_category_id($category_id) {
		$this->db->where('news_id', $category_id);
		$query = $this->db->get('news');
		return $query->result();
	}
	
	function get_article_data_by_category_id($category_id) {
		$this->db->where('article_id', $category_id);
		$query = $this->db->get('articles');
		return $query->result();
	}
	
	
	
}