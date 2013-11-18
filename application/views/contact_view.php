	<link rel="stylesheet" href="<?php echo base_url();?>styles/contact.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
	
		<div class="grid_9 contact">
			<h3>CONTACT <span class="log">US</span></h3>
			<form action="#" method="post" enctype="multipart/form-data" autocomplete="off" id="contact_form">
				<table>
					<tr>
						<td><label for="full_name">Full Name <span class="required">*</span></label></td>
						<td><input type="text" name="full_name" id="full_name"/></td>
						<td class="input_validation error">&#8592; Testing validation</td>
					</tr>
						<tr>
						<td><label for="email">Email Address <span class="required">*</span></label></td>
						<td><input type="text" name="email" id="email" /></td>
						<td class="input_validation error">&#8592; Testing validation</td>
					</tr>
					<tr>
						<td><label for="subject">Subject <span class="required">*</span></label></td>
						<td><input type="text" name="subject" id="subject" /></td>
						<td class="input_validation error">&#8592; Testing validation</td>
					</tr>
					<tr>
						<td><label for="message">Message <span class="required">*</span></label></td>
						<td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
						<td class="input_validation error message">&#8592; Testing validation</td>
					</tr>
					<tr>
						<td><label for="userfile">Attach File</label></td>
						<td><input type="file" name="userfile" id="userfile" /></td>
					</tr>
				
					<tr>
						<td colspan='2'><input type="submit" value="Send" /></td>
					</tr>
				</table>
				
			</form>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->