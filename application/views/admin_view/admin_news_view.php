	<!--<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>-->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>tiny/js/tinymce/tinymce.min.js"></script>
	
	<script>
		
		/*tinymce.init({
			selector: 'textarea',
			height: 300,
			width: 700
		});*/
		
		tinymce.init({
			mode : "specific_textareas",
			editor_selector : "mceEditor",
			height: 300,
			width: 700
		});
		
	</script>
	<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style/news.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style/image_popup.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="news">
			<h1>Manage News</h1>
			<div class="tabs">
				<ul class="main">
					<li><a href="#tabs-1">Create News</a></li>
					<li><a href="#tabs-2">View Delete Edit News</a></li>
				</ul>
				<!-- Create news tab -->
				<div id="tabs-1">
					<p class="top_prompt <?php echo $this->session->flashdata('class_status'); ?>"><?php echo $this->session->flashdata('item'); ?></p>
					
					<form id="news_form" action="<?php echo site_url(); ?>/admin/add_news" method="post" enctype="multipart/form-data">	
						<table class="create">
							<tr>
								<td><label for="news_title">Title</label></td>
								<td><input type="text" name="title" id="news_title" value="<?php if(isset($title)){ echo $title; } ?>" /></td>
							</tr>
							<tr>
								<td colspan="2">
									<textarea class="mceEditor" name="news_content" id="news_content"><?php if(isset($content)){ echo $content; } else { echo "Enter content here..";} ?></textarea>
								</td>
							</tr>
							<tr>
								<td><label for="news_tags">Tags</label></td>
								<td><input type="text" name="tags" id="news_tags" value="<?php if(isset($tags)){ echo $tags; } ?>"/></td>
							</tr>
							<tr>
								<td colspan="2">Seperate multiple tags w/ a comma &#8593;</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="upload_image" class="upload_image" value="yes" /></td>
								<td>upload image</td>
							</tr>
							<tr class="upload_area">
								<td><input type="file" name="userfile" id="userfile" size="20" /></td>
							</tr>
							<tr class="upload_area">
								<td>Title</td>
								<td><input type="text" name="image_title" id="image_title"/></td>
							</tr>
							<tr class="upload_area">
								<td>Caption</td>
								<td>
									<textarea name="image_caption" id="image_caption" cols="35" rows="10"></textarea>
								</td>
							</tr>
							<tr class="upload_area">
								<td><a href="<?php echo site_url(); ?>/admin/process_create_news_upload_link" class="news_upload_button">Upload</a></td>
							</tr>
						</table>
						
						<div class="progressbar">
							<div class="status_num">0</div>
						</div>
						
						<div id="temporary_images">		
							<?php	
								if(isset($temporary_images) && $temporary_images != NULL) {
								
									foreach($temporary_images as $image) {
									
										$image_src = base_url() . "temporary_uploads/{$image}";
										
										$image_details_link = site_url() . "/admin/view_image_details?file_name={$image}";
										
										$image_delete_link = site_url() . "/admin/image_delete?file_name={$image}";
										
										echo "
											<div class='image_container'>
												<a class='delete_image' href='{$image_delete_link}'>&#215;</a>
												<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='temporay_image' /></a></abbr>
											</div>
										";
									}
								} 
							?>
						</div>
						
						<table class="actions">
							<tr>
								<td><input type="submit" value="Create News"/></td>
								<td><input id="clear_news" type="reset" value="Clear" /></td>
							</tr>
						</table>
					
					</form>
					
				</div> <!--end tabs 1-->
				
				<!-- Create View, Edit, Delete News tab -->
				<div id="tabs-2">	
					
					<input type="hidden" name="news_current_tab" id="news_current_tab" value="<?php echo $current_tab; ?>"/> 
					
					<?php if(isset($news_data) && $news_data != NULL) { ?>
						
						<form id="news_list_form" action="<?php echo site_url(); ?>/admin/delete_news" method="post">
							<table class="list">
							<tr>
								<th><input type='checkbox' name='head_check' class='head_check' /></th>
								<th>Title</th>
								<th>Content</th>
								<th>Creator</th>
								<th>Date Created</th>
							</tr>
							<?php
								foreach($news_data as $row) {
									$news_id = $row->news_id;
									$title = $row->title;
									$content = $row->content;
									$content_display = word_limiter($content, 10);
									$creator = $row->username;
									$date_created = $row->date_created;
									
									$update_link = site_url() . "/admin/news?update_id=" . $news_id . "&&current_tab=1";
									
									echo "
										<tr>
											<td><input type='checkbox' name='id[]' class='sub_check' value='{$news_id}'</td>
											<td><abbr title='click to update'><a href='{$update_link}'>{$title}</a></abbr></td>
											<td>{$content_display}</td>
											<td>{$creator}</td>
											<td>{$date_created}</td>
										</tr>
									";
								}
							?>
							</table>
							<input type="submit" value="Delete"/>
						</form>
						
					<?php } elseif(isset($selected_news_data) && $selected_news_data != NULL) { ?>	
						
						<?php
							foreach($selected_news_data as $row) {
								$news_id = $row->news_id;
								$title = $row->title;
								$content = $row->content;
								$username = $row->username;
							}
						?>
						
						<?php
							foreach($selected_tags_data as $tag_row) {
								$tags = $tag_row->tags;
							}
						?>
						
						<p class="top_prompt <?php echo $this->session->flashdata('upadte_class_status'); ?>"><?php echo $this->session->flashdata('update_item'); ?></p>
						
						<form id="news_update_form" action="<?php echo site_url(); ?>/admin/update_news" method="post" enctype="multipart/form-data">
							<input type="hidden" name="news_id"  value="<?php echo $news_id; ?>"/>
							<table class="update">
								<tr>
									<td><label for="update_title">Title</label></td>
									<td><input type="text" name="update_title" id="update_title" value="<?php echo $title; ?>" /></td>
								</tr>
								<tr>
									<td colspan=2>
										<textarea class="mceEditor" name="update_content"><?php echo $content;  ?></textarea>
									</td>
								</tr>
								<tr>
									<td><label for="update_tags">Tags</label></td>
									<td><input type="text" name="update_tags" id="update_tags" value="<?php echo $tags; ?>" /></td>
								</tr>
								<tr>
									<td colspan="2">Seperate multiple tags w/ a comma &#8593;</td>
								</tr>
								<tr>
									<td><input type="checkbox" name="upload_image" class="upload_image" value="yes" /></td>
									<td>upload image</td>
								</tr>
								<tr class="upload_area">
									<td><input type="file" name="userfile" id="update_userfile" size="20" /></td>
								</tr>
								<tr class="upload_area">
									<td>Title</td>
									<td><input type="text" name="image_title" id="update_image_title"/></td>
								</tr>
								<tr class="upload_area">
									<td>Caption</td>
									<td>
										<textarea name="image_caption" id="update_image_caption" cols="35" rows="10"></textarea>
									</td>
								</tr>
								<tr class="upload_area">
									<td><a href="<?php echo site_url(); ?>/admin/process_update_news_upload_link" class="news_upload_button">Upload</a></td>
								</tr>
							</table>
							
							<div class="progressbar">
								<div class="status_num">0</div>
							</div>
							
							<div id="current_images">
								<?php
									
									if(isset($images_file_name) && $images_file_name != NULL) {
										for($i = 0; $i < count($images_file_name); $i++) {
											
											$image_name = $images_file_name[$i]['file_name'];
										
											$image_src = base_url() . "uploads/{$image_name}";
											
											$image_details_link = site_url() . "/admin/view_image_details?file_name={$image_name}&&module=update";
											
											$set_image_for_delete_link = site_url() . "/admin/set_image_for_delete?file_name={$image_name}";
											
											echo "
												<div class='image_container'>
													<a class='set_image_for_delete' href='{$set_image_for_delete_link}'>&#215;</a>
													<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='current image' /></a></abbr>
												</div>
											";
									
										}
									}
									
									// below if there is a temporary images for update
									
									if(isset($temporary_images) && $temporary_images != NULL) {
										foreach($temporary_images as $temp_image) {
										
											$image_name = $temp_image;
										
											$image_src = base_url() . "temporary_uploads/{$image_name}";
											
											$image_details_link = site_url() . "/admin/view_image_details?file_name={$image_name}";
											
											$image_delete_link = site_url() . "/admin/image_delete?file_name={$image_name}";
										
											echo "
												<div class='image_container'>
													<a class='delete_image' href='{$image_delete_link}'>&#215;</a>
													<abbr title='click to view details'><a class='view_image' href='{$image_details_link}'><img src='{$image_src}' alt='temporay_image' /></a></abbr>
												</div>
											";
									
										}
									}
									
								?>
							</div> <!-- end current images -->
							
							<table class="actions">	
								
								<tr>
									<td><input type="submit" value="Update News"/></td>
									<td><input id="reset_update_news" type="reset" value="Reset" /></td>
									<td><a class="list_view" href="<?php echo site_url(); ?>/admin/news?current_tab=1">News List</a></td>
								</tr>
							</table>
							
						</form>
						
					<?php } else { ?>
					
						<form id="news_list_form" action="<?php echo site_url(); ?>/admin/delete_news" method="post">
							<table class="list">
								<tr>
									<th><input type='checkbox' name='head_check' class='head_check' /></th>
									<th>Title</th>
									<th>Content</th>
									<th>Creator</th>
									<th>Date Created</th>
								</tr>
								<tr>
									<td colspan='5' class='error'>No news is created.</td>
								</tr>
							
							</table>
							<input type="submit" value="Delete"/>
						</form>
					
					<?php } ?>
					
				</div> <!-- end tabs 2 -->
			
			</div>
			
		</div>
	</div> <!--end content_area-->
	
	<!-- Image Popup Tool Below -->
	
	<div id="image_popup_container">
		<div id="image_popup">
			<a class="close_image" href="#">&#215;</a>
			<img src="<?php echo base_url(); ?>images/popup_background.png" alt="Selected image to view" />
			<h1>This is the title</h1>
			<p>This is the caption, this is a beautiful flower..</p>
		</div>
	</div>
	
	
	