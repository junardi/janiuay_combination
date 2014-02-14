	
		<link rel="stylesheet" href="<?php echo base_url(); ?>styles/tags.css" type="text/css" />
	
		<!-- for general tags below -->
	
		<?php
			
			if($this->session->userdata('role') == "admin") {
				if($this->session->userdata('page_tags') != NULL) {
					foreach($this->session->userdata('page_tags') as $row) {
						$tags_data = array(
							"page_tag_id" => $row->page_tag_id,
							"page_tags" => $row->page_tags,
							"page_description" => $row->page_description,
							"url" => $row->url
						);
					}
				}
			}
		
		?>
		
		<?php if($this->session->userdata('role') == "admin") { ?>
			
			<?php if(isset($tags_data) && $tags_data != NULL) { ?>
				<div id="page_tags_container" class="grid_12">
				
					<div class="tags_data">
						<form action="<?php echo site_url(); ?>/home/process_page_tags" method="post" class="page_tags">
							<h4>Page Tags</h4>
							<p><textarea name="page_tags" id="page_tags_textarea" cols="30" rows="10"><?php if(isset($tags_data)) { echo $tags_data['page_tags'];} ?></textarea></p>
							<h4>Page Description</h4>
							<p><textarea name="page_description" id="page_description" cols="30" rows="10"><?php if(isset($tags_data)) { echo $tags_data['page_description'];} ?></textarea></p>
							<input type="hidden" name="url" value="<?php echo current_url(); ?>" />
							<input type="hidden" name="action" value="update" />
							<input type="hidden" name="page_tag_id" value="<?php echo $tags_data['page_tag_id'] ?>" />
							<p><input class="submit_button" type="submit" value="Save" /></p>
							<p class="status"><img class='blue_loader' src="<?php echo base_url(); ?>images/blue_loader.gif" alt="Blue loading" /> <span class="success page_tags_status">Search tags not saved.</span></p>
						</form>
					</div>
					
				</div>
				
			<?php } else { ?>
				<div id="page_tags_container" class="grid_12">
				
					<div class="tags_data">
						<form action="<?php echo site_url(); ?>/home/process_page_tags" method="post" class="page_tags">
							<h4>Page Tags</h4>
							<p><textarea name="page_tags" id="page_tags_textarea" cols="30" rows="10"></textarea></p>
							<h4>Page Description</h4>
							<p><textarea name="page_description" id="page_description" cols="30" rows="10"></textarea></p>
							<input type="hidden" name="url" value="<?php echo current_url(); ?>" />
							<input type="hidden" name="action" value="add" />
							<p><input class="submit_button" type="submit" value="Save Tags" /></p>
							<p class="status"><img class='blue_loader' src="<?php echo base_url(); ?>images/blue_loader.gif" alt="Blue loading" /> <span class="success page_tags_status">Search tags not saved.</span></p>
						</form>
					</div>
				
				</div>
			
			<?php } ?>
		
		<?php } ?>
	
	</div> <!--end container clearfix for the content area-->
	
	<!-- image magic design below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/magic.css" type="text/css" media="screen"/>
	
	<div class="magic_nav_wrap">
		<ul class="group" id="magic">
			<li class="current_page_item">
				<a href="<?php echo current_url(); ?>">Janiuay Government</a>
			</li>
			<li>
				<a target="_blank" href="http://iloilo.gov.ph">Iloilo Government</a>
			</li>
			<li>
				<a target="_blank" href="http://janiuay.wvsu.edu.ph">WVSU Janiuay</a>
			</li>
		</ul>
	</div>

	<div class="container clearfix">
		<div id="footer" class="full_width grid_12">
			<p>Fax No. 531-8719</p>
			<p>Landline No. 317 1014</p>
			<p>Copyright &copy; 2014 <a href="<?php echo current_url(); ?>">surongjaniuay.com</a>. All Rights Reserved.</p>
		</div>
	</div> <!--end container clearfix-->
	
	<?php $this->load->view('tools/photo_gallery_popup'); ?>
	
	<!-- jquery script below-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery2.js"></script>
	<!-- jqueryui script below-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jqueryui.js"></script>
	<!-- jquery.form below -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.form.js"></script>
	<!--Link the navigation dropdown-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.dropdownPlain.js"></script>
	<!-- main script below -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/script.js"></script>
	<!-- link email validation script below -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/validEmail.js"></script>
	<!-- for sliding of images in news and articles -->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/slider.js"></script>
	<!-- for magic line navigation -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.color-RGBa-patch.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/magic.js"></script>
	
</body>
</html>
