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
	<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style/articles.css" type="text/css" media="screen"/>
	<div id="content_area" class="grid_12">
		<div class="articles">
		
			<h1>Manage Articles</h1>
			
			<div class="tabs">
				<ul class="main">
					<li><a href="#tabs-1">Create Article</a></li>
					<li><a href="#tabs-2">View Delete Edit Article</a></li>
				</ul>
				<!-- Create news tab -->
				<div id="tabs-1">
					<p class="top_prompt <?php echo $this->session->flashdata('class_status'); ?>"><?php echo $this->session->flashdata('item'); ?></p>
					
					<form id="article_form" action="<?php echo site_url(); ?>/admin/add_article" method="post">	
						<table class="create">
							<tr>
								<td><label for="article_title">Title</label></td>
								<td><input type="text" name="title" id="article_title" /></td>
							</tr>
							<tr>
								<td colspan="2">
									<textarea class="mceEditor" name="article_content" id="article_content">Enter article here..</textarea>
								</td>
							</tr>
							<tr>
								<td><label for="article_tags">Tags</label></td>
								<td><input type="text" name="tags" id="article_tags" /></td>
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
								<td><a href="<?php echo site_url(); ?>/admin/process_create_article_upload_link" class="article_upload_button">Upload</a></td>
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
								<td><input type="submit" value="Create Article"/></td>
								<td><input id="clear_article" type="reset" value="Clear" /></td>
							</tr>
						</table>
						
					</form>
				</div>
				<!-- Create View, Edit, Delete News tab -->
				<div id="tabs-2">	
					
					<input type="hidden" name="articles_current_tab" id="articles_current_tab" value="<?php echo $current_tab; ?>"/> 
					
					<?php if(isset($articles_data) && $articles_data != NULL) { ?>
						
						<form id="articles_list_form" action="<?php echo site_url(); ?>/admin/delete_article" method="post">
							<table class="list">
								<tr>
									<th><input type='checkbox' name='head_check' class='head_check' /></th>
									<th>Title</th>
									<th>Content</th>
									<th>Creator</th>
									<th>Date Created</th>
								</tr>
								<?php
									foreach($articles_data as $row) {
										$article_id = $row->article_id;
										$title = $row->title;
										$content = $row->content;
										$content_display = word_limiter($content, 10);
										$creator = $row->username;
										$date_created = $row->date_created;
										
										$update_link = site_url() . "/admin/articles?update_id=" . $article_id . "&&current_tab=1";
										
										echo "
											<tr>
												<td><input type='checkbox' name='id[]' class='sub_check' value='{$article_id}'</td>
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
						
					<?php } elseif(isset($selected_article_data) && $selected_article_data != NULL) { ?>	
						
						<?php
							foreach($selected_article_data as $row) {
								$article_id = $row->article_id;
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
						
						<form id="articles_update_form" action="<?php echo site_url(); ?>/admin/update_article" method="post">
							<input type="hidden" name="article_id"  value="<?php echo $article_id; ?>"/>
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
									<td><a href="<?php echo site_url(); ?>/admin/process_update_article_upload_link" class="article_upload_button">Upload</a></td>
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
							</div>
							
							<table class="actions">
								<tr>
									<td><input type="submit" value="Update Articles"/></td>
									<td><input id="reset_update_news" type="reset" value="Reset" /></td>
									<td><a class="list_view" href="<?php echo site_url(); ?>/admin/articles?current_tab=1">Articles List</a></td>
								</tr>
							</table>
							
						</form>
						
					<?php } else { ?>
					
						<form id="articles_list_form" action="<?php echo site_url(); ?>/admin/delete_article" method="post">
							<table class="list">
								<tr>
									<th><input type='checkbox' name='head_check' class='head_check' /></th>
									<th>Title</th>
									<th>Content</th>
									<th>Creator</th>
									<th>Date Created</th>
								</tr>
								<tr>
									<td colspan='5' class='error'>No article is created.</td>
								</tr>
							
							</table>
							<input type="submit" value="Delete"/>
						</form>
					
					<?php } ?>
					
				</div> <!-- end tabs 2 -->
			
			</div>
			
		</div>
	</div> <!--end content_area-->
	
	
	
	
	
	