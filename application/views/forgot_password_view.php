	<link rel="stylesheet" href="<?php echo base_url();?>styles/forgot_password.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 forgot_password">
	
			<div id="forgot_container">
				<h4>Enter Email Address</h4>
				<form action="<?php echo site_url(); ?>/home/retrieve_password" method="post" id="retrieve_password_form">
					<table>
						<tr>
							<td><img src="<?php echo base_url(); ?>images/forgot.png" alt="Email address picture" /></td>
							<td><input type="text" name="forgot_email_add" id="forgot_email_add" /></td>
						</tr>
					</table>
					<p><input type="submit" value="Retrieve Password" /></p>
					<p><img id='blue_loader' src="<?php echo base_url(); ?>images/blue_loader.gif" alt="Blue loading" /> <span id="forgot_error" class="error">Invalid Email Address</span></p>
				</form>
			</div>
			
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->