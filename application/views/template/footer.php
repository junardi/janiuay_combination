	</div> <!--end container clearfix for the content area-->
	
	<!-- image popup design below -->
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
		<div id="footer" class="grid_12">
			<p>Copyright &copy; 2013.</p>
			<p>All Rights Reserved <a href="<?php echo current_url(); ?>">janiuay.gov.ph</a></p>
		</div>
	</div> <!--end container clearfix-->
	
	
	<?php $this->load->view('tools/photo_gallery_popup'); ?>
	
	<!-- jquery script below-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery2.js"></script>
	<!-- jqueryui script below-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jqueryui.js"></script>
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
