<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Janiuay, Iloilo City</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>styles/grid.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>styles/admin_style/admin.css" type="text/css" media="screen"/>
	
	<!-- design for jqueryui plugin below -->
	<link rel="stylesheet" href="<?php echo base_url();?>styles/simple/jquery-ui-1.10.3.custom.css" type="text/css" media="screen"/>
</head>
<body>
	<div class="container clearfix">
		
		<!-- Main Navigation below -->
		<div id="header" class="grid_12">
			<div id="head_title" class="grid_4">
				<div>
					<img src="<?php echo base_url(); ?>images/logo.png" alt="Janiuay Logo" class="grid_2 omega" />
					<div class="tag_right">
						<h2>JANIUAY</h2>
						<p>ADMINISTRATION</p>
					</div>
				</div>
			</div>
			<div id="nav_area" class="grid_8 omega">
				<ul class="main_nav">
					<li><abbr title="account"><a class="has_dropdown" id="first_drop" href="#"><img src="<?php echo base_url(); ?>images/account.png" alt="Account image" /></a></abbr></li>
					<li><a href="<?php echo site_url(); ?>/admin/news">News</a></li>
					<li><a href="<?php echo site_url(); ?>/admin/articles">Articles</a></li>
					<li><a href="#">Mayors message</a></li>
				</ul>
				
				<div class="is_dropdown first_drop">
					<div class="arrow">
						<img src="<?php echo base_url(); ?>images/arrow_admin.png" alt="up arrow" />
					</div>
					<ul>
						<li><a href="#">Account Settings</a></li>
						<li><a href="<?php echo site_url(); ?>/logout">Logout</a></li>
					</ul>
				</div>
			</div>
		</div> <!--end branding-->