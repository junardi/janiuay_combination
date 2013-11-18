<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_articles() {	
		$query = $this->db->get('articles');
		return $query->result();
	}
	
	function get_article_by_article_id($article_id) {
		$this->db->where('article_id', $article_id);
		$query = $this->db->get('articles');
		return $query->result();
	}
	
}