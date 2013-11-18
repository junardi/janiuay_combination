<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_articles_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function add_article($article_data) {
		$query = $this->db->insert('articles', $article_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_articles() {	
		$query = $this->db->get('articles');
		return $query->result();
	}
	
	function get_article_id_by_title($title) {
		$this->db->select('article_id');
		$this->db->where('title', $title);
		$query = $this->db->get('articles');
		
		return $query->result();
	}
	
	function get_article_by_id($article_id) {
		$this->db->where('article_id', $article_id);
		$query = $this->db->get('articles');
		
		return $query->result();
	}
	
	function delete_article($article_id) {
		$this->db->where_in('article_id', $article_id);
		$query = $this->db->delete('articles');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_article($article_id, $article_data) {
		$this->db->where('article_id', $article_id);
		$query = $this->db->update('articles', $article_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
}

