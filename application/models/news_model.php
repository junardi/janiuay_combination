<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_news() {	
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('news');
		return $query->result();
	}
	
	function get_news_limit_two() {	
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('news', 2);
		return $query->result();
	}
	
	function get_news_by_news_id($news_id) {
		$this->db->where('news_id', $news_id);
		$query = $this->db->get('news');
		return $query->result();
	}
	
}