<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// global variables below 
	
	private $get_page_tags_by_url;
	
	// lets construct below 
	
	function __construct() {
		parent::__construct();
	
		$this->load->model('page_tags_model');
		$url = current_url();
		
		$this->get_page_tags_by_url = $this->page_tags_model->get_page_tags_by_url($url);
		
		$this->session->set_userdata('page_tags', $this->get_page_tags_by_url);
	
	}
	
	/* right navigation below */
	
		function index() {
			
			//get the news section and pass
			$this->load->model("news_model");
			$get_news = $this->news_model->get_news();
			$data['news_data'] = $get_news;
			
			// get the articles section and pass
			$this->load->model("articles_model");
			$get_articles = $this->articles_model->get_articles();
			$data['articles_data'] = $get_articles;
			
			$data['main_content'] = 'home_view';
			$this->load->view('template/content', $data);
			
		}
		
		function contact() {
		
			$data['page_title'] = "Contact Us";
		
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Contact Us</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "contact_view";
			$this->load->view('template/content', $data);
		}
		
		function process_message() {
			
			$full_name = trim($this->input->post('full_name'));
			$email = trim($this->input->post('email'));
			$subject = trim($this->input->post('subject'));
			$message = trim($this->input->post('message'));
			
			$this->load->library('email');

			$this->email->from($email, $full_name);
			$this->email->to('janiuaywebmasters@gmail.com'); 
	
			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');	

			if($this->email->send()) {
				redirect('/home/form/', 'refresh');
			} else {
				echo $this->email->print_debugger();
			}
		}
		
		function message_sent() {
			$data['page_title'] = "Message Sent";
		
			$site_url = site_url();
			$contact = site_url() . "/home/contact";
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; <a href='{$contact}'>Contact Us</a> &raquo; Message Sent</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "message_sent_view";
			$this->load->view('template/content', $data);
		}
		
		function site_map() {
			
			$data['page_title'] = "Sitemap";
		
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Sitemap</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "sitemap_view";
			$this->load->view('template/content', $data);
			
			
		}
	
	/* end right navigation  */
	
	/* homepage features below */ 
	
		function read_news() {
		
			$data['page_title'] = "News";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; News</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$news_id = $this->input->get('id');
			
			$this->load->model('news_model');
			$this->load->model('image_model');
			
			$get_news_by_id = $this->news_model->get_news_by_news_id($news_id);
			$data['selected_news'] = $get_news_by_id;
			
			$get_image_id = $this->image_model->get_image_id_by_category("news");
			
			if($get_image_id != NULL) {
				
				$data['image_file_names'] = array();
			
				foreach($get_image_id as $row) {
					$image_id = $row->image_id;
					$get_image_file_name_by_image_id = $this->image_model->get_image_file_name_by_image_id($image_id);          
					
					foreach($get_image_file_name_by_image_id as $row_file) {
						$file_name = $row_file->file_name;
						
						$data['image_file_names'][] = array(
							"file_name" => $file_name
						);
					}
				}
			}
			
			$data['main_content'] = "read_news_view";
			$this->load->view('template/content', $data);
		}
		
		function read_article() {
		
			$data['page_title'] = "Article";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Article</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$article_id = $this->input->get('id');
			
			$this->load->model('articles_model');
			$this->load->model('image_model');
			
			$get_article_by_id = $this->articles_model->get_article_by_article_id($article_id);
			$data['selected_article'] = $get_article_by_id;
		
			$get_image_id = $this->image_model->get_image_id_by_category("articles");
		
			if($get_image_id != NULL) {
				
				$data['image_file_names'] = array();
			
				foreach($get_image_id as $row) {
					$image_id = $row->image_id;
					$get_image_file_name_by_image_id = $this->image_model->get_image_file_name_by_image_id($image_id);          
					
					foreach($get_image_file_name_by_image_id as $row_file) {
						$file_name = $row_file->file_name;
						
						$data['image_file_names'][] = array(
							"file_name" => $file_name
						);
					}
				}
			}
			
			$data['main_content'] = "read_article_view";
			$this->load->view('template/content', $data);
			
		
		}
		
		function process_barangay_request() {
		
			$request_barangay = $this->input->get('barangay_request');
			
			$data['request_barangay'] = site_url() . "/home/barangays?request_barangay=" . $request_barangay;
			
			echo json_encode($data);
		}
	
	/* end homepage features */  
	
	/* Mayors page below */
	
		function mayors_message() {
			
			$data['page_title'] = "Mayor's Message";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Mayors Page &raquo; Mayor's Message</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
		
		function biographical_sketch() {
			
			$data['page_title'] = "Biographical Sketch";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Mayors Page &raquo; Biographical Sketch</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
		
		function local_government_unit() {
			
			$data['page_title'] = "Local Government Unit";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Mayors Page &raquo; Local Government Unit</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "local_government_unit_view";
			$this->load->view('template/content', $data);
		}
		
	/* end mayors_page */
	
	/* Services below */
	
		function legislative_services() {
			
			$data['page_title'] = "Legislative Services";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Legislative Services</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
		function executive_services() {
			
		}

			/* under executive_services */
		
			function public_administration() {
			}
		
				/* under public_administration */
				
				function office_of_the_administration() {
					
					$scroll_location = $this->input->get('scroll_location'); 
					
					if(isset($scroll_location) && $scroll_location != NULL) {
						$data['scroll_location'] = $scroll_location;
					}
					
					$data['page_title'] = "Office of the Administration";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Public Administration &raquo; Office of the Administration</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$data['main_content'] = "office_of_the_administration_view";
					$this->load->view('template/content', $data);
				}
		
				function human_resource_mun_officer() {
					
					$data['page_title'] = "Office of the Human Resource Municipal Officer";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Public Administration &raquo; Office of the Human Resource Municipal Officer</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
				function menro() {
					
					$data['page_title'] = "Office of the MENRO";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Public Administration &raquo; Office of the MENRO</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
			function economic_and_planning() {
			}
		
				/* under economic_and_planning */
				
				function agriculture() {
					
					$data['page_title'] = "Office of the Agriculture";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Economic and Planning &raquo; Office of the Agriculture</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
				function planning_and_development() {
					
					$data['page_title'] = "Office of the Planning and Development";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Economic and Planning &raquo; Office of the Planning and Development</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
				function economic_enterprises() {
					
					$data['page_title'] = "Office of the Economic Enterprises";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Economic and Planning &raquo; Office of the Economic Enterprises</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
			function financial_management() {
			}
		
				/* under financial_management */
				
				function office_of_the_municipal_accountant() {
					
					$data['page_title'] = "Municipal Accountant Office";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Financial Management &raquo; Office of the Municipal Accountant</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$data['main_content'] = "office_of_the_municipal_accountant_view";
					$this->load->view('template/content', $data);
				}
				
				function treasurer() {
					
					$data['page_title'] = "Office of the Treasurer";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Financial Management &raquo; Office of the Treasurer</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
				
				function office_of_the_municipal_budget_officer() {
					
					$data['page_title'] = "Municipal Budget Officer Office";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Financial Management &raquo; Office of the Municipal Budget Officer</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$data['main_content'] = "office_of_the_municipal_budget_officer_view";
					$this->load->view('template/content', $data);
				}
				
				function assessor() {
					
					$data['page_title'] = "Office of the Assessor";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Financial Management &raquo; Office of the Assessor</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
		
			function infrastructure() {
			}
		
				/* under infrastructure */
				
				function engineer() {
					
					$data['page_title'] = "Office of the Engineer";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Infrastructure &raquo; Office of the Engineer</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$this->not_available($data);
				}
				
			function social_services() {
			}
		
				/* under social services */
				
				function office_of_the_municipal_social_welfare_and_development() {
					
					$data['page_title'] = "Municipal Social Welfare and Development Office";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Social Services &raquo; Office of the Municipal Social Welfare and Development</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$data['main_content'] = "office_of_the_municipal_social_welfare_and_development_view";
					$this->load->view('template/content', $data);
				}
		
				function rural_health_office() {
					
					$data['page_title'] = "Rural Health Office";
					
					$site_url = site_url();
					$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Executive Services &raquo; Social Services &raquo; Rural Health Office</p>";
					
					$data['breadcrumbs'] = "
						<div id='breadcrumbs' class='grid_12'>
							{$breadcrumb_link}
						</div>
					";
					
					$data['main_content'] = "rural_health_office_view";
					$this->load->view('template/content', $data);
				}
		
		function special_services() {
			
			$data['page_title'] = "Special Services";
		
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Services &raquo; Special Services</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "special_services_view";
			$this->load->view('template/content', $data);
		}
		
	/* end services */

	/* media gallery */
	
		function photo_gallery() {
			
			$scroll_location = $this->input->get('scroll_location'); 
			
			if(isset($scroll_location) && $scroll_location != NULL) {
				$data['scroll_location'] = $scroll_location;
			}
			
			$data['page_title'] = "Photo Gallery";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Media Gallery &raquo; Photo Gallery</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			
			$data['main_content'] = "photo_gallery_view";
			$this->load->view('template/content', $data);
		}
	
		function video_gallery() {
		
			$data['page_title'] = "Video Gallery";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Media Gallery &raquo; Video Gallery</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
		function audio_gallery() {	
			
			$data['page_title'] = "Audio Gallery";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Media Gallery &raquo; Audio Gallery</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
		function media_gallery_downloadables() {
			
			$data['page_title'] = "Media Gallery Downloadables";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Media Gallery &raquo; Media Gallery Downloadables</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
	/* end media gallery */
	
	/* map and location */
	
		function my_location() {
			
			$data['page_title'] = "My Location";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Map and Location &raquo; My Location</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "my_location_view";
			$this->load->view('template/content', $data);
		}
	
		function tourist_spot() {
			
			$data['page_title'] = "Tourist Spot";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Map and Location &raquo; Tourist Spot</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
		function local_heritage() {
			
			$data['page_title'] = "Local Heritage";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Map and Location &raquo; Local Heritage</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
		function travel_information() {
			
			$data['page_title'] = "Travel Information";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Map and Location &raquo; Travel Information</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
		
		function map_and_location_downloadables() {
			
			$data['page_title'] = "Map and Location Downloadables";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Map and Location &raquo; Map and Location Downloadables</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
		
	/* end map and location */
	
	/* tourism */
	
		function tourism() {
			
			$data['page_title'] = "Tourism";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Tourism</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$this->not_available($data);
		}
	
	/* end tourism */
	
	/* about us */
		
		function history() {
			
			$data['page_title'] = "History of Janiuay";
			
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; About Us &raquo; History</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			$data['main_content'] = "history_view";
			$this->load->view('template/content', $data);
		}
		
		function barangays() {
		
			$data['page_title'] = "Barangays";
		
			$site_url = site_url();
			$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; About Us &raquo; Barangays</p>";
			
			$data['breadcrumbs'] = "
				<div id='breadcrumbs' class='grid_12'>
					{$breadcrumb_link}
				</div>
			";
			
			// request barangay from home 
			$request_barangay = $this->input->get('request_barangay');
			if(isset($request_barangay) && $request_barangay != NULL) {
				$data['request_barangay'] = $request_barangay;
			} else {
				$data['request_barangay'] = "abangay";
			}
			
			// get all barangays 
			$this->load->model('barangay_model');
			$get_barangays = $this->barangay_model->get_barangays();
			$data['barangay_name'] = $get_barangays;
			
			$data['main_content'] = "barangays_view";
			$this->load->view('template/content', $data);
		}
		
		function schools() {
			
		}
	
			/* under schools */
		
			function quipot_high_school() {
				
				$data['page_title'] = "Quipot National High School";
				
				$site_url = site_url();
				$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; About Us &raquo; Schools &raquo; Quipot National High School</p>";
				
				$data['breadcrumbs'] = "
					<div id='breadcrumbs' class='grid_12'>
						{$breadcrumb_link}
					</div>
				";
				
				$data['main_content'] = "quipot_highschool_view";
				$this->load->view('template/content', $data);
			}
	
	/* end about us */
	

	/* functions for image_manipulations below */
	
		function view_image_details() {
			
			$file_name = $this->input->get('file_name');
		
			$folder_path = "uploads";
		
			$image_src = base_url() . "{$folder_path}/{$file_name}";
			
			$this->load->model('image_model');
			
			$get_image_id = $this->image_model->get_image_id_by_file_name($file_name);
		
			foreach($get_image_id as $row) {
				$image_id = $row->image_id;
			}
			
			$images_data = $this->image_model->get_image_data_by_image_id($image_id);
			
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
	
	/* end image manipulations */
	
	/* functions for downloads below */
	
		function notes_to_financial_statement_download() {
			
			$this->load->helper('download');
			
			$file = "downloadables" . DIRECTORY_SEPARATOR . "notes to financial statements.docx";
			$data = file_get_contents($file); 
			$name = 'notes to financial statements.docx';
		
			force_download($name, $data);
		}
		
		function guidelines_on_the_assesment_of_the_solo_parents_download() {
			$this->load->helper('download');
			
			$file = "downloadables" . DIRECTORY_SEPARATOR . "guidelines on the assesment of the solo parents.docx";
			$data = file_get_contents($file); 
			$name = 'guidelines on the assesment of the solo parents.docx';
		
			force_download($name, $data);
		}
		
		function pantawid_pamilyang_pilipino_program_download() {
			$this->load->helper('download');
			
			$file = "downloadables" . DIRECTORY_SEPARATOR . "pantawid pamilyang pilipino program.docx";
			$data = file_get_contents($file); 
			$name = 'pantawid pamilyang pilipino program.docx';
		
			force_download($name, $data);
		}
		
		function mswd_projects_programs_and_services_download() {
			$this->load->helper('download');
			
			$file = "downloadables" . DIRECTORY_SEPARATOR . "mswd projects programs and services.docx";
			$data = file_get_contents($file); 
			$name = 'mswd projects programs and services.docx';
		
			force_download($name, $data);
		}
		
		function demographic_profile_download() {
			$this->load->helper('download');
			
			$file = "downloadables" . DIRECTORY_SEPARATOR . "demographic_profile.docx";
			$data = file_get_contents($file); 
			$name = 'demographic_profile.docx';
		
			force_download($name, $data);
		}
	
	/* end downloads */
	
	function process_page_tags() {
	
		$page_tag_id = $this->input->post('page_tag_id');
		$action = $this->input->post('action');
		
		$page_tags_data = array(
			"page_tags" => trim($this->input->post('page_tags')),
			"url" => $this->input->post('url')
		);
		
		$this->load->model('page_tags_model');
		
		if(isset($action) && $action == "add") {
			$add_page_tags = $this->page_tags_model->add_page_tags($page_tags_data);
			
			if($add_page_tags) {
				$data['status'] = true;
			} else {
				$data['status'] = false;
			}
		
		} elseif(isset($action) && $action == "update") {
			$update_page_tags = $this->page_tags_model->update_page_tags($page_tag_id, $page_tags_data);
			
			if($update_page_tags) {
				$data['status'] = true;
			} else {
				$data['status'] = false;
			}
		}
		
		echo json_encode($data);
	
	}
	
	function forgot_password() {
		
		$data['page_title'] = "Forgot Password";
		
		$site_url = site_url();
		$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Forgot Password</p>";
		
		$data['breadcrumbs'] = "
			<div id='breadcrumbs' class='grid_12'>
				{$breadcrumb_link}
			</div>
		";
		
		$data['main_content'] = "forgot_password_view";
		$this->load->view('template/content', $data);
	
	}
	
	function retrieve_password() {
	}
	
	function search() {
		
		$data['page_title'] = "Search";
		
		$site_url = site_url();
		$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Search</p>";
		
		$data['breadcrumbs'] = "
			<div id='breadcrumbs' class='grid_12'>
				{$breadcrumb_link}
			</div>
		";
		
		$data['main_content'] = "search_view";
		$this->load->view('template/content', $data);
	}
	
	// encryptions tests for security
	
	function secure() {
		$this->load->helper('security');
		echo do_hash("patanoy@*05");
	}
	
	function not_available($data) {
		
		$data['main_content'] = "not_available_view";
		$this->load->view('template/content', $data);
		
	}
	
} // end class 




