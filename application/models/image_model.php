<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function get_image_id_by_category_id($category_id) {
		$this->db->select('image_id');
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function get_image_id_by_category($category) {
		$this->db->select('image_id');
		$this->db->where('category', $category);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function get_image_id_by_category_id_and_category($category_id, $category) {
		$this->db->select('image_id');
		$this->db->where('category_id', $category_id);
		$this->db->where('category', $category);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function get_image_file_name_by_image_id($image_id) {
		$this->db->select('file_name');
		$this->db->where('image_id', $image_id);
		$query = $this->db->get('images');
		return $query->result();
	}
	
	function get_image_id_by_file_name($file_name) {
		$this->db->select("image_id");
		$this->db->where('file_name', $file_name);
		$query = $this->db->get('images');
		return $query->result();
	}
	
	function get_image_data_by_image_id($image_id) {
		$this->db->where('image_id', $image_id);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	
	
}