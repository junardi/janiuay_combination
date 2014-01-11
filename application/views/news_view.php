	<link rel="stylesheet" href="<?php echo base_url();?>styles/news.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 news">
			
			<?php
				
				if(isset($news_data) && $news_data != NULL) {
					foreach($news_data as $row) {
					
						$news_id = $row->news_id;
						$title = $row->title;
						$content = word_limiter($row->content, 20);
						$date_created = $row->date_created;
						$read_news_link = site_url() . "/home/read_news?id=" . $news_id;
						
						$pass_news_data = array(
							'news_id' => $news_id,
							'title' => $title,
							'content' => $content,
							'date_created' => $date_created,
							'read_news_link' => $read_news_link
						);
						
						$thumbnail_image_src = base_url() . "images/sample_thumbnail.png"; 
						
						$this->load->model("news_model");
						
						$get_image_data = $this->news_model->get_news_images_by_category_and_news_id("news", $news_id);
					
						$pass_news_data['image_id'] = array();
						
						foreach($get_image_data as $row_i) {
							$pass_news_data['image_id'][] = array(
								"id" => $row_i->orig_name
							);
						}
						
			?>
						<div>
							<img src="<?php echo $thumbnail_image_src; ?>" alt='News Thumbnail' />
							<h4><?php echo $pass_news_data['title']; ?></h4>
							<p class='date_ui'><?php echo $pass_news_data['date_created']; ?></p>
							<p><?php echo $pass_news_data['content']; ?></p>
							<p class='more'><a href='<?php echo $pass_news_data['read_news_link']; ?>'>read more..</a></p>
						
							<?php 
								if(count($pass_news_data['image_id']) != 0) {
							
							?>
									<p><?php echo $pass_news_data['image_id'][0]['id']; ?></p>
							<?php 
								}
							?>
							
						</div>
			<?php 
						
						
					} // end main foreach
				} // end if
		
			?>
			
		</div> <!--end news-->
		
		<!-- login tool below -->
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
		

	</div> <!--end content_area-->