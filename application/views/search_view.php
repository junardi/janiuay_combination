	<link rel="stylesheet" href="<?php echo base_url();?>styles/search.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 search">
			<div id="search_area" class="grid_4 omega">
				<form action="<?php echo site_url(); ?>/home/search" id="outside_search" method="post">
					<input type="text" name="search" id="main_search" />
					<input type="submit" value="Search" />
				</form>
			</div>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->