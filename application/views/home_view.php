	<div id="featured" class="full_width grid_12">
		<img src="<?php echo base_url(); ?>images/left_arrow.png" class="left_arrow arrows" alt="left arrow" />
		<img src="<?php echo base_url(); ?>images/right_arrow.png" class="right_arrow arrows" alt="left arrow" />
		<div class="grid_9 featured_image">
			<div class="current">
				<img src="<?php echo base_url(); ?>images/slideshow/surong_niway.png" alt="Surong Janiuay Introduction" />
			</div>
			<div>
				<abbr title="view details"><a href="<?php echo site_url(); ?>/home/office_of_the_administration?scroll_location=srs"><img src="<?php echo base_url(); ?>images/slideshow/srs.png" alt="Surong Janiuay Introduction" /></a></abbr>
			</div>
			<div>
				<abbr title="view details"><a href="<?php echo site_url(); ?>/home/photo_gallery?scroll_location=falls"><img src="<?php echo base_url(); ?>images/slideshow/falls.png" alt="Janiuay Falls" /></a></abbr>
			</div>
			<div>
				<abbr title="view details"><a href="<?php echo site_url(); ?>/home/photo_gallery?scroll_location=caves"><img src="<?php echo base_url(); ?>images/slideshow/caves.png" alt="Janiuay Caves" /></a></abbr>
			</div>
			<div>
				<abbr title="view details"><a href="<?php echo site_url(); ?>/home/photo_gallery?scroll_location=marks"><img src="<?php echo base_url(); ?>images/slideshow/marks.png" alt="Janiuay Landmarks" /></a></abbr>
			</div>
		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end featured-->
	
	<div id="write_ups" class="grid_12">
		<div class="grid_9 main_write_ups">
			
			<h1><span style="">OUR MUNICIPALITY</span></h1>
			<div id="intro">
				<h2 class="top">Vision</h2>
				<p class="top">Janiuay as a booming trading and agro industrial center in Central Iloilo with united, God loving, contented, and productive women and men in an equitable and globally competitive economy of healthy environment anchored on governance with strong political will and service oriented leadership</p>
				<h2 class="top">Mission</h2>
				<p class="top">We, at the Local Government Unit of Janiuay, abide by the Local Government Code to promote the general welfare of our people. We shall endeavour to be self-reliant and to ensure full and satisfying life of every man and woman within our territorial jurisdictions. We affirm our role to ensure and support the preservation and enrichment of culture, promote health and safety, enhance the right of the people to a balanced ecology, encourage and support the development of appropriate and self-reliant scientific and technological  capabilities, improve public morals, enhance economic prosperity and social justice, promote full employment among their residents, maintain peace and order, and preserve the comfort and convenience of their inhabitants.</p>
			</div>
		
			<div class="grid_4 topics">
				<h2>FEATURED NEWS</h2>
				<?php
					if(isset($news_data) && $news_data != NULL) {
						foreach($news_data as $row) {
							$news_id = $row->news_id;
							$title = $row->title;
							$content = word_limiter($row->content, 20);
							$date_created = $row->date_created;
						
							$read_news_link = site_url() . "/home/read_news?id=" . $news_id;
							$all_news_link = site_url() . "/home/news";
							
							echo "
								<div>
									<h4>{$title}</h4>
									<p class='date_ui'>{$date_created}</p>
									<p>{$content}</p>
									<p class='more'><a href='{$read_news_link}'>read more..</a></p>
								</div>
							";
						}
						
						echo "
							<div>
								<p class='see_all'><a href='{$all_news_link}'>&#171; all news &raquo;</a></p>
							</div>
						";
						
					} else {
						echo "
							<div>
								<p>No news is created.</p>
							</div>
						";
					}
				?>
				
			</div>
			<div class="grid_4 topics">
				<h2>FEATURED ARTICLES</h2>
				<?php
					if(isset($articles_data) && $articles_data != NULL) {
					
						foreach($articles_data as $row) {
							
							$article_id = $row->article_id;
							$title = $row->title;
							$content = word_limiter($row->content, 20);
							$date_created = $row->date_created;
						
							$read_article_link = site_url() . "/home/read_article?id=" . $article_id;
							$all_articles_link = site_url() . "/home/articles";
							
							echo "
								<div>
									<h4>{$title}</h4>
									<p class='date_ui'>{$date_created}</p>
									<p>{$content}</p>
									<p class='more'><a href='{$read_article_link}'>read more..</a></p>
								</div>
							";
						}
						
						echo "
							<div>
								<p class='see_all'><a href='{$all_articles_link}'>&#171; all articles &raquo;</a></p>
							</div>
						";
						
					} else {
						echo "
							<div>
								<p>No article is created.</p>
							</div>
						";
					}
				?>
			</div>
		</div> <!--end main write_ups-->
		
		<div class="grid_3 omega sidebar_staffs">
			<div id="barangay_staff">
				<h1>OUR BARANGAYS</h1>
				<ul>
					<li><img src="<?php echo base_url(); ?>images/marker.gif" alt="marker image" /><a class="home_barangay_link" href="<?php echo site_url(); ?>/home/process_barangay_request?barangay_request=abangay">Abangay</a></li>
					<li><img src="<?php echo base_url(); ?>images/marker.gif" alt="marker image" /><a class="home_barangay_link" href="<?php echo site_url(); ?>/home/process_barangay_request?barangay_request=agcarope">Agcarope</a></li>
					<li><img src="<?php echo base_url(); ?>images/marker.gif" alt="marker image" /><a class="home_barangay_link" href="<?php echo site_url(); ?>/home/process_barangay_request?barangay_request=aglobong">Aglobong</a></li>
					<li><img src="<?php echo base_url(); ?>images/marker.gif" alt="marker image" /><a class="home_barangay_link" href="<?php echo site_url(); ?>/home/process_barangay_request?barangay_request=aguingay">Aguingay</a></li>
					<li><img src="<?php echo base_url(); ?>images/marker.gif" alt="marker image" /><a class="home_barangay_link" href="<?php echo site_url(); ?>/home/process_barangay_request?barangay_request=anhawan">Anhawan</a></li>
				</ul>
				<form action="<?php echo site_url(); ?>/home/barangays" method="post">
					<button>See More &raquo;</button>
				</form>
			</div>
			
			<div id="hymn_staff">
				<h1><span style="color: #F95811;">JANIUAY</span> HYMN</h1>
				<audio id="hymn" controls preload="auto">
					<source src="<?php echo base_url(); ?>audio/hymn.mp3" controls></source>
					<source src="<?php echo base_url(); ?>audio/hymn.ogg" controls></source>
					Your browser does not support audio.
				</audio>
			</div>
			
			<div id="hymn_lyrics_staff">
				<p>
					Janiuay Banwa ko nga nahamutan
					Duog sang mga dungganon kag maalam;
					Ginbugayan sang dagaya nga kadutaan;
					Tuhay nga busay, suba, kweba kag kabukiran;
				</p>
				<p>
					Janiuay amon ginapabugal kag ginatib-ong,
					Ang kan-uman* nimong barangay nga magayon;
					Damgohanon sang pamuluyo nga Janiuaynon,
					Kabuhi nga malinong, hilway kag mauswagon
				</p>
				<p>
					Hugpong Janiuay, hugpong mga janiuaynon
					Maghirupay kita nga himpit sa tagipusuon
					Kay sa paghiliusa aton nga matigayon
					Ang labing maayo kag putli nga handum.
				</p>
				<p>
					Janiuay amon ginahalad sa imo
					Kadungganan, kadalag-an kag sakripisyo
					Matam-is mo nga ngalan ginaamba ko,
					Banwa ko palangaon ka tubtob san-o!
				</p>
				<p>
					Hugpong Janiuay, hugpong mga Janiuaynon,
					Maghirupay kita nga himpit sa tagipusuon;
					Kay sa paghiliusa aton nga matigayon,
					Ang labing maayo kag putli nga handum.
				</p>
				<p>O banwa ko, palanggaon ka tubtob san-o!</p>
			</div>
			
		</div> <!-- end sidebar_staffs-->
		
	
	</div> <!--end write_ups-->
	
	
	
	
	
	
	
	
	
	
	
	