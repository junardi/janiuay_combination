<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->helper('file');
		$this->load->helper('directory');
		
		if($this->session->userdata('is_logged_in') == false) {	
			redirect(site_url(), 'refresh');
		}
		
	}
	
	function index() {
		$data['data_main_content'] = 'admin_view/admin_home_view';
		$this->load->view('admin_template/admin_content', $data);
	}
	
	// barangay sections below
	
	function barangay() {
		$data['data_main_content'] = 'admin_view/admin_barangay_view';
		$this->load->view('admin_template/admin_content', $data);
	}
	
	function add_barangay() {
		
		$barangay = trim($this->input->post('barangay_name'));
		$captain = trim($this->input->post('captain'));
		$contact_number = trim($this->input->post('contact_number'));
		
		$barangay_data = array(
			"name" => $barangay,
			"captain" => $captain,
			"contact_number" => $contact_number
		);
		
		$this->load->model('admin/admin_barangay_model');
		
		$add_barangay = $this->admin_barangay_model->add_barangay($barangay_data);
		
		if($add_barangay) {
			echo "added";
		} else {
			echo "not added";
		}
		
	}
	
	// news sections below 
	
	function news() {
		
		$current_tab = $this->input->get('current_tab');
		
		if(isset($current_tab) && $current_tab != NULL) {
			$data['current_tab'] = $current_tab;
		} else {
			$data['current_tab'] = 0;
		}
		
		$this->load->model('admin/admin_news_model');
		$this->load->model('admin/admin_central_model');
		$this->load->model('admin/admin_image_model');
	
		$update_id = $this->input->get('update_id');
		
		if(isset($update_id) && $update_id != NULL) {
			
			$get_selected_news = $this->admin_news_model->get_news_by_id($update_id);
			$data['selected_news_data'] = $get_selected_news;
			
			//$get_selected_tags = $this->admin_central_model->get_tag_by_category_id($update_id);
			$get_selected_tags = $this->admin_central_model->get_tag_by_category_id_and_category($update_id, "news");
			$data['selected_tags_data'] = $get_selected_tags;
			
			// set the data for update id
			
			$data['update_id'] = $update_id;
			
			// truncate the image pending delete table
			
			$empty_image_pending_delete_table = $this->admin_image_model->empty_image_pending_delete();
			
			// get images if available for update
			
			$get_image_id = $this->admin_image_model->get_image_id_by_category_id_and_category($update_id, "news");
		
			$data['images_file_name'] = array();
			
			foreach($get_image_id as $row_image) {
				
				$update_image_id = $row_image->image_id;
				
				$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($update_image_id);
				
				foreach($get_image_file_name as $row_file_name) {
					
					$data['images_file_name'][] = array(
						"file_name" => $row_file_name->file_name
					);
				}
			}
			
		} else {
			$get_news = $this->admin_news_model->get_news();
			$data['news_data'] = $get_news;
		}

		// below are for the images in the temporary uploads and its options
		
		// redirect values after uploading in create
		
		$has_create_image = $this->input->get('has_create_image');
		
		$title = $this->input->get('title');
		$content = $this->input->get('content');
		$tags = $this->input->get('tags');
		
		// redirect values after uploading in update
		
		$has_update_image = $this->input->get('has_update_image');
	
		// set isset images in delete or update or delete if there is no redirect values 
		
		if(isset($has_create_image) && $has_create_image == 1) {
			
			// get the additional temporary image for the create
			
			$images_path = "temporary_uploads";
			$images = get_filenames($images_path);
		
			$data['temporary_images'] = $images;
			
			$data['title'] = $title;
			$data['content'] = $content;
			$data['tags'] = $tags;
			
		} else if(isset($has_update_image) && $has_update_image == 1) {
			
			// get the additional temporary image for the update
			
			$images_path = "temporary_uploads";
			$images = get_filenames($images_path);
			
			$data['temporary_images'] = $images;
			
		} else {
			
			// delete all of the temporary images in its folder and inside the database
			
			$temporary_images = "temporary_uploads";
			
			$image_file_names = get_filenames($temporary_images);
			
			if($image_file_names != NULL) {
				
				$image_id_category_zero = $this->admin_image_model->get_image_id_category_zero();
				
				foreach($image_id_category_zero as $row) {
					$image_id = $row->image_id;
					
					$delete_image = $this->admin_image_model->delete_image_by_image_id($image_id);
					$delete_image_data = $this->admin_image_model->delete_image_data_by_image_id($image_id);
				
				}
				
				delete_files($temporary_images, TRUE);
				
			} // end if file_names != null
			
		}
		
		$data['data_main_content'] = 'admin_view/admin_news_view';
		$this->load->view('admin_template/admin_content', $data);
		
	} // end news function
	
	function process_create_news_upload_link() {
		$data['upload_link'] = site_url() . "/admin/upload_create_news_image";
		echo json_encode($data);
	}
	
	function upload_create_news_image() {
	
		$this->load->library('upload');
		
		$this->upload->initialize(array(
			"file_name" => $this->input->post('userfile'),
			"upload_path" => "temporary_uploads",
			"allowed_types" => "gif|jpg|png",
			"max_width" => "5000",
			"max_height" => "8000"
		));
		
		if($this->upload->do_upload('userfile')) {	
		
			$this->load->model('admin/admin_upload_model');
			
			$this->load->model('admin/admin_image_model');
			
			// set upload data array
			$upload_data = $this->upload->data();
			
			$upload_image = $this->admin_upload_model->upload_image($upload_data);
			
			$get_image_id = $this->admin_image_model->get_image_id_by_file_name($upload_data['file_name']);
			
			foreach($get_image_id as $row) {
				$image_id = $row->image_id;
			}
		
			$title = $this->input->post('title');
			$content = $this->input->post('news_content');
			$tags = $this->input->post('tags');
			
			$image_data = array(
				"title" => $this->input->post('image_title'),
				"caption" => $this->input->post('image_caption'),
				"category" => "news",
				"category_id" => "",
				"image_id" => $image_id
			);
	
			$upload_image_data = $this->admin_upload_model->upload_image_data($image_data);
			
			$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
			
			foreach($get_image_file_name as $image_row) {
				$file_name = $image_row->file_name;
			}
			
			/*$data['file_name'] = $file_name;
			$data['img_src'] = base_url() . "temporary_uploads/{$file_name}";
			$data['image_details_link'] = site_url() . "/admin/view_image_details?file_name={$file_name}";
			$data['image_delete_link'] = site_url() . "/admin/image_delete?file_name={$file_name}";*/
		
			$data['status'] = true;
			
		} else {
			$data['errors'] = $this->upload->display_errors();
			$data['status'] = false;			
		}
		
		$data['redirect'] = site_url() . "/admin/news?has_create_image=1&&title={$title}&&content={$content}&&tags={$tags}";
		
		echo json_encode($data);
	}
	
	function process_update_news_upload_link() {
		
		$data['upload_link'] = site_url() . "/admin/upload_update_news_image";

		echo json_encode($data);
	}
	
	function upload_update_news_image() {
		
		$this->load->library('upload');
		
		$update_id = $this->input->post('news_id');
		
		$this->upload->initialize(array(
			"file_name" => $this->input->post('userfile'),
			"upload_path" => "temporary_uploads",
			"allowed_types" => "gif|jpg|png",
			"max_width" => "5000",
			"max_height" => "8000"
		));

		if($this->upload->do_upload('userfile')) {	
		
			$this->load->model('admin/admin_upload_model');
			
			$this->load->model('admin/admin_image_model');
			
			// set upload data array
			$upload_data = $this->upload->data();
			
			$upload_image = $this->admin_upload_model->upload_image($upload_data);
			
			$get_image_id = $this->admin_image_model->get_image_id_by_file_name($upload_data['file_name']);
			
			foreach($get_image_id as $row) {
				$image_id = $row->image_id;
			}
		
			$image_data = array(
				"title" => $this->input->post('image_title'),
				"caption" => $this->input->post('image_caption'),
				"category" => "news",
				"category_id" => "",
				"image_id" => $image_id
			);
	
			$upload_image_data = $this->admin_upload_model->upload_image_data($image_data);
			
			$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
			
			foreach($get_image_file_name as $image_row) {
				$file_name = $image_row->file_name;
			}
			
			/*$data['file_name'] = $file_name;
			$data['img_src'] = base_url() . "temporary_uploads/{$file_name}";
			$data['image_details_link'] = site_url() . "/admin/view_image_details?file_name={$file_name}";
			$data['image_delete_link'] = site_url() . "/admin/image_delete?file_name={$file_name}";*/
			
			$data['status'] = true;
			
		} else {
			$data['errors'] = $this->upload->display_errors();
			$data['status'] = false;			
		}
		
		$data['redirect'] = site_url() . "/admin/news?has_update_image=1&&update_id={$update_id}&&current_tab=1";
		
		echo json_encode($data);
	
	} // end function

	function add_news() {
	
		$this->load->helper('date');
		
		$timestamp = now();
		$timezone = 'UP8';
		$date_time_convert = gmt_to_local($timestamp, $timezone);
		$date_created = unix_to_human($date_time_convert, TRUE, 'us');
		
		$this->load->model('admin/admin_news_model');
		
		$title = trim($this->input->post('title'));
		$content = $this->input->post('news_content');
		$tags = trim($this->input->post('tags'));
		
		$screen_content = trim($this->input->post('news_content'));
		$screen_content_blank = trim($this->input->post('news_content'));
		
		if($title == "" || $screen_content_blank == "" || $tags == "" || $screen_content == "Enter news here.." || $screen_content == "<p>Enter news here..</p>") {
		
			$this->session->set_flashdata('item', 'Fill in all of the fields');
			$this->session->set_flashdata('class_status', 'error');
			redirect('/admin/news');
			
		} else {
	
			$news_data = array(
				'title' => $title,
				'content' => $content,
				'username' => $this->session->userdata('username'),
				'date_created' => $date_created
			);
			
			$add_news = $this->admin_news_model->add_news($news_data);
		
			$get_news_id = $this->admin_news_model->get_news_id_by_title($title);
		
			foreach($get_news_id as $row) {
				$news_id = $row->news_id;
			}
			
			$tags_data = array(
				"tags" => $tags,
				"category" => "news",
				"category_id" => $news_id
			);
			
			$this->load->model('admin/admin_central_model');
			
			$add_tags = $this->admin_central_model->add_tags($tags_data);
			
			// below is for the adding of images in the database and move it to uploads 
	
			$this->load->model('admin/admin_image_model');
			
			$temporary_uploads = "temporary_uploads";
		
			$image_file_names = get_filenames($temporary_uploads);
			
			$file_names = array();
			
			foreach($image_file_names as $file_name) {
			
				$temporary_image_path = "temporary_uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$final_image_path = "uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$copy_image = copy($temporary_image_path, $final_image_path);
				
				$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
				
				foreach($get_image_id as $img_row) {
					$image_id = $img_row->image_id;
				}
				
				$update_image_data = $this->admin_image_model->update_image_data_category_id_by_image_id($news_id, $image_id);
			}
			
			
			$this->session->set_flashdata('item', 'News Successfully Created');
			$this->session->set_flashdata('class_status', 'success');
			redirect('/admin/news');
			
		} // end main else 
		
	} // end main function 

	function delete_news() {
		
		$news_id = $this->input->post('id');
		
		$this->load->model('admin/admin_news_model');
		$this->load->model('admin/admin_central_model');
		$this->load->model('admin/admin_image_model');
	
		foreach($news_id as $id) {
			
			$get_image_id = $this->admin_image_model->get_image_id_by_category_id($id);
		
			foreach($get_image_id as $row) {
				
				$image_id = $row->image_id;
			
				$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
		
				foreach($get_image_file_name as $file_row) {
					
					$image = $file_row->file_name; 
					$image_path = "uploads" . DIRECTORY_SEPARATOR . $image;
					$delete_image_path = unlink($image_path); 
					
				}
				
				$delete_image = $this->admin_image_model->delete_image_by_image_id($image_id);
			}
			
			$delete_image_data = $this->admin_image_model->delete_image_data_by_category_id($id);
			
		} // end main foreach news 
		
		$delete_news = $this->admin_news_model->delete_news($news_id);
		
		$delete_tags = $this->admin_central_model->delete_tags($news_id);
		
		if($delete_news && $delete_tags) {
			$data['status'] = true;
		} else {
			$data['status'] = false;
		}
		
		$data['admin_redirect'] = site_url() . "/admin/news?current_tab=1";
		
		echo json_encode($data);
		
	}
	
	function update_news() {
	
		$news_id = $this->input->post('news_id');
		$title = trim($this->input->post('update_title'));
		$content = $this->input->post('update_content');
		$tags = trim($this->input->post('update_tags'));
		$screen_content = trim($this->input->post('update_content'));
		
		$this->load->model('admin/admin_news_model');
		$this->load->model('admin/admin_central_model');
		
		if($title == "" || $tags == "") {
		
			$this->session->set_flashdata('update_item', 'All update fields must have a value');
			$this->session->set_flashdata('upadte_class_status', 'error');
			redirect('/admin/news?update_id=' . $news_id . '&&current_tab=1');
			
		} else {
			
			$news_data = array(
				"title" => $title,
				"content" => $content
			);
			
			$update_news = $this->admin_news_model->update_news($news_id, $news_data);
			
			$tags_data = array(
				"tags" => $tags
			);
			
			//$update_tags = $this->admin_central_model->update_tags($news_id, $tags_data);
			$update_tags = $this->admin_central_model->update_tags_by_category_id_category_and_tags_data($news_id, "news", $tags_data);
			
			// below is for the updating of the images for the news
			
			// insert temporary images first
			
			$this->load->model('admin/admin_image_model');
			
			$temporary_uploads = "temporary_uploads";
		
			$image_file_names = get_filenames($temporary_uploads);
			
			$file_names = array();
			
			foreach($image_file_names as $file_name) {
			
				$temporary_image_path = "temporary_uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$final_image_path = "uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$copy_image = copy($temporary_image_path, $final_image_path);
				
				$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
				
				foreach($get_image_id as $img_row) {
					$image_id = $img_row->image_id;
				}
				
				$update_image_data = $this->admin_image_model->update_image_data_category_id_by_image_id($news_id, $image_id);
			}
			
			// then delete the selected image for delete
			
			$get_image_pending_delete = $this->admin_image_model->get_image_pending_delete();
			
			foreach($get_image_pending_delete as $row_pending) {
			
				$image_id = $row_pending->image_id;
				
				$get_image_file_name_by_image_id = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
				
				foreach($get_image_file_name_by_image_id as $row_file) {
					
					// get file name
					$file_name = $row_file->file_name;
					
					// delete image in the folder
					$image = "uploads" . DIRECTORY_SEPARATOR . $file_name;
					$delete_image_file = unlink($image);
					
				}
			
				// delete images data and images
				
				$delete_image_by_image_id = $this->admin_image_model->delete_image_by_image_id($image_id);
				
				$delete_image_data_by_image_id = $this->admin_image_model->delete_image_data_by_image_id($image_id);
				
			}
			
			// empty pending for delete
			$empty_image_pending_delete = $this->admin_image_model->empty_image_pending_delete();
			
			$this->session->set_flashdata('update_item', 'News is successfully updated.');
			$this->session->set_flashdata('upadte_class_status', 'success');
			redirect('/admin/news?update_id=' . $news_id . '&&current_tab=1');
		}
		
	}
	
	// Articles sections below
	
	function articles() {
		
		$current_tab = $this->input->get('current_tab');
		
		if(isset($current_tab) && $current_tab != NULL) {
			$data['current_tab'] = $current_tab;
		} else {
			$data['current_tab'] = 0;
		}
		
		$this->load->model('admin/admin_articles_model');
		$this->load->model('admin/admin_central_model');
		$this->load->model('admin/admin_image_model');
	
		$update_id = $this->input->get('update_id');
		
		if(isset($update_id) && $update_id != NULL) {
			
			$get_selected_article = $this->admin_articles_model->get_article_by_id($update_id);
			$data['selected_article_data'] = $get_selected_article;
			
			//$get_selected_tags = $this->admin_central_model->get_tag_by_category_id($update_id);
			$get_selected_tags = $this->admin_central_model->get_tag_by_category_id_and_category($update_id, "articles");
			$data['selected_tags_data'] = $get_selected_tags;
			
			// set the data for update id
			
			$data['update_id'] = $update_id;
			
			// truncate the image pending delete table
			
			$empty_image_pending_delete_table = $this->admin_image_model->empty_image_pending_delete();
			
			// get images if available for update
			
			$get_image_id = $this->admin_image_model->get_image_id_by_category_id_and_category($update_id, "articles");
			
			$data['images_file_name'] = array();
			
			foreach($get_image_id as $row_image) {
				
				$update_image_id = $row_image->image_id;
				
				$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($update_image_id);
				
				foreach($get_image_file_name as $row_file_name) {
					
					$data['images_file_name'][] = array(
						"file_name" => $row_file_name->file_name
					);
				}
			}
			
			
		} else {
			$get_articles = $this->admin_articles_model->get_articles();
			$data['articles_data'] = $get_articles;
		}
		
		// below are for the images in the temporary uploads and its options
		
		// redirect values after uploading in create
		
		$has_create_image = $this->input->get('has_create_image');
		
		$title = $this->input->get('title');
		$content = $this->input->get('content');
		$tags = $this->input->get('tags');
		
		// redirect values after uploading in update
	
		$has_update_image = $this->input->get('has_update_image');
	
		// set isset images in delete or update or delete if there is no redirect values 
		
		if(isset($has_create_image) && $has_create_image == 1) {
			
			// get the additional temporary image for the create
			
			$images_path = "temporary_uploads";
			$images = get_filenames($images_path);
		
			$data['temporary_images'] = $images;
			
			$data['title'] = $title;
			$data['content'] = $content;
			$data['tags'] = $tags;
			
		} else if(isset($has_update_image) && $has_update_image == 1) {
			
			// get the additional temporary image for the update
			
			$images_path = "temporary_uploads";
			$images = get_filenames($images_path);
			
			$data['temporary_images'] = $images;
			
		} else {
			
			// delete all of the temporary images in its folder and inside the database
			
			$temporary_images = "temporary_uploads";
			
			$image_file_names = get_filenames($temporary_images);
			
			if($image_file_names != NULL) {
				
				$image_id_category_zero = $this->admin_image_model->get_image_id_category_zero();
				
				foreach($image_id_category_zero as $row) {
					$image_id = $row->image_id;
					
					$delete_image = $this->admin_image_model->delete_image_by_image_id($image_id);
					$delete_image_data = $this->admin_image_model->delete_image_data_by_image_id($image_id);
				
				}
				
				delete_files($temporary_images, TRUE);
				
			} // end if file_names != null
			
		}
		

		$data['data_main_content'] = 'admin_view/admin_articles_view';
		$this->load->view('admin_template/admin_content', $data);
	
	}
	
	function process_create_article_upload_link() {
		$data['upload_link'] = site_url() . "/admin/upload_create_article_image";
		echo json_encode($data);
	}
	
	function upload_create_article_image() {
		
		$this->load->library('upload');
		
		$this->upload->initialize(array(
			"file_name" => $this->input->post('userfile'),
			"upload_path" => "temporary_uploads",
			"allowed_types" => "gif|jpg|png",
			"max_width" => "5000",
			"max_height" => "8000"
		));
		
		if($this->upload->do_upload('userfile')) {	
		
			$this->load->model('admin/admin_upload_model');
			
			$this->load->model('admin/admin_image_model');
			
			// set upload data array
			$upload_data = $this->upload->data();
			
			$upload_image = $this->admin_upload_model->upload_image($upload_data);
			
			$get_image_id = $this->admin_image_model->get_image_id_by_file_name($upload_data['file_name']);
			
			foreach($get_image_id as $row) {
				$image_id = $row->image_id;
			}
		
			$title = $this->input->post('title');
			$content = $this->input->post('article_content');
			$tags = $this->input->post('tags');
			
			$image_data = array(
				"title" => $this->input->post('image_title'),
				"caption" => $this->input->post('image_caption'),
				"category" => "articles",
				"category_id" => "",
				"image_id" => $image_id
			);
	
			$upload_image_data = $this->admin_upload_model->upload_image_data($image_data);
			
			$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
			
			foreach($get_image_file_name as $image_row) {
				$file_name = $image_row->file_name;
			}
			
			$data['status'] = true;
			
		} else {
			$data['errors'] = $this->upload->display_errors();
			$data['status'] = false;			
		}
		
		$data['redirect'] = site_url() . "/admin/articles?has_create_image=1&&title={$title}&&content={$content}&&tags={$tags}";
		
		echo json_encode($data);
		
	}
	
	function process_update_article_upload_link() {
		$data['upload_link'] = site_url() . "/admin/upload_update_article_image";

		echo json_encode($data);
	}
	
	function upload_update_article_image() {
		
		$this->load->library('upload');
		
		$update_id = $this->input->post('article_id');
		
		$this->upload->initialize(array(
			"file_name" => $this->input->post('userfile'),
			"upload_path" => "temporary_uploads",
			"allowed_types" => "gif|jpg|png",
			"max_width" => "5000",
			"max_height" => "8000"
		));

		if($this->upload->do_upload('userfile')) {	
		
			$this->load->model('admin/admin_upload_model');
			
			$this->load->model('admin/admin_image_model');
			
			// set upload data array
			$upload_data = $this->upload->data();
			
			$upload_image = $this->admin_upload_model->upload_image($upload_data);
			
			$get_image_id = $this->admin_image_model->get_image_id_by_file_name($upload_data['file_name']);
			
			foreach($get_image_id as $row) {
				$image_id = $row->image_id;
			}
		
			$image_data = array(
				"title" => $this->input->post('image_title'),
				"caption" => $this->input->post('image_caption'),
				"category" => "articles",
				"category_id" => "",
				"image_id" => $image_id
			);
	
			$upload_image_data = $this->admin_upload_model->upload_image_data($image_data);
			
			$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
			
			foreach($get_image_file_name as $image_row) {
				$file_name = $image_row->file_name;
			}
			
			$data['status'] = true;
			
		} else {
			$data['errors'] = $this->upload->display_errors();
			$data['status'] = false;			
		}
		
		$data['redirect'] = site_url() . "/admin/articles?has_update_image=1&&update_id={$update_id}&&current_tab=1";
		
		echo json_encode($data);
		
	} // end function
	
	
	function add_article() {
		
		$this->load->helper('date');
		
		$timestamp = now();
		$timezone = 'UP8';
		$date_time_convert = gmt_to_local($timestamp, $timezone);
		$date_created = unix_to_human($date_time_convert, TRUE, 'us');
		
		$this->load->model('admin/admin_articles_model');
		
		$title = trim($this->input->post('title'));
		$content = $this->input->post('article_content');
		$tags = trim($this->input->post('tags'));
		
		$screen_content = trim($this->input->post('article_content'));
		$screen_content_blank = trim($this->input->post('article_content'));
		
		if($title == "" || $screen_content_blank == "" || $tags == "" || $screen_content == "Enter article here.." || $screen_content == "<p>Enter article here..</p>") {
		
			$this->session->set_flashdata('item', 'Fill in all of the fields');
			$this->session->set_flashdata('class_status', 'error');
			redirect('/admin/articles');
			
		} else {
	
			$article_data = array(
				'title' => $title,
				'content' => $content,
				'username' => $this->session->userdata('username'),
				'date_created' => $date_created
			);
			
			$add_article = $this->admin_articles_model->add_article($article_data);
		
			$get_article_id = $this->admin_articles_model->get_article_id_by_title($title);
		
			foreach($get_article_id as $row) {
				$article_id = $row->article_id;
			}
			
			$tags_data = array(
				"tags" => $tags,
				"category" => "articles",
				"category_id" => $article_id
			);
			
			$this->load->model('admin/admin_central_model');
			
			$add_tags = $this->admin_central_model->add_tags($tags_data);
			
			
			// below is for the adding of images in the database and move it to uploads 
	
			$this->load->model('admin/admin_image_model');
			
			$temporary_uploads = "temporary_uploads";
		
			$image_file_names = get_filenames($temporary_uploads);
			
			$file_names = array();
			
			foreach($image_file_names as $file_name) {
			
				$temporary_image_path = "temporary_uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$final_image_path = "uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$copy_image = copy($temporary_image_path, $final_image_path);
				
				$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
				
				foreach($get_image_id as $img_row) {
					$image_id = $img_row->image_id;
				}
				
				$update_image_data = $this->admin_image_model->update_image_data_category_id_by_image_id($article_id, $image_id);
			}
			
			$this->session->set_flashdata('item', 'Article is Successfully Created');
			$this->session->set_flashdata('class_status', 'success');
			redirect('/admin/articles');
			
		} // end main else 
	}

	function delete_article() {
		
		$article_id = $this->input->post('id');
		
		$this->load->model('admin/admin_articles_model');
		$this->load->model('admin/admin_central_model');
		$this->load->model('admin/admin_image_model');
		
		foreach($article_id as $id) {
			
			$get_image_id = $this->admin_image_model->get_image_id_by_category_id($id);
		
			foreach($get_image_id as $row) {
				
				$image_id = $row->image_id;
			
				$get_image_file_name = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
		
				foreach($get_image_file_name as $file_row) {
					
					$image = $file_row->file_name; 
					$image_path = "uploads" . DIRECTORY_SEPARATOR . $image;
					$delete_image_path = unlink($image_path); 
					
				}
				
				$delete_image = $this->admin_image_model->delete_image_by_image_id($image_id);
			}
			
			$delete_image_data = $this->admin_image_model->delete_image_data_by_category_id($id);
			
		} // end main foreach news 

	
		$delete_article = $this->admin_articles_model->delete_article($article_id);
		
		$delete_tags = $this->admin_central_model->delete_tags($article_id);
		
		if($delete_article && $delete_tags) {
			$data['status'] = true;
		} else {
			$data['status'] = false;
		}
		
		$data['admin_redirect'] = site_url() . "/admin/articles?current_tab=1";
		
		echo json_encode($data);
	}
	
	function update_article() {
		
		$article_id = $this->input->post('article_id');
		$title = trim($this->input->post('update_title'));
		$content = $this->input->post('update_content');
		$tags = trim($this->input->post('update_tags'));
		$screen_content = trim($this->input->post('update_content'));
		
		$this->load->model('admin/admin_articles_model');
		$this->load->model('admin/admin_central_model');
		
		if($title == "" || $tags == "") {
		
			$this->session->set_flashdata('update_item', 'All update fields must have a value');
			$this->session->set_flashdata('upadte_class_status', 'error');
			redirect('/admin/articles?update_id=' . $article_id . '&&current_tab=1');
			
		} else {
			
			$article_data = array(
				"title" => $title,
				"content" => $content
			);
			
			$update_article = $this->admin_articles_model->update_article($article_id, $article_data);
			
			$tags_data = array(
				"tags" => $tags
			);
			
			//$update_tags = $this->admin_central_model->update_tags($article_id, $tags_data);
			$update_tags = $this->admin_central_model->update_tags_by_category_id_category_and_tags_data($article_id, "articles", $tags_data);
			
			// below is for the updating of the images for the articles
			
			// insert temporary images first
			
			$this->load->model('admin/admin_image_model');
			
			$temporary_uploads = "temporary_uploads";
		
			$image_file_names = get_filenames($temporary_uploads);
			
			$file_names = array();
			
			foreach($image_file_names as $file_name) {
			
				$temporary_image_path = "temporary_uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$final_image_path = "uploads" . DIRECTORY_SEPARATOR . $file_name;
				
				$copy_image = copy($temporary_image_path, $final_image_path);
				
				$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
				
				foreach($get_image_id as $img_row) {
					$image_id = $img_row->image_id;
				}
				
				$update_image_data = $this->admin_image_model->update_image_data_category_id_by_image_id($article_id, $image_id);
			}
			
			// then delete the selected image for delete
			
			$get_image_pending_delete = $this->admin_image_model->get_image_pending_delete();
			
			foreach($get_image_pending_delete as $row_pending) {
			
				$image_id = $row_pending->image_id;
				
				$get_image_file_name_by_image_id = $this->admin_image_model->get_image_file_name_by_image_id($image_id);
				
				foreach($get_image_file_name_by_image_id as $row_file) {
					
					// get file name
					$file_name = $row_file->file_name;
					
					// delete image in the folder
					$image = "uploads" . DIRECTORY_SEPARATOR . $file_name;
					$delete_image_file = unlink($image);
					
				}
			
				// delete images data and images
				
				$delete_image_by_image_id = $this->admin_image_model->delete_image_by_image_id($image_id);
				
				$delete_image_data_by_image_id = $this->admin_image_model->delete_image_data_by_image_id($image_id);
				
			}
			
			// empty pending for delete
			$empty_image_pending_delete = $this->admin_image_model->empty_image_pending_delete();
			
			$this->session->set_flashdata('update_item', 'Article is successfully updated.');
			$this->session->set_flashdata('upadte_class_status', 'success');
			redirect('/admin/articles?update_id=' . $article_id . '&&current_tab=1');
		}
	}	

	// image manipulation sections below 
	
	function view_image_details() {
		
		$file_name = $this->input->get('file_name');
		$module = $this->input->get('module');
	
		if(isset($module) && $module == "update") {
			$folder_path = "uploads";
		} else {
			$folder_path = "temporary_uploads";
		}
		
		$image_src = base_url() . "{$folder_path}/{$file_name}";
		
		$this->load->model('admin/admin_image_model');
		
		$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
	
		foreach($get_image_id as $row) {
			$image_id = $row->image_id;
		}
		
		$images_data = $this->admin_image_model->get_image_data_by_image_id($image_id);
		
		foreach($images_data as $data) {
			$title = $data->title;
			$caption = $data->caption;
		}
		
		$data = array(
			"image_src" => $image_src,
			"title" => $title,
			"caption" => $caption
		);
		
		echo json_encode($data);
		
	}
	
	function image_delete() {
	
		$file_name = $this->input->get('file_name');
		$module = $this->input->get('module');
		
		$this->load->model('admin/admin_image_model');
		
		$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
		
		foreach($get_image_id as $row) {
			$image_id = $row->image_id;
		}
		
		$delete_image = $this->admin_image_model->delete_image_by_image_id($image_id);
		
		$delete_image_data = $this->admin_image_model->delete_image_data_by_image_id($image_id);
	
		if(isset($module) && $module == "update") { 
			$image = "uploads" . DIRECTORY_SEPARATOR . $file_name;
		} else {
			$image = "temporary_uploads" . DIRECTORY_SEPARATOR . $file_name;
		}
	
		$delete_image_file = unlink($image);
		
		if($delete_image && $delete_image_data && $delete_image_file) {
			$data['status'] = true;
		} else {	
			$data['status'] = false;
		}
		
		echo json_encode($data);
		
	}
	
	function set_image_for_delete() {
		
		$this->load->model('admin/admin_image_model');
		
		$file_name = $this->input->get('file_name');
		
		$get_image_id = $this->admin_image_model->get_image_id_by_file_name($file_name);
		
		foreach($get_image_id as $row) {
			$image_id = $row->image_id;
		}
	
		$pending_data = array(
			"image_id" => $image_id
		);
		
		$insert_image_pending_delete = $this->admin_image_model->insert_image_pending_delete($pending_data);
	
		if($insert_image_pending_delete) {
			$data['status'] = true;
		} else {
			$data['status'] = false;
		}
		
		echo json_encode($data);
		
	}

} // end class 




























