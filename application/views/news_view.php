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
						
						$thumbnail_image_src = base_url() . "images/sample_thumbnail.png"; 
						
						echo "
							<div>
								<img src='{$thumbnail_image_src}' alt='News Thumbnail' />
								<h4>{$title}</h4>
								<p class='date_ui'>{$date_created}</p>
								<p>{$content}</p>
								<p class='more'><a href='{$read_news_link}'>read more..</a></p>
							</div>
						";
					}
				}
			?>
			
		</div> <!--end news-->
		
		<!-- login tool below -->
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
		

	</div> <!--end content_area-->