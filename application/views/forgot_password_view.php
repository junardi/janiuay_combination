	<link rel="stylesheet" href="<?php echo base_url();?>styles/forgot_password.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 forgot_password">
	
			<div id="forgot_container">
				<h4>Enter Email Address</h4>
				<form action="#" method="post" id="request_password_form">
					<table>
						<tr>
							<td><img src="<?php echo base_url(); ?>images/forgot.png" alt="Email address picture" /></td>
							<td><input type="text" name="forgot_email_add" id="forgot_email_add" /></td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->