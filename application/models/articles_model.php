<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_articles() {	
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('articles');
		return $query->result();
	}
	
	function get_articles_limit_two() {	
		$this->db->order_by('date_created', 'desc');
		$query = $this->db->get('articles', 2);
		return $query->result();
	}
	
	function get_article_by_article_id($article_id) {
		$this->db->where('article_id', $article_id);
		$query = $this->db->get('articles');
		return $query->result();
	}
	
	function get_article_images_by_category_and_article_id($category, $article_id) {
		$this->db->where('category', $category);
		$this->db->where('category_id', $article_id);
		$this->db->from('images_data');
		$this->db->join('images', 'images.image_id=images_data.image_id');
		$query = $this->db->get();
		return $query->result();
	} 
	
}