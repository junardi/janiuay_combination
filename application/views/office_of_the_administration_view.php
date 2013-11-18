	<link rel="stylesheet" href="<?php echo base_url();?>styles/office_administration.css" type="text/css" media="screen"/>
	<input type="hidden" name="scroll_location" class="scroll_location" value="<?php if(isset($scroll_location) && $scroll_location != NULL) { echo $scroll_location; } else { echo "navigation";} ?>" />
	<div id="content_area" class="grid_12">
		<div class="grid_9 office_administration">
			<h3>ADMINISTRATION <span class="log">OFFICE</span></h3>
			
			<div class="accordion">
				<h3>Vision</h3>
				<div>
					<p>An effective and efficient Administration Office that can cater the needs of all Janiuaynons, in and out of the Municipality, and is responsible and initiative enough to foresee the well-being of its people.</p>
				</div>
				<h3>Mission</h3>
				<div>
					<p>To acknowledge the Administration Office of the Municipality of Janiuay as the focal system of management responsible for implementing all the executive and special services existing all throughout the Municipality.</p>
				</div>
				<h3>Core Values</h3>
				<div>
					<p>Effective, Efficient, Progressive</p>
				</div>
			</div> <!-- end accordion -->
			
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
		
	</div> <!--end content_area-->
	
	<div class="grid_12 other_contents_area">
		<div id="srs">
			<h1>National Skills Registry System</h1>
			<p>Ang SRS ay isang sistema ng pagrehistro ng mga manggagawang Pilipino na nangangailangan ng trabaho.</p>
			<p>Layunin ng SRS na patatagin ang kasalukuyang talaan ng skills na nasa DOLE Phil-JobNet at maging matibay na batayan ng tunay na bilang ng mga naghahanap ng trabaho sa isang lugar.</p>
			<h3>How to apply</h3>
			<ol>
				<li>Go to your PESO Coordinators in your Barangay or to the PESO Manager of your Municipality. (PESO Manager - LGU Janiuay, Janiuay Municipal Hall is Ms. Rhodora Pajarilla).</li>
				<li>
					Get a Registration Form.
					<ol>
						<li>Fill up the Registration Form.</li>
						<img src="<?php echo base_url(); ?>images/srs_form_a.png" alt="registration form" />
						<img src="<?php echo base_url(); ?>images/srs_form_a.png" alt="registration form" />
					</ol>
				</li>
				<li>Submit the completed form to your PESO Coordinator or PESO Manager.</li>
			</ol>
			
			<p class="note">Note:</p>
			<p>The PESO Manager/Coordinator will log it on the SRS and call you for job vacancies that will suit your interests.</p>
		</div>
		
	</div>
	
	
	
	
	
	
	
	