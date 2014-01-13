	<link rel="stylesheet" href="<?php echo base_url();?>styles/articles.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 articles">
			
			<?php
				
				if(isset($articles_data) && $articles_data != NULL) {
					foreach($articles_data as $row) {
					
						$article_id = $row->article_id;
						$title = $row->title;
						$content = word_limiter($row->content, 20);
						$date_created = $row->date_created;
						$read_article_link = site_url() . "/home/read_article?id=" . $article_id;
						
						$pass_articles_data = array(
							'article_id' => $article_id,
							'title' => $title,
							'content' => $content,
							'date_created' => $date_created,
							'read_article_link' => $read_article_link
						);
						
						$thumbnail_image_src = base_url() . "images/sample_thumbnail.png"; 
						
						$this->load->model("articles_model");
						
						$get_image_data = $this->articles_model->get_article_images_by_category_and_article_id("articles", $article_id);
					
						$pass_articles_data['image'] = array();
						
						foreach($get_image_data as $row_i) {
							$pass_articles_data['image'][] = array(
								"name" => $row_i->orig_name
							);
						}
						
			?>
						<div>
							<?php 
								if(count($pass_articles_data['image']) != 0) {
							
							?>
									<a href="<?php echo $pass_articles_data['read_article_link']; ?>"><img class="articles_thumbnail" src="<?php echo base_url() . 'uploads/' . $pass_articles_data['image'][0]['name'];?>" alt="news thumbnail image" /></a>
							<?php 
								} else {
							?>
									<a href="<?php echo $pass_articles_data['read_article_link']; ?>"><img class="articles_thumbnail" src="<?php echo $thumbnail_image_src; ?>" alt='Articles Thumbnail' /></a>
							<?php 
								}
							?>
							
							<h4><?php echo $pass_articles_data['title']; ?></h4>
							<p class='date_ui'><?php echo $pass_articles_data['date_created']; ?></p>
							<p><?php echo $pass_articles_data['content']; ?></p>
							<p class='more'><a href='<?php echo $pass_articles_data['read_article_link']; ?>'>read more..</a></p>
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