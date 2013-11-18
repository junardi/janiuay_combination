	<link rel="stylesheet" href="<?php echo base_url();?>styles/sitemap.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 site_map">
			<h3>SITE<span class="log">MAP</span></h3>
			<ul>
				<li>
					<a href="#">Mayors Page</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/home/mayors_message">Mayor's Message</a></li>
						<li><a href="<?php echo site_url(); ?>/home/biographical_sketch">Biographical Sketch</a></li>
						<li><a href="<?php echo site_url(); ?>/home/local_government_unit">Local Government Unit</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Services</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/home/legislative_services">Legislative Services</a></li>
						<li>
							<a href="#">Executive Services</a>
							<ul>
								<li>
									<a href="#">public adminsitration</a>
									<ul>
										<li><a href="<?php echo site_url(); ?>/home/office_of_the_administration">the administration</a></li>
										<li><a href="<?php echo site_url(); ?>/home/human_resource_mun_officer">human resources mun. officer</a></li>
										<li><a href="<?php echo site_url(); ?>/home/menro">the menro</a></li>
									</ul
								</li>
								<li>
									<a href="#">Economic and Planning</a>
									<ul>
										<li><a href="<?php echo site_url(); ?>/home/agriculture">mun. agriculture</a></li>
										<li><a href="<?php echo site_url(); ?>/home/planning_and_development">mun. planning and dev.</a></li>
										<li><a href="<?php echo site_url(); ?>/home/economic_enterprises">economic enterpresis</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Financial Management</a>
									<ul>
										<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_accountant">mun. accountant</a></li>
										<li><a href="<?php echo site_url(); ?>/home/treasurer">mun. treasurer</a></li>
										<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_budget_officer">mun. budget officer</a></li>
										<li><a href="<?php echo site_url(); ?>/home/assessor">mun. assessor</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Infrastructure</a>
									<ul>
										<li><a href="<?php echo site_url(); ?>/home/engineer">mun. engineer</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Social Services</a>
									<ul>
										<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_social_welfare_and_development">mun. social welfare and dev.</a></li>
										<li><a href="<?php echo site_url(); ?>/home/rural_health_office">rural office</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?php echo site_url(); ?>/home/special_services">Special Services</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Media Gallery</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/home/photo_gallery">ploto gallery</a></li>
						<li><a href="<?php echo site_url(); ?>/home/video_gallery">vedio gallery</a></li>
						<li><a href="<?php echo site_url(); ?>/home/audio_gallery">audio gallery</a></li>
						<li><a href="<?php echo site_url(); ?>/home/media_gallery_downloadables">downdales</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Map and Location</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/home/my_location">my locaion</a></li>
						<li><a href="<?php echo site_url(); ?>/home/tourist_spot">tourist spot</a></li>
						<li><a href="<?php echo site_url(); ?>/home/local_heritage">local heritage</a></li>
						<li><a href="<?php echo site_url(); ?>/home/travel_information">travel imformation</a></li>
						<li><a href="<?php echo site_url(); ?>/home/map_and_location_downloadables">downloadables</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url(); ?>/home/tourism">Tourism</a></li>
				<li>
					<a href="#">About Us</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/home/history">history</a></li>
						<li><a href="<?php echo site_url(); ?>/home/barangays">barangays</a></li>
						<li>
							<a href="#">schools</a>
							<ul>
								<li><abbr title="Quipot National High School"><a href="<?php echo site_url(); ?>/home/quipot_high_school">qnhs</a></abbr></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->