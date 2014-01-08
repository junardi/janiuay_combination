<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_image_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function get_image_id_by_file_name($file_name) {
		$this->db->select("image_id");
		$this->db->where('file_name', $file_name);
		$query = $this->db->get('images');
		return $query->result();
	}
	
	function delete_image_by_image_id($image_id) {
		
		$this->db->where('image_id', $image_id);
		$query = $this->db->delete('images'); 
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_image_data_by_image_id($image_id) {
		$this->db->where('image_id', $image_id);
		$query = $this->db->delete('images_data'); 
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_image_data_by_image_id($image_id) {
		$this->db->where('image_id', $image_id);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function delete_images_by_file_names($file_names) {
	
		$this->db->where_in('file_name', $file_names);
		$query = $this->db->delete('images');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_images_id_by_file_names($file_names) {
		$this->db->select('image_id');
		$this->db->where_in('file_name', $file_names);
		$query = $this->db->get('images');
		return $query->result();
	}
	
	function delete_images_data_by_image_ids($image_ids) {
		$this->db->where_in('image_id', $image_ids);
		$query = $this->db->delete('images_data');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}

	function get_image_file_name_by_image_id($image_id) {
		$this->db->select('file_name');
		$this->db->where('image_id', $image_id);
		$query = $this->db->get('images');
		return $query->result();
	}

	function update_image_data_category_id_by_image_id($category_id, $image_id) {
		
		$data = array(
			"category_id" => $category_id
		);

		$query = $this->db->update('images_data', $data, array("image_id" => $image_id));
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_image_id_category_zero() {
		$this->db->select('image_id');
		$this->db->where('category_id', 0);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function get_image_id_by_category_id($category_id) {
		$this->db->select('image_id');
		$this->db->where('category_id', $category_id);
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
	
	function get_image_id_by_category($category) {
		$this->db->select('image_id');
		$this->db->where('category', $category);
		$query = $this->db->get('images_data');
		return $query->result();
	}
	
	function delete_image_data_by_category_id($category_id) {
		$this->db->where('category_id', $category_id);
		$query = $this->db->delete('images_data');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_image_pending_delete($pending_data) {
		$query = $this->db->insert('image_pending_delete', $pending_data);
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function empty_image_pending_delete() {
		$query = $this->db->truncate('image_pending_delete');
		
		if($query) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_image_pending_delete() {
		$query = $this->db->get('image_pending_delete');
		return $query->result();
	}
	

}























