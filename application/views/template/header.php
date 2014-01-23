<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title><?php if(isset($page_title) && $page_title != NULL) { echo $page_title; } else { echo "Welcome to Municipality of Janiuay"; } ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>styles/grid.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>styles/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>styles/login.css" type="text/css" media="screen"/>
	
	<!-- design for jqueryui plugin below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/simple/jquery-ui-1.10.3.custom.css" type="text/css" media="screen"/>
	
	<!-- dropdown css below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/dropdown/dropdown.css" type="text/css" media="screen"/>
	
	<!-- gallery designs below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/gallery.css" type="text/css" media="screen"/>
	
	<!-- image popup design below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/image_popup.css" type="text/css" media="screen"/>
	
	<!-- full width design below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/full_width.css" type="text/css" media="screen"/>
	
	<meta property="fb:app_id" content="250289228474476"/>
	<meta property="og:url" content="http://surongjaniuay.com/"; />
	<meta property="og:title" content="FB COMMENTS" />
	
</head>
<body>
	<!--set javascript for facebook comments below-->
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=250289228474476";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="container clearfix">
	
		<!-- Main Navigation below -->
		
		<div id="navigation" class="grid_12">
			
			<?php if(!isset($site_maintenance)) { ?>
			
			<div id="left_nav" class="grid_8 omega">
				<ul id="first_nav" class="dropdown">
					<li>
						<a class="main first_main" href="#">MAYORS PAGE</a>
						<ul>
							<li><a href="<?php echo site_url(); ?>/home/mayors_message">MAYOR's MESSAGE</a></li>
							<li><a href="<?php echo site_url(); ?>/home/biographical_sketch">BIOGRAPHICAL SKETCH</a></li>
							<li><a href="<?php echo site_url(); ?>/home/local_government_unit">LOCAL GOVERNMENT UNIT</a></li>
						</ul>
					</li> 
					<li>
						<a class="main" href="#">SERVICES</a>
						<ul>	
							<li><a href="<?php echo site_url(); ?>/home/legislative_services">LEGISLATIVE SERVICES</a></li>
							<li>
								<a href="#">EXECUTIVE SERVICES</a>
								<ul>	
									<li>
										<a href="#">PUBLIC ADMINISTRATION</a>
										<ul>
											<li><a href="<?php echo site_url(); ?>/home/office_of_the_administration">THE ADMINISTRATION</a></li>
											<li><a href="<?php echo site_url(); ?>/home/human_resource_mun_officer">HUMAN RESOURCES MUN. OFFICER</a></li>
											<li><a href="<?php echo site_url(); ?>/home/menro">THE MENRO</a></li>
										</ul>
									</li>
									
									<li>
										<a href="#">ECONOMIC AND PLANNING</a>
										<ul>
											<li><a href="<?php echo site_url(); ?>/home/agriculture">MUN. AGRICULTURE</a></li>
											<li><a href="<?php echo site_url(); ?>/home/planning_and_development">MUN. PLANNING AND DEV.</a></li>
											<li><a href="<?php echo site_url(); ?>/home/economic_enterprises">ECONOMIC ENTERPRISES</a></li>
										</ul>
									</li>
									<li>
										<a href="#">FINANCIAL MANAGEMENT</a>
										<ul>
											<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_accountant">MUN. ACCOUNTANT</a></li>
											<li><a href="<?php echo site_url(); ?>/home/treasurer">MUN. TREASURER</a></li>
											<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_budget_officer">MUN. BUDGET OFFICER</a></li>
											<li><a href="<?php echo site_url(); ?>/home/assessor">MUN. ASSESSOR</a></li>
										</ul>
									</li>
									<li>
										<a href="#">INFRASTRUCTURE</a>
										<ul>
											<li><a href="<?php echo site_url(); ?>/home/engineer">MUN. ENGINEER</a></li>
										</ul>
									</li>
									<li>
										<a href="#">SOCIAL SERVICES</a>
										<ul>
											<li><a href="<?php echo site_url(); ?>/home/office_of_the_municipal_social_welfare_and_development">MUN. SOCIAL WELFARE AND DEV.</a></li>
											<li><a href="<?php echo site_url(); ?>/home/rural_health_office">RURAL HEALTH OFFICE</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="<?php echo site_url(); ?>/home/special_services">SPECIAL SERVICES</a></li>
						</ul>
					</li>
					<li>
						<a class="main" href="#">MEDIA GALLERY </a>
						<ul>
							<li><a href="<?php echo site_url(); ?>/home/photo_gallery">PHOTO GALLERY</a></li>
							<li><a href="<?php echo site_url(); ?>/home/video_gallery">VIDEO GALLERY</a></li>
							<li><a href="<?php echo site_url(); ?>/home/audio_gallery">AUDIO GALLERY</a></li>
							<li><a href="<?php echo site_url(); ?>/home/media_gallery_downloadables">DOWNLOADABLES</a></li>
						</ul>
					</li>
					<li><abbr title="more"><a class="more_nav main last_main" href="#">&raquo;</a></abbr></li>
				</ul>
				
				<ul id="second_nav" class="dropdown">
					<li>
						<a class="main first_main" href="#">MAP AND LOCATION</a>
						<ul>
							<li><a href="<?php echo site_url(); ?>/home/my_location">MY LOCATION</a></li>
							<li><a href="<?php echo site_url(); ?>/home/tourist_spot">TOURIST SPOT</a></li>
							<li><a href="<?php echo site_url(); ?>/home/local_heritage">LOCAL HERITAGE</a></li>
							<li><a href="<?php echo site_url(); ?>/home/travel_information">TRAVEL INFORMATION</a></li>
							<li><a href="<?php echo site_url(); ?>/home/map_and_location_downloadables">DOWNLOADABLES</a></li>
						</ul>
					</li>
					<li><a class="main" href="<?php echo site_url(); ?>/home/tourism">TOURISM</a></li>
					<li>
						<a class="main" href="#">ABOUT US</a>
						<ul>
							<li><a href="<?php echo site_url(); ?>/home/history">HISTORY</a></li>
							<li><a href="<?php echo site_url(); ?>/home/barangays">BARANGAYS</a></li>
							<li>
								<a href="#">SCHOOLS</a>
								<ul>
									<li><abbr title="Quipot National High School"><a href="<?php echo site_url(); ?>/home/quipot_high_school">QNHS</a></abbr></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><abbr title="back"><a class="back_nav main last_main" href="#">&#171;</a></abbr></li>
				</ul>
			</div>
			<div id="right_nav" class="grid_4 omega">
				<ul>
					<li><abbr title="sitemap"><a href="<?php echo site_url(); ?>/home/site_map"><img src="<?php echo base_url(); ?>images/sitemap.png" alt="Sitemap image" /></a></abbr></li>
					<li><abbr title="contact us"><a href="<?php echo site_url(); ?>/home/contact"><img src="<?php echo base_url(); ?>images/mail.png" alt="Mail image" /></a></abbr></li>
					<li><abbr title="home"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>images/home.png" alt="home image" /></a></abbr></li>
				</ul>
			</div>
			
			<?php } ?>
			
		</div> <!-- end navigation -->
		
		<div id="branding" class="grid_12">
		
			<img id="prosperity_image" src="<?php echo base_url(); ?>images/prosperity.png" alt="Prosperity image" />
			
			<div id="head_title" class="grid_8">
				<div> 
					<img src="<?php echo base_url(); ?>images/logo.png" alt="Janiuay Logo" class="grid_2 omega" />
					<div class="grid_6 omega tag_right">
						<h2>JANIUAY</h2>
						<p>GOING TOWARD PROSPERITY</p>
					</div>
				</div>
			</div>
			
			<?php 
				$current_url = current_url();
				$search_url = base_url() . "index.php/home/search";
			?>
			
			<?php
				if($current_url != $search_url) {
			?>
					<div id="search_area" class="grid_4 omega">
						<form action="<?php echo site_url(); ?>/home/search" id="outside_search" method="post">
							<input type="text" name="search" id="search_something" />
							<!--<input type="submit" value="Search" />-->
							<!-- image submit -->
							<a href="#"><img src="<?php echo base_url(); ?>images/button_search.gif" alt="Search Button" /></a>
						</form>
					</div>
			<?php
				}
			?>
		
		</div> <!--end branding-->
		
		<?php
			if(isset($breadcrumbs) && $breadcrumbs != NULL) {
				echo $breadcrumbs;
			}
		?>
		
		
		
		
		
		