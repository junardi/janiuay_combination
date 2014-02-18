	<input type="hidden" name="scroll_location" class="scroll_location" value="<?php if(isset($scroll_location) && $scroll_location != NULL) { echo $scroll_location; } else { echo "navigation";} ?>" />
	<div id="content_area" class="grid_12">
		<div class="grid_9 gallery">
			<h3>Image<span class="log"> Gallery</span></h3>
			<div id="falls">
				<h1>Falls</h1>
				<table>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/falls_1.jpg" alt="first image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/falls_3.jpg" alt="first image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/falls_4.jpg" alt="first image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/falls_5.jpg" alt="second image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/quipot_1.jpg" alt="first image" /></td>
					</tr>
				</table>
			</div>
			<div id="caves">
				<h1>Caves</h1>
				<table>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveA.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveB.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveC.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveD.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveE.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveG.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveH.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caveI.jpg" alt="Gallery image" /></td>
					</tr>
				</table>
			</div>
			<div id="marks">
				<h1>Landmarks</h1>
				<table>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/mark1.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/mark2.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/mark3.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/mark4.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/mark5.jpg" alt="Gallery image" /></td>
					</tr>
				</table>
			</div>
			<div id="spots">
				<h1>Spots</h1>
				<table>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot1.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot2.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot3.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot4.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot5.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot6.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot7.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot8.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot9.jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot10.jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot11.jpg" alt="Gallery image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/spot12.jpg" alt="Gallery image" /></td>
					</tr>
				</table>
			</div>
			<div id="caraudan_award">
				<h1>Caraudan Award</h1>
				<table>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (1).jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (3).jpg" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (4).jpg" alt="Gallery image" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (5).jpg" alt="Galley image" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (6).jpg" /></td>
						<td><img src="<?php echo base_url(); ?>images/gallery/caraudan_award_album/caraudan (7).jpg" alt="Gallery image" /></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->