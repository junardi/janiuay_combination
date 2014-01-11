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
	
	function get_news_images_by_category_and_news_id($category, $news_id) {
		$this->db->where('category', $category);
		$this->db->where('category_id', $news_id);
		$this->db->from('images_data');
		$this->db->join('images', 'images.image_id=images_data.image_id');
		$query = $this->db->get();
		return $query->result();
	} 
	
}





