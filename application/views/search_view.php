	<?php 
		$search_something = $this->input->post('search_something');
	?>
	
	<link rel="stylesheet" href="<?php echo base_url();?>styles/search.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 search">
			<div id="search_area" class="grid_9 omega">
				<form action="<?php echo site_url(); ?>/home/search" id="inside_search" method="post">
					<?php
						if(isset($search_something) && $search_something != NULL) {
					?>
						<input type="text" name="search_something" value="<?php echo $search_something; ?>" id="main_search" />
					<?php
						} else {
					?>
						<input type="text" name="main_search" id="main_search" />
					<?php 
						}
					?>
					
					<input type="submit" value="Search" />
				</form>
			</div>
			<div id="search_results">
				<?php
					
					if(isset($search_something) && $search_something != NULL) {
						
						// search the page tags first 
						$get_page_tags_data_by_search_value = $this->search_model->get_page_tags_data_by_search_value($search_something);

						if(isset($get_page_tags_data_by_search_value) && $get_page_tags_data_by_search_value != NULL) {
							foreach($get_page_tags_data_by_search_value as $row) {
								$page_tag_id = $row->page_tag_id;
								$page_tags = $row->page_tags;
								$page_description = $row->page_description;
								$url = $row->url;
								$page_title = $this->search->get_url_title($url);

								echo "
									<div>
										<h1>{$page_title}</h1>
										<p>{$page_description}</p>
										<p><a href='{$url}'>{$url}</a></p>
									</div>
								";
							}
						}
						
						// then search the tags for the news and articles 
						$get_tags_data_by_search_value = $this->search_model->get_tags_data_by_search_value($search_something);
						
						if(isset($get_tags_data_by_search_value) && $get_tags_data_by_search_value != NULL) {
							foreach($get_tags_data_by_search_value as $row_second) {
								
								// get tags data to get the url
								$tag_id = $row_second->tag_id;
								$tags = $row_second->tags;
								$category = $row_second->category;
								$category_id = $row_second->category_id;
								
								if($category == "news") {
									$tag_url = base_url() . "index.php/home/read_news?id=" . $category_id;
									
									// get the news data for the title and the description
									
									$get_news_data_by_category_id = $this->search_model->get_news_data_by_category_id($category_id);
									
									foreach($get_news_data_by_category_id as $news_row) {
										$id = $news_row->news_id;
										$title = $news_row->title;
										$content = word_limiter($news_row->content, 20);
									}
									
								} elseif($category == "articles") {
									$tag_url = base_url() . "index.php/home/read_article?id=" . $category_id;
									
									// get the article data for the title and description 
									
									$get_article_data_by_category_id = $this->search_model->get_article_data_by_category_id($category_id);
									
									foreach($get_article_data_by_category_id as $article_row) {
										$id = $article_row->article_id;
										$title = $article_row->title;
										$content = word_limiter($article_row->content, 20);
									}
								} 
								
								echo "
									<div>
										<h1>{$title}</h1>
										<p>{$content}</p>
										<p><a href='{$tag_url}'>{$tag_url}</a></p>
									</div>
								";
								
							} // end foreach
						} // end main if for news and titles
						
						// check below if there are null values 
						
						if( (isset($get_page_tags_data_by_search_value) && $get_page_tags_data_by_search_value == NULL) &&  (isset($get_tags_data_by_search_value) && $get_tags_data_by_search_value == NULL)  ) {
							echo "
								<div>
									<p>No Results Found.</p>
								</div>
							";
						}
						
					}
				?>
			</div>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->