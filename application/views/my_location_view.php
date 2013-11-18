	<link rel="stylesheet" href="<?php echo base_url();?>styles/my_location.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 my_location">
			<h3>MY <span class="log">LOCATION</span></h3>
			<div id="map">
				<iframe width="700" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fil&amp;geocode=&amp;q=janiuay+,+iloilo+philippines&amp;aq=&amp;sll=10.968157,122.68158&amp;sspn=0.543324,0.883026&amp;ie=UTF8&amp;hq=&amp;hnear=Janiuay,+Iloilo,+Kanlurang+Kabisayaan,+Pilipinas&amp;t=m&amp;z=11&amp;ll=10.95,122.5&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fil&amp;geocode=&amp;q=janiuay+,+iloilo+philippines&amp;aq=&amp;sll=10.968157,122.68158&amp;sspn=0.543324,0.883026&amp;ie=UTF8&amp;hq=&amp;hnear=Janiuay,+Iloilo,+Kanlurang+Kabisayaan,+Pilipinas&amp;t=m&amp;z=11&amp;ll=10.95,122.5" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->