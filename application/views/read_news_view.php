	<link rel="stylesheet" href="<?php echo base_url();?>styles/read_news.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 read_news">
			
			<?php if(isset($selected_news) && $selected_news != NULL ) { ?>
				<?php
					foreach($selected_news as $row) {
						$news_id = $row->news_id;
						$title = $row->title;
						$content = $row->content;
					} 
				?>
				
				<h3><?php echo $title; ?></h3>
				<div class="content">
					<?php echo $content; ?>
				</div>
				
			<?php } else { ?>
				<?php 
					echo "
						<div>
							<p style='text-align: center;'>News not found. Select news in the homepage.</p>
						</div>
					";
				?>
			<?php } ?>
			
			<?php if(isset($image_file_names) && $image_file_names != NULL) { ?>
					<div id="slider">
				
						<img class="scrollButtons left" src="<?php echo base_url(); ?>images/moving_box/leftarrow.png">

						<div style="overflow: hidden;" class="scroll">

							<div class="scrollContainer">

								<?php
									if(count($image_file_names) == 1) {
										
										$num_pan = 2;
										
										$slide_display = "	
											<div class='panel' id='panel_1'>
							
											</div>
											<div class='panel' id='panel_2'>
							
											</div>
										";
										
										for($i = 0; $i < count($image_file_names); $i++) {
											
											$image_name = $image_file_names[$i]['file_name'];
											$image_src = base_url() . "uploads/{$image_name}";
											$image_details_link = site_url() . "/home/view_image_details?file_name={$image_name}";
										
											$num_pan += 1;
											
											$slide_display .= "
												<div class='panel' id='panel_{$num_pan}'>
													<div class='inside'>
														<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='current image' /></a></abbr>
													</div>
												</div>
											";
										
										}
										
										$slide_display .= "	
											<div class='panel' id='panel_4'>
							
											</div>
											<div class='panel' id='panel_5'>
							
											</div>
										";
										
										echo $slide_display;
									
									} elseif(count($image_file_names) == 2) {
										
										$num_pan = 2;
										
										$slide_display = "	
											<div class='panel' id='panel_1'>
							
											</div>
											<div class='panel' id='panel_2'>
							
											</div>
										";
										
										for($i = 0; $i < count($image_file_names); $i++) {
											
											$image_name = $image_file_names[$i]['file_name'];
											$image_src = base_url() . "uploads/{$image_name}";
											$image_details_link = site_url() . "/home/view_image_details?file_name={$image_name}";
										
											$num_pan += 1;
											
											$slide_display .= "
												<div class='panel' id='panel_{$num_pan}'>
													<div class='inside'>
														<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='current image' /></a></abbr>
													</div>
												</div>
											";
										
										}
										
										$slide_display .= "	
											<div class='panel' id='panel_5'>
							
											</div>
											<div class='panel' id='panel_6'>
							
											</div>
										";
										
										echo $slide_display;
										
									} elseif(count($image_file_names) == 3) {
										
										$num_pan = 1;
										
										$slide_display = "	
											<div class='panel' id='panel_1'>
							
											</div>
										";
										
										for($i = 0; $i < count($image_file_names); $i++) {
											
											$image_name = $image_file_names[$i]['file_name'];
											$image_src = base_url() . "uploads/{$image_name}";
											$image_details_link = site_url() . "/home/view_image_details?file_name={$image_name}";
										
											$num_pan += 1;
											
											$slide_display .= "
												<div class='panel' id='panel_{$num_pan}'>
													<div class='inside'>
														<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='current image' /></a></abbr>
													</div>
												</div>
											";
										
										}
										
										$slide_display .= "	
											<div class='panel' id='panel_5'>
							
											</div>
										";
										
										echo $slide_display;
										
									} else {
										
										for($i = 0; $i < count($image_file_names); $i++) {
											
											$image_name = $image_file_names[$i]['file_name'];
											$image_src = base_url() . "uploads/{$image_name}";
											$image_details_link = site_url() . "/home/view_image_details?file_name={$image_name}";
											
											echo "
												<div class='panel' id='panel_{$i}'>
													<div class='inside'>
														<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='current image' /></a></abbr>
													</div>
												</div>
											";
										
										}
										
									}
									
								?>
							</div>

							<div id="left-shadow"></div>
							<div id="right-shadow"></div>

						</div>

						<img class="scrollButtons right" src="<?php echo base_url(); ?>images/moving_box/rightarrow.png">
						
					</div> <!-- end slider -->
			
			<?php } ?>
		
		</div> <!--end read news-->
		
		<!-- login tool below -->
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
		
		<!-- Image Popup Tool Below -->

		<link rel="stylesheet" href="<?php echo base_url();?>styles/slider.css" type="text/css" media="screen"/>
	
		<?php $this->load->view('tools/image_popup'); ?>
		
	
	</div> <!--end content_area-->