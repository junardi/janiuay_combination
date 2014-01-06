	<link rel="stylesheet" href="<?php echo base_url();?>styles/message_sent.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 message_sent">
			<p>Message sent.. <a href="<?php echo site_url(); ?>/home/contact">send another message</a></p>
			
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->