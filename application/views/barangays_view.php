	<link rel="stylesheet" href="<?php echo base_url();?>styles/barangays.css" type="text/css" media="screen"/>
	
	<div id="content_area" class="grid_12">
		<div class="grid_9 barangays">
			<div class="grid_2 omega list">
				<input type="hidden" name="request_barangay" id="request_barangay" value="<?php echo $request_barangay; ?>" />
				<h3>Baran<span class="log">gays</span></h3>
				<ul>
					<?php
						if(isset($barangay_name)) {
							$img = base_url() . "images/marker.gif";
							foreach($barangay_name as $row) {
								$name = $row->name;
								$id_name = strtolower($row->name);
								$remove_space = str_replace(" ", "", $id_name);
								$remove_period = str_replace(".", "", $remove_space);
								echo "<li><a class='barangay_link' id='{$remove_period}' href='#'>{$name}</a></li>";
							}
						}
					?>
				</ul>
			</div>
			
			<div class="grid_7 omega barangay_content">
			
				<div class="abangay is_barangay_content">
					<h3 class="heading">ABA<span class="log">NGAY</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>ABANGAY</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>298.26 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1039</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>215</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 617, 567.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Adopting and implementing efficient governance so as to develop unity, prosperity serving as prime movers for progress and development.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Barangay Abangay, Janiuay commits to the integrated development of the barangay, implore peace and order, adopt and implement good governance that foster transparency and elucidates involvement among constituents through leadership by example.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Sa Banwa sang Janiuay, nakit-an ang isa ka malinong nga barangay bilang dulunan sang Lambunao kag Janiuay. Ini nga barangay nakilala tungod sa isa ka sapa nga bugana sa mabugnaw kag matin-aw nga tubig. Diri nasandig ang kabuhi sang mga pumuluyo sa palibot.</p>
							<p>Ini nga sapa nangin saksi sang paghigugmaanay sang duha ka tinuga nga sanday Abang kag Angay. Sa sini nga sapa gindihon ang matam-is nga paghirupay kag dalaguhanon.</p>
							<p>Apang ang kabuhi indi lamang pirmi kalipay, kundi may mga dalimuos nga nag-abot sa pagpanghangkat sa ila wala kamatayon kag dalisay nga paghigugma-anay.</p>
							<p>Tungod sa gahum sang putli nga paghigugma, nalampuwasan sang duha ang mga pagtilaw kag mga problema. Kag gintagna gid sang kapalaran, nakaangkon sing katumanan ang ila sinumpaan nga mag-upod tubtob sa katubtuban.</p>
							<p>Gani, si Angay para gid kay Abang, kag si Abang para man kay Angay. Kag diri nabun-ag ang Barangay sang Abangay.</p>
						</div>
					</div>
				</div> <!-- end abangay class -->
			
				<div class="agcarope is_barangay_content">
					<h3 class="heading">AGCA<span class="log">ROPE</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>AGCAROPE</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>163.33 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>496</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>117</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 498, 105.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Looking forward that Barangay Agcarope will remain peaceful, with a God-fearing people. With an effective delivery of infrastructure and livelihood programs.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>An effective delivery of service to the people of Barangay Agcarope especially the Farm to Market Road projects and providing health services to the community.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Many ipil-ipil trees or "agho" as people call it in the locality grow abundantly in the place. The name "Agcarope" came from the trees of "Agho" and from the person who planted it whose name was "Roque". That is where the name of Barangay Agcarope originated.</p>
						</div>
					</div>
				</div> <!-- end agcarope class -->
			
				<div class="aglobong is_barangay_content">
					<h3 class="heading">AGLO<span class="log">BONG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<p style="text-align: center;">Data for barangay aglobong is not yet available</p>
					</div>
				</div> <!-- end aglobong class -->
			
				<div class="aguingay is_barangay_content">
					<h3 class="heading">AGUI<span class="log">NGAY</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>AGUINGAY</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>149 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>319</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>74</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 457, 879.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end aguingay class -->
			
				<div class="anhawan is_barangay_content">
					<h3 class="heading">ANHA<span class="log">WAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>ANHAWAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>330.21 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>732</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>160</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 622, 709.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>To implement all infrastructure projects and a crime free barangay by 2010.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To implement all infrastructure projects and to enhance strategic knowledge and skills, most especially the welfare of peace and order situation of the barangay.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Sang una nga tiempo and mga lugar sa Pilipinas wala pa sang ngalan. Sugod sang pagbisita sang mga dumuluong nga katsila nagtukod sila sang ngalan.</p>
							<p>Isa ka adlaw samtang nga nagapamasyar ang mga dumuluong naka-abot sila sa banwa sang Janiuay padulong sa mga kabukiran. Samtang sa ila pagpanglakaton, may nakita sila nga duha ka bata sa isa ka lugar. Ginpamangkot nila kon ano nga lugar ang ila naabutan. Tungod nga indi maka-intindi ginapamangkot sila kon ano ang ila mga ngalan kag nagsabat ang mga bata nga si Ana kag si Juan. Sugod sadto ginsunod sang mga dumuluong ang ngalan sang kabataan kag ila ginpangalanan ang lugar nga Anhawan.</p>
							<p>Ini ang ginsuguran sang ngalan nga Anhawan.</p>
						</div>
					</div>
				</div> <!-- end anhawan class -->
			
				<div class="atimonan is_barangay_content">
					<h3 class="heading">ATIMO<span class="log">NAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>ATIMONAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>665.75 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1396</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>258</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 756, 818.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Atimonan envisions its people to be literate, responsible, disciplined, God-fearing with improved life situation, and a clean environment.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To protect and serve the people of the barangay para sa kauswagan kag kalinungan sang barangay. Mabuligan ang pumuluyo nga mangin responsible, malapit sa Diyos kag may kahadlok, matinahuron sa isa kag isa. To make them industrious with the help and guidance of dedicated barangay officials. Maka partisipar sa mga programa sang gobyerno.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Ang Atimonan ay nagsimula sa pangalang "Atimon". Ang atimon ay isang punong-kahoy na itinanim ng isang ita noong unang panahon. Dahil ditto ang "Atimon" ay naging "Atimonan", sapagkat ang mga dayuhan na naninirahan doon ng matagal ay dinagdagan nila ito ng "An". Ang "An" ay pangalan ng isang dalaga.</p>
						</div>
					</div>
				</div> <!-- end atimonan class -->
			
				<div class="balanac is_barangay_content">
					<h3 class="heading">BALA<span class="log">NAC</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>BALANAC</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>184.63 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>764</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>161</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 648, 302.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Balanac mangin isa ka mauswagon nga barangay, may paghangpanay, paghiliusa, bastante sa pagkaon, kag may kahadlo sa Diyos ang mga tawo.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang Barangay Balanac maga-implementar sang mayo nga programa, proyekto kag aktibidades, paggamit sang nagakaigo nga pundo para sa kauswagan, pag improbar sang ekonomiya kag pagprotekta sang palibot.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Barangay Balanac is one of the most progressive barangays of the Municipality of Janiuay. It was once a part of the extensive wetland where the two barangays led by Datu Gumok, from Talaugis originally settled, called the "Minoro kang Danaw". This barangay was named "Balanac", because in an expensive lagoon that was once a distinctive landmark of the locality, the fish called "Balanak" around.</p>
						</div>
					</div>
				</div> <!-- end balanac class -->
			
				<div class="barasalon is_barangay_content">
					<h3 class="heading">BARASA<span class="log">LON</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>BARASALON</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>1, 114.92 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1622</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>1 person/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>289</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 746, 000.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end barasalon class -->
			
				<div class="bongol is_barangay_content">
					<h3 class="heading">BO<span class="log">NGOL</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>BONGOL</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>not available yet</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>not available yet</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>not available yet</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>not available yet</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>not available yet</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A barangay that is progressive in terms of infrastructures and facilities, no percentage of unemployment and illiteracy; a drug free zone community which is also financially stable in terms of funding. An environment friendly community that is secured and peaceful, where people are socially and spiritually oriented.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Provisions of programs for hospitalizations through PhilHealth Insurances, livelihood for efficiency of people, projects for the community, quality education with school buildings and youth oriented activities.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>In early 1890's in the journey of a group of foreigners, they have crossed a river in Janiuay where there are many people washing their clothes. The foreigners ask the people if what is the name of the place, then the people told them that they don’t have any idea of the name of the place for they are also passers of the place for they also came from another barangay. While observing the area, the foreigners noticed that a certain plant growing abundantly in the vicinity so they asked the Indio the name of the plant. He answered that it was a kind of bamboo named "bongol".</p>
							<p>After the event, every time the foreigners were asked the name of the place, they answered "Bongol" which came from the certain plant growing in the place.</p>
						</div>
					</div>
				</div> <!-- end bongol class -->
			
				<div class="cabantog is_barangay_content">
					<h3 class="heading">CABAN<span class="log">TOG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CABANTOG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>94.00 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>251</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>53</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 442, 695.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Cabantog mangin mainuswagon nga barangay sa bilog nga munisipalidad sang Janiuay. Tanan nga pumuluyo mangin produktibo, maidukar kag obligado sa ila responsibilidad. Yara ang bug-os nga paghiliugyon sang tanan.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang Barangay Cabantog may dedikado kag aktibo sa hilikuton nga mga opisyales, may naga-ugyon kag nagahugpong nga mga pumuluyo. Sementado nga barangay road para sa mahapos nga pagdala sang produkto sa banwa. Kag natapos kag namintar nga mga proyekto sang barangay.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Long time ago, this barangay is very popular (bantog) because you can find here then finest dancers and beautiful women.</p>
							<p>In our dialect, they were known as "bantog nga manug-saot kag bantog nga mga matahum nga kadalagahan".</p>
						</div>
					</div>
				</div> <!-- end cabantog class -->
				
				<div class="calmay is_barangay_content">
					<h3 class="heading">CALM<span class="log">AY</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CALMAY</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>387.03 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1760</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>374</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 833, 343.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A society where there is equality, social justice and sustainable economic development.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Foster and promote the viability among people of limited means for harnessing people power, assuring their self-reliance and nurturing their economic well-being toward the establishment of a just and equitable society.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Calmay has obtained its name during the Spanish time. According to the ancestors, when the Spaniards docked at Barangay Calmay, they have no idea about the place. While they are walking, they met a man having a load of sugar. He was asked by the leader of the Spaniards about the name of the place. Since the language was in Spanish and he cannot understand of what the Spaniards is asking for his load. Since they have different languages, the Spaniards thought that the name of the place is "Kalamay". From that time on, the people imitated the word "Calmay".</p>
						</div>
					</div>
				</div> <!-- end calmay class -->
				
				<div class="canauili is_barangay_content">
					<h3 class="heading">CANAU<span class="log">ILI</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CANAUILI</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>495.32 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1762</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>385</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 839, 741.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end canauili class -->
				
				<div class="canauilian is_barangay_content">
					<h3 class="heading">CANAUI<span class="log">LIAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CANAUILLIAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>1988.39 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1096</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>1 person/2 hectares</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>237</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 630, 220.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Canauillian sa tuig 2010 isa ka mainuswagon nga barangay. Isa ka pinakamalinong nga barangay sang Janiuay. May potable water system, may eskwelahan nga mapag-on kag kumpleto sa hulot tulun-an. May mapisan kag masaligan nga lideres, mga tawo nga mahigugmaon kag mahinadlukon sa Diyos.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang barangay magasuportar sang programa sang KALAHI kaangay sang karsada, kag Hydro-Power Electrification. Mahilway ang pumuluyo sa kabudlayan kag kapigaduhon, mapataas ang kita paagi sa:</p>
							
							<ol>
								<li>Pagpapag-on sang karsada</li>
								<li>Hydro Power Electrification</li>
								<li>Livelihood Project</li>
							</ol>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Ang Barangay Canauillian suno sa mga katigulangan, sang una nga tiempo may isa ka Cana nga naga apelyido Willian nga nagkadto sa sini nga lugar kag sang iya pag-abot siya nahulog sa pangpang sang suba kag ang amo nga Cana napatay.</p>
							<p>Sugod sadto ang suba ginhingalanan nga Canauillian kag amo ini ang ginsuguran nga gintawag ang lugar nga Canauillian.</p>
						</div>
					</div>
				</div> <!-- end canauilian class -->
				
				<div class="caranas is_barangay_content">
					<h3 class="heading">CARA<span class="log">NAS</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CARANAS</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>271.61 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>802</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>185</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 621, 685.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Caranas as a peaceful and progressive community with a sustainable and balanced agriculture, efficient and effective delivery of social services with an ecologically developed environment where every resident is a partner in development and united in one common goal.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Provide and adopt efficient and effective programs, projects and activities to the people of the barangay in order to attain a better life.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Many years ago, Barangay Caranas is a free and progressive village before the Spaniards came. It is rich in natural resources composed of forest, river and vast farmlands. The early people of the village learned to cultivate lands and plant rice and other crops for their food.</p>
							<p>It was harvest season on the month of October when the Spaniards first stepped on the village. Upon seeing the Spaniards, the people stopped harvesting rice and they panicked and ran away as the Spaniards were approaching. Only one man was left and his name sa Anas. He could not run because he was lame and so old. As they approached him, the Spaniards asked Anas what's the name of the place in Spanish. Not knowing what they meant to say, Anas quickly replied 'nag-karan-karan' referring to the people who ran and panicked. The Spaniards could not understand Anas' dialect. They repeated their question. Anas interpreted that they were asking who he is, so once again he quickly replied 'si Anas'. Since then, the Spaniards called the place Caranas derived from the word 'nag-karan-karan and Anas' and that is how Barangay Caranas is known today.</p>
						</div>
					</div>
				</div> <!-- end caranas class -->
			
				<div class="caraudan is_barangay_content">
					<h3 class="heading">CARAU<span class="log">DAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CARAUDAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>758.08 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>947</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>1 person/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>189</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 635, 609.50</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>The Barangay aims to have a peaceful, progressive, health vigilant and fully energized with a balanced agricultural community wherein every constituent is a partner in development and believes in the preservation of an ecologically balance environment and united in one common aspiration with abiding faith in God.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>The Barangay Caraudan Local Government Unit must deliver good services to the community by implementing pro-poor projects of the barangay. Implement all Barangay Ordinances and eradicate illegal gambling, robbery, thief and drug addictions to promote health programs to have a healthy body and healthy minds for a better tomorrow. To have a fully energize community with availability of potable water lines for the 90% households in 2010. Enhance their responsibility and sensitivity regarding environmental problems and encourage appropriate actions and participations in solving problems. To educate every household to catch fish for their foods and not to rely always of funding from the National Government.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>In summer of 1678, four families left their place in Tala-ugis at the southern coastal area of Irong-Irong in order to escape from the attack of "Moros" of Muslims. Going northward following the course of Suage River, they reached Yabon, Quipot, Danao, and Matag-ub which became the core settlements of Janiuay that expanded in different areas.</p>
							<p>In 1738, the Spaniards reached these four settlements, and the first mass was held in Barangay Yabon in 1752. The leader of Yabon that time was Datu Buhawi and the leader of Ubian was Datu Dumagtol.</p>
							<p>Datu Buhawi of Yabon, adopted Christianity while Datu Dumagtol of Ubian, refused to adopt Christianity. Due to that reason, conflict between Ubian and Yabon broke out that forced the Spaniards to transfer the seat of government to Danao in 1758.</p>
							<p>Many developments happened during that time that expanded up to the neighboring barangays, most particularly Barangay Calmay, in which the first manual operated sugar mill was constructed.</p>
							<p>The Spaniards wanted to expand their crusade up to the opposite bank of Suage River most particularly at the southern portion of Danao, in order to convince the native people residing in that minoro or settlement to adopt Christianity. A group of Spaniards together with some natives were sent by the Spanish authorities to conduct ocular survey in that area. They crossed the Suage River and upon reaching the target area they saw some people working in the field. The Spaniards asked them if what the name of their place or minoro is.</p>
							<p>The man that leads the group replied "Caro", thinking that the Spaniards were asking his name. The Spaniard was not able to understand what he was saying so he asked again the same question. "The man replied again with "Udang" thinking that the Spaniard was asking the name of his wife.</p>
							<p>So the Spaniards named the place "Caro-udang" and later was changed to Caraudan in order to make the pronunciation simple considering that the Spaniards could hardly speak the words correct if it ends in letter "g".</p>
						</div>
					</div>
				</div> <!-- end caraudan class -->
			
				<div class="carigangan is_barangay_content">
					<h3 class="heading">CARIGA<span class="log">NGAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CARIGANGAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>282.29 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>955</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>204</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 542, 447.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end carigangan class -->
			
				<div class="cunsad is_barangay_content">
					<h3 class="heading">CUN<span class="log">SAD</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CUNSAD</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>264.53 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>532</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>116</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 504, 951.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end cunsad class -->
			
				<div class="dabong is_barangay_content">
					<h3 class="heading">DA<span class="log">BONG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DABONG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>294.71 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1200</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>266</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 678, 246.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A barangay with significant historical events, peaceful, progressive and lovely place to give in. With the solidarity of Dabonganons who are God-fearing people, nature lover, honorable and fair, definitely this barangay is eady to face every endeavor it takes.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To be able to offer quality and on time services and programs for the upliftment of the standard of living and sufficient source of income of every Dabonganon.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>During the Spanish time, the Spaniards came over to our place. They were so thirsty and they have nothing to drink. They can't find well or whatsoever source of water to drink. Our place that time was full of bamboo and trees. So the Spaniards cut the young bamboo (dabong) and began to suck the juice of the bamboo which was called Dabong, and with this they named our place Dabong.</p>
						</div>
					</div>
				</div> <!-- end dabong class -->
			
				<div class="damires is_barangay_content">
					<h3 class="heading">DAMI<span class="log">RES</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DAMIRES</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>237.90 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1344</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>6 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>308</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 740, 439.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>One of the cleanest and progressive barangay with the unity of the people.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Support the program of the government, particularly on health, and to continue the projects in the barangay with unity and progress.</p>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>The words Damires came from the names of the first leader of this barangay and his wife, "Dami" and "Ires" who have served and helped the people of the place during the time that they need help.</p>
						</div>
					</div>
				</div> <!-- end damires class -->
			
				<div class="damoong is_barangay_content">
					<h3 class="heading">DAMO<span class="log">ONG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DAMOONG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>241.45 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1458</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>6 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>332</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 840, 765.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end damoong class -->
			
				<div class="danao is_barangay_content">
					<h3 class="heading">DA<span class="log">NAO</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DANAO</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>374.69 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1773</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>5 persons/hectares</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>406</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 780, 291.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Sa tuig 2010, ang Barangay Danao mangin isa ka mainuswagon, masanag, malinong kag masadya, may bastante nga potable water system, may masanag nga mga kalye, sementado nga dalan, may masaligan nga lideres, child friendly and drug free community kag mahinadlukon sa Dios.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang Barangay maga-implementar sang mga programa, aktibidades kag mga proyekto, maga-gamit sang manggad (tawo kag materyal) para sa mapag-on nga pangginobyerno. Mahilway ang pumuluyo sa kapigaduhon, mapataas ang kita sang pumuluyo sa kapigaduhon, mapataas ang kita sang pumuluyo paagi sa:</p>
							<ol>
								<li>Animal Dispersal (swine and cattle)</li>
								<li>Backyard Gardening</li>
								<li>Electrification</li>
								<li>Livelihood Projects</li>
								<li>Anti-Drug Abuse Campaign</li>
								<li>Pagpapag-on sang mga kalsada</li>
							</ol>
							
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Sadtong panahon sang mga Espa&#241;ol ang nahauna nga mga pumuluyo nga nagapuyo sa karon nga ginatawag nga banwa sang Janiuay amo ang hubon sang mga barangay sa pagpanguna sang mga maisog nga babaylan ukon pari nga amo sanday Gumok, Hutikon, Ugamot kag Pagdakton. Sang tuig 1578, may hinuring-huring nga ang mapintas Espa&#241;ol magapang-atake ukon magalusob sa mga barangay sa Talaugis (karon banwa sang Zarraga). Bangud sang kahadluk, sila sekreto nga nagporma sang grupo kag nagplano nga bayaan ang lugar. Sa tapus sang mga paghanda sila sekreto nga nagpadulong panakatundan nga kabukiran. Ila gin-usoy ang suba sang lalawod kag pag-abot sa baha sang Magapa River sila nagpahuway sa malawig nga panglakaton.</p>
							<p>Samtang sila nagapahuway, ang mga pinuno sang barangay naghiwat sang sinapol kag ila ginhilisugtan nga indi sila magtingub sa isa ka lugar, agud malikawan ang pagmutik sa ila sang mga dumuluong ukon invaders. Ila man ginhilisugtan nga paga-pakigbatuan ang ano man nga pagpang-atake. Ila dugang nga gin-desisyonan nga magbisita sa ila tagsa ka settlement ukon lugar. Duha ka dalagko nga grupo ang nagseparar tubtub nga ang isa ka hubon makalab-ot sa gibwangan sang Matag-ub River. Ang isa ka grupo padayon nga nagpanglakaton sa Suage River kag ila nakit-an ang wide boggy tracks of land nga ila ginatawag Danao, isa ka malapad nga lugar nga ginatiniran sang tubig. Ang ginatumod sadtong mga hubon amo ang wala ginakahubsan sang tubig nga "alangan". Diri nagikan ang ngalan sang Danao, ang aton barangay.</p>
						</div>
					</div>
				</div> <!-- end danao class -->
			
				<div class="gines is_barangay_content">
					<h3 class="heading">GI<span class="log">NES</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>GINES</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>303.57 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>722</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectares</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>164</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 536, 000.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Gines with a new barangay road connectiong Zone 2 and Zone 1 going to Barangay Damoong. A rehabilitated potable water system, a complete construction of Barangay Hall and with concrete street light posts.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To put up Botika ng Barangay, completion of electrification program, a covered benches around the basketball court hall. And continuous support of KALAHI-CIDDS projects.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>The word "Gines" came from the quality of soil, the barangay have which is sandy clay and not so good for agricultural production. This kind of soil is known as "hinis-hinison" in the local dialect.</p>
							<p>Barangay Gines is the main entrance of the Municipality of Janiuay before reaching the poblacion.</p>
						</div>
					</div>
				</div> <!-- end gines class -->
				
				<div class="guadalupe is_barangay_content">
					<h3 class="heading">GUADALU<span class="log">PE</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>GUADALUPE</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>550.36 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1995</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectares</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>463</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 864, 256.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Guadalupe isa ka malinong, progresibo kag maka-Diyos agud malab-ot ang katawhayan kag kauswagan sang masunod nga henerasyon.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang komunidad nga nagapatigayon sang kaayuhan paagi sa pag adaptar sang mga proyekto kag aktibidades agud matib-ong ang kalidad sang pangabuhi sang mga pumuluyo.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>The name Guadalupe was derived from the of the patron saint, our Lady of Guadalupe who appeared in Guadalupe, Mexico at the dawn of December 9, 1531, as seen by Juan Diego.</p>
						</div>
					</div>
				</div> <!-- end guadalupe class -->
			
				<div class="jibolo is_barangay_content">
					<h3 class="heading">JIBO<span class="log">LO</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>JIBOLO</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>532.61 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>4078</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>8 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>877</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 1, 379, 252.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Sa tuig 2009 ang Barangay Jibolo mangin isa ka komunidad nga hilway sa kaimolon, matinlo, may kooperasyon sa kag isa, kag may kahadlok sa Dios.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang Barangay Jibolo nagahugpong sa pag implementar, epektibo sa paggamit sang dunang manggad nga yara sa palibot paagi sa pagpatigayon sang programa, aktibidades para sa kauswagan sang mga pumuluyo. Pagpakig-angot sa nagakalain-lain nga ahensya sang gobyerno kag sa pribado nga mga sektor para sa papag-on nga pagdumalahan.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Barangay Jibolo is a premier Barangay of the Municipality of Janiuay. It is located North of the Poblacion of Janiuay just across Suage River. Distance is almost 1/2 kilometer from the town proper. The vital Iloilo - Capiz National Highway passes through this locality. Because of its strategical location PNP Mobile is established in this Barangay.</p>
							<p>Barangay Jibolo got its name from the plant called "bolo" which is very abundant in this place long time ago. It grows abundantly at the riverbank of the Suage and Magapa rivers.</p>
						</div>
					</div>
				</div> <!-- end Jibolo class -->
				
				<div class="kuyot is_barangay_content">
					<h3 class="heading">KUY<span class="log">OT</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>KUYOT</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>262.76 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>911</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>177</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 589, 223.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Adopting and implementing efficient governance so as to develop unity, prosperity serving as prime movers for progress and development.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Barangay Kuyot, Janiuay commits to the integrated development of the barangay, implore peace and order, adopt and implement good governance that foster transparency and elucidates involvement among constituents through leadership by example.</p>	
						</div>
					</div>
				</div> <!-- end kuyot class -->
				
				<div class="madong is_barangay_content">
					<h3 class="heading">MAD<span class="log">ONG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>MADONG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>346.20 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1737</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>5 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>423</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 772, 446.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A model community of good governance in the Philippines.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To improve quality of life in our community through good governance.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Sang una nga panahon ang lugar nga ini may malapad nga parti sang tubig. Ini ang malapad nga suba sang Magapa River. Ini nga lugar ginadumalahan sang isa ka datu nga amo si Datu Mahong. Mabuot kag palangga sang mga tawo. Pag abot sang mga dumulu-ong nga Espa&#241;ol gin hilinganan ini nga lugar "Sa Madon". Samtang nagaligad ang madamu nga tinuig, tungod mabudlay ang pagmitlang sang "Sa Madon", gintawag ini nga lugar nga Madong.</p>
						</div>
					</div>
				</div> <!-- end madong class -->
			
				<div class="manacabac is_barangay_content">
					<h3 class="heading">MA&#209;ACA<span class="log">BAC</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>MA&#209;ACABAC</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>209.50 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>812</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>193</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 567, 206.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Ma&#241;acabac is economically, socially and culturally progressive barangay embodied with goal-oriented, law abiding, united and God-fearing citizen.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Provide quality access on betterment transportation, perform duties and functions in accordance with the law, protect the interest of our people with justice and fairness to everyone and encourage positive values among them.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Long, long time ago, the place was covered with forests and it was a swampy place here and there. It was a place surrounded with hills. Here's the story of how this place got its name.</p>
							<p>A group of settlers, probably eight families arrived. They made clearings, cut down trees and cultivated a small area and planted with rice and corn. The land was very fertile so these settlers made a very nice initial harvest. Aside from the good harvest they found out that the place was abound with wild animals like pigs, deer and wild birds. The river and swamps were rich in supply of fishes.</p>
							<p>When their relatives and neighbors who were left behind by their good fortunes they came heard of this new place. There came one group after another. In the native dialect "nag arabac-abac lang ang naga-arabot". More settlers came. Wider areas were cultivated. These early settlers first called their settlement "may nagarabot-abot". When Spaniards came, the name was changed to Ma&#241;acabac.</p>
						</div>
					</div>
				</div> <!-- end manacabac class -->
				
				<div class="mangil is_barangay_content">
					<h3 class="heading">MAN<span class="log">GIL</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>MANGIL</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>259.21 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1167</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>5 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>243</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 730, 000.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end mangil class -->
			
				<div class="matagub is_barangay_content">
					<h3 class="heading">MATAG<span class="log">UB</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>MATAG-UB</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>273.41 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1484</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>5 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>335</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 716, 264.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>We visualize a much improved barangay. The target projects are accomplished. The people's inter-relationship has improved and their moral and spiritual values are strengthened.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>We are to work on our best to bring the much needed development to our barangay. We also have to protect the interest of our constituents with justice.</p>	
						</div>
					</div>
				</div> <!-- end matagub class -->
			
				<div class="monte-magapa is_barangay_content">
					<h3 class="heading">MONTE-MAG<span class="log">APA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>MONTE MAGAPA</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>772.28 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1441</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>305</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 784, 203.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>The good leader can transform the vision into reality.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Establish income generating scheme for the expansion of our fund collections, for the improvement of infrastructure projects, barangay communication facilities and livelihood projects.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Sang una nga panahon suno sa panaysayon sang mga katigulangan nga naga puyo sa sini nga du-og amo ang mga ati. Sang pag-abot diri sang mga Kastila, ila nalabayan ining mga ati nga naga sugba sang kamote sa idalum sang isa ka kahoy nga magapa. Ang mga Katsila nagpamangkot kon ano bala ang ngalan sang sini nga du-og. Ang ati indi makahangop sang pulong sang mga Kastila, ang paghangop nila kon nagpamangkot ang mga Kastila kon ano ila ginahimo. Ang ila ginsabat nagasugba sila sang kamot sa idalum sang kahoy nga magapa. Ang mga Katsila wala man makahangup sang pinamulong sang mga Ati. Abi nila ngalan sang du-og nga ila ginapamangkot ang ginsabat sang mga ati. Ang kamote kag magapa ginsugpon nila kag nangin "Kamote Magapa" kag sa ulihi nangin "Monte Magapa" nga nagikan sa kamote kag kahoy nga magapa bunga sa indi paghangpanay sang Ati kag Katsila.</p>
							<p>Nangin isa ini ka pu-ok sang tuig 1856.</p>
						</div>
					</div>
				</div> <!-- end monte-magapa class -->
			
				<div class="pangilihan is_barangay_content">
					<h3 class="heading">PANGILI<span class="log">HAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>PANGILIHAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>252.09 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>966</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>203</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 589, 490.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end pangilihan class -->
			
				<div class="panuran is_barangay_content">
					<h3 class="heading">PANU<span class="log">RAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>PANURAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>335.55 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>915</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>191</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 673, 640.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Panuran mangin mainuswagon nga barangay, may ma-ayo nga karsada para maka-abot ang produkto sa banwa. Ang opisyales ka gang mga pumuluyo naga isa, mag hugpong, kag naga tinguha para mangin masulhay ang pag ginawi kag pagpangabuhi sang mga tawo sa sini nga barangay.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang mga opisyales sang Barangay Panuran magatinguha kag mangin mapisan para sa improvement kag para mangin mainuswagon ini nga barangay. Tinguha-on nga ihatag sa pumuluto ang water system, elektrisidad kag ma-ayo nga dalan para mahapos ang transportasyon kag madali ang pagdala sang produkto sa banwa.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>The name of this barangay originated during the Spanish time from the native word "karan-karan", which means that the residents of the place at that time were always in panic because of the pervading situation, and no one in the "minoro" of community will accept the position as leader or "teniente del barrio".</p>
							<p>Whenever the Spanish authorities fought for a "cabesa", or leader of the "minoro", the residents would ran away for fear of being made the "cabesa" for the position was saddled with grave responsibilities exposing the holder to economic disaster and personal hardships and pain; and their agitated, hasty escapade is termed as "karan-karan", and as time went on the "minoro" which in time with the strengthening of the political structures it was designated as component barrio (barangay) of the municipality of Janiuay, with official name "Panuran".</p>
						</div>
					</div>
				</div> <!-- end panuran class -->
			
				<div class="pararinga is_barangay_content">
					<h3 class="heading">PARARI<span class="log">NGA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>PARARINGA</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>246.78 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>507</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>116</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 580, 991.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>To make Barangay Pararinga to be a peaceful place to live. To live progressive, religiously united and to be a model barangay in the Municipality of Janiuay.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Implement peace and order. Introduce program to sports and development in the barangay. Introduce income generating projects in the barangay such as high value crops, animal production, micro businesses undertaking among residence. Identification and development of infrastructure project. To straighten religious organization within among the residence in the Barangay Pararinga.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Ang Barangay Pararinga isa sa 16 ka mga lugar sa Panay nga gin okupahan sang naulihi nga henerasyon sadtong tuig 1738. Ang nagapamuno sa amo nga barangay ginatawag kay "Datu Bahay". Kon nga-a ini nga lugar gintawag nga Pararinga, nahibalu-an suno sa istorya sang mga katigulangan.</p>
							<p>Suno sa katigulangan, sang una nga panahon antes ang inaway pangkalibutanon, ang Barangay Pararinga isa ka talon nga lugar. Sa sini nga talon nakit-an ang suba sang Magapa kag may tatlo ka sapa. Diri Makita ang madamo nga tuburan. Halin sa nakatungdan nga bahin sang sapa. Masulog ang tubig nga naga-ilog. Kag sa sini nga mga sapa may tuman ka damo nga magagmay nga isda nga ginatawag nga "anga".</p>
							<p>Sang isa ka adlaw may isa ka tigulang nga lalaki nga nagapaligo sa sapa nga nagahublas. Bangud tuman ka tin-aw ang tubig, iya gid makita ining magagmay nga mga isda nga "anga". Sa iya kaganyat sang kadamu-on sang isda nga "anga", iya imi ginsalug sang isa niya ka kamot, samtang ang isa niya ka kamot nagatakup sang iya atubangan nga bahin bangud kay nagahublas lamang siya, samtang sige ang salug niya sang "anga", naglabay ang isa ka babaye nga iya man lang kumare. Nakit-an siya sang babaye kag iya siya gintawag kag ginpamangkot, "Pare, ano ang ginasalog mo sa sapa?" Nagsabat ang lalaki, "Anga Mare". "Ti ano ang pagsalog mo sang mayo ka yang isa nimo ka kamot nagatakop sa imo "atubangan" , hambal sang kumara.</p>
							<p>"Maayo pa siguro ako na lang mauyat sang imu 'atubangan' para ang duha nimo ka kamot ang magasalug sang isda." Nagpasugot man ang iya kumpare. Kag bangud nalibre ang iya duha ka kamot, naga parapara lang ang iya duha ka kamot sa pagsalug sang isda nga "anga".</p>
							<p>Halin sadto gintawag ang amo nga lugar nga Pararinga, halin sa mga tinaga nga "Pare", "Parapara" kag "Anga".</p>
						</div>
					</div>
				</div> <!-- end pararinga class -->
			
				<div class="patong-patong is_barangay_content">
					<h3 class="heading">PATONG-PA<span class="log">TONG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>PATONG-PATONG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>204.16 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1229</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>6 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>273</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 659, 577.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end patong-patong class -->
			
				<div class="quipot is_barangay_content">
					<h3 class="heading">QUI<span class="log">POT</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>QUIPOT</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>1, 356.37 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>3105</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>627</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 1, 162, 219.00</td>
								</tr>
							</table>
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Quipot (Kipot) got its name from a two narrow riverbanks . Before it was so narrow that one can just jump from one side to another in order to cross the river.</p>
						</div>
					</div>
				</div> <!-- end quipot class -->
			
				<div class="stotomas is_barangay_content">
					<h3 class="heading">STO. <span class="log">TOMAS</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>STO. TOMAS</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>317.78 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>862</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>178</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 621, 173.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Isa ka matin-ad nga barangay kag ginapamunu-an sang mga opisyales nga may kapasidad, pag-ulikid kag matinlo nga balatyagon nga ang mayor nga katuyu-an amu ang pagpatin-ad sang pangabuhi sang mga pumuluyo paagi sa husto kag maathag nga pag-usar sang pundo sang barangay; pagdul-ong sang basic services nga naga kaigo kag kinahanglanon sang pumuluyo; husto nga pag-usar sang mga duna nga manggad sang barangay nga may pag-amlig sang palibot, kag labaw sa tanan nagakilala sa Diyos para ang katawhayan kag kinamatarong sang kadam-an mapangapinan.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Serbisyo kag dugang nga mga proyekto para sa kaayuhan sang barangay kag sang pimuluyo.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>The name Barangay Sto. Tomas is a namesake of its Patron Saint Thomas de Aquino.</p>
						</div>
					</div>
				</div> <!-- end stotomas class -->
			
				<div class="sarawag is_barangay_content">
					<h3 class="heading">SARA<span class="log">WAG</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>SARAWAG</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>216.59 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>503</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>117</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 576, 896.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Sarawag shall be a progressive barangay in the year 2015, where peace and solidarity occur. All of its populace shall be developed spiritually, socially and economically. There shall be no under-educated and out of school youth in our barangay.</p>
							<p>These dreams will be realized through proper planning and implementation of our priority projects, programs and activities.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>We, the Sarawagnon will exert joint and unified efforts to brnig forth our desired objectives for our benefits and for the generations to come.</p>	
							<p>We will dedicate ourselves sincerely to be of service in our barangay. Through this we can bring unity, peace and progress to Barangay Sarawag.</p>
							<p>Uswag Sarawag...</p>
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Long, long time ago, there's a couple who lived in this barangay and were gifted with a beautiful daughter named Sara. This little girl Sara is fond of going out of their house. Her mother was always looking after her. One day, Sara went into the hillside without asking permission from her mother. It was already late in the afternoon, but Sara is still nowhere to be found. Her mother was so bothered and very much frightened about Sara's condition. Her mother kept on looking and calling her, until she reached the hillside. Sara heard her mother's voice, so she hurriedly run towards her. 'Mother, I went to the hillside and I saw this interesting plant. Do you know what is it called?' Her mother told her that the plant is 'kalawag'.</p>
							<p>From then on, the Barangay was named Sarawag, named after the little girl Sara and a plant called Kalawag which is found plenty in the place.</p>
						</div>
					</div>
				</div> <!-- end sarawag class -->
			
				<div class="tambal is_barangay_content">
					<h3 class="heading">TAM<span class="log">BAL</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>TAMBAL</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>243.22 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1199</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>5 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>258</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 733, 528.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Tambal mangin isa ka mainuswagon nga komunidad paagi sa pag-ugyon sang mga pumuluyo nga komunidad paagi sa pag-ugyon sang mga pumuluyo nga may mapag-on nga palangabuhian kag seguridad sa mga nagaabot nga kalamidad kag masulhay nga pangabuhi. Mapataas ang edukasyon ka gang mga pamatan-on malayo sa malain nga bisyo ilabi nag id sa droga.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Mapatigayon ang kaayuhan sang barangay paagi sa social, political, economic kag spiritual formation. Ang tagsa-tagsa may paghugpong agud maagum ang padayon nga pag-uswag kag maagum ang mayo nga palangabuhian.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Tambal means cure and the barangay got its name from the series of event that happened during the war which soldiers that were wounded in the Sitio Tawag, Caraudan will just shout "Tambal!" and the people of this barangay will come to cure those soldiers with herbal medicines.</p>
							<p>It was believed that this barangay has abundant supply of medicinal plants before which it used to cure wounded soldiers, and until today, you can still find some of these medicinal plants, that were used by the people before.</p>
						</div>
					</div>
				</div> <!-- end tambal class -->
			
				<div class="tamuan is_barangay_content">
					<h3 class="heading">TAMU<span class="log">-AN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>TAMU-AN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>229.01</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>850</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>213</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 575, 557.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>We, the Barangay Officials of Barangay Tamu-an, nobly envision our beloved barangay a peaceful place, progressive, and a place of abundance and an ideal to live in.</p>
							<p>A peaceful place where one could sleep well all night without fear of burglary, crimes, cattle rustling, or shouts which could awaken you during your deep slumber at night. Yes, a peaceful place because there are regular "tanods" watching day ang night for emergencies like fire conflagration, detection of bad elements which may cause atrocities within the communicty, natural calamities like typhoon and floods, and other unforeseen events. A peaceful place because anyone could go out of his home without hesitation that criminals may inflict damage to the residents.</p>
							<p>Truly, we envision that our place is a place of progression, that is, a place with an ideal accesibility to transportation, with basic facilities on water supply, electricity, irrigation projects, and a place with competent teachers to help pupils to the highest level of excellence in school work for their basic knowledge towards professionalism. We firmly believe that educating the younger generation is the shortcut way towards progress and development. The youths being the future pillars of our society. Looking towards abundance for food, the farmers must be given the basic and advance techniques and skill in food production, they being the strongest backbone of our economy. We will provide them irrigation system and financial support for their food production. Women could be trained towards food processing and other activities to help earn income for their families. We also look forward for the vital role at cooperatives in the barangay as active partners for development and progressive community.</p>
							<p>When peace, abundance, and good health are provided to all residents in a community, an ideal place to live in could be guaranteed. This is our humble and intrinsic goals for our dear place, Barangay Tamu-an.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>We have a sacred mission - the effective way of reaching the goals set for the fruition of all the plants and targets for good of our constituents. Admittedly, this is the hardest part of the overall plan.</p>	
							<p>Perhaps, with the meticulous monitoring and aggressive implementation of the plans, the goals would fully reach. Truly, this needs some sacrifices on the frontliners of the projects and programs' implementation. The Barangay Officials as leaders and servants should be the first to be struck by the hardship in the implementation of those plans.</p>
							<p>However, these sacrificial moves are not the sole responsibility of the leaders but this is the cooperative efforts of all. Responsive leadership needs also a responsive answer from the people who are the end receivers of the fruits of the plans.</p>
							<p>For all these, we humbly appeal to all our constituents to actively participate in every endeavor and all communal efforts towards our development and progress.</p>
						</div>
						<h3>Brief History</h3>
						<div>
							<p>This barangay lies at the northern boundary of the Municipality of Janiuay. It was an ancient "minoro" established by the settlers long before the Spaniards came. Formerly, it was named "Tamwa-an", ascribing to a popular account that once a great horde of "mangaralyaw", or raiders tried to attack the prosperous settlement that sprawled at the lowlands along the Suage River, but because of the strong "Talutog" or defense of the settlement, and the great number of the defenders that are ready to fight the attackers, the raiders did not pursue their intention to plunder the settlement but remained at the hill from a distance and peered down to survey the activities of the settlers, and after a few days, the "mangaralyaw", sensing that they cannot achieve victory, left.</p>
						</div>
					</div>
				</div> <!-- end tamuan class -->
			
				<div class="tiringanan is_barangay_content">
					<h3 class="heading">TIRINGA<span class="log">NAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>TIRINGANAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>260.97 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>845</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>3 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>186</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 581, 000.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Will serve as a model barangay with competent officials working harmoniously to a peaceful and progressive barangay by 2010.</p>
					
						</div>
						<h3>Mission</h3>
						<div>
							<p>Aims to develop productive citizens in the field of agriculture through the good supervision ang guidance of its barangay officials.</p>	
						
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Barangay Tiringanan got its name from the series of events happened during the World War II. Before, it is only a purok. This purok is called Torung-anan, which means "center". It is center because it is situated on the center part of four barangays namely, Barangay Abangay, Barangay Dabong, Barangay Sarawag, and Barangay Pangilihan.</p>
							<p>After the World War, and it's because of illiteracy and ignorance of the people they cannot emphasize the word Torung-anan, and in the long run the Torung-anan baca,e Tiring-anan and eventually was called Tiringanan.</p>
							<p>That was how Barangay Tiringanan got its name.</p>
						</div>
					</div>
				</div> <!-- end tiringanan class -->
			
				<div class="tolarucan is_barangay_content">
					<h3 class="heading">TOLARU<span class="log">CAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>TOLARUCAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>197.06 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1457</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>7 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>312</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 710, 191.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>May pagkabalaka sa tagsa-tagsa, may pag amlig sa dunang manggad, sa idalum sang pagdumalahan sang mga opisyales nga may kapasidad kag panindugan, mga masinulundon nga mga pumuluyo nga may pagtuo sa Dios, may pag-isa sa paminsaron kag tagipusuon para sa kaayuhan sang tanan. Isa ka komunidad nga matin-ad, malinong, may paghangpanay, pagbinuligay.</p>
					
						</div>
						<h3>Mission</h3>
						<div>
							<p>Pagpatigayon sang mga mapuslanon kag mabinungahon nga mga programa, proyekto kag mga bulohaton para sa katumanan sang aton handom kag pag-isa para sa kauswagan.</p>	
						
						</div>
						<h3>Brief History</h3>
						<div>
							<p>During the Spanish time, this place has no name. It was just a place along the highway.</p>
							<p>In the eastern part of this place, a big towering tree can be found that has grown for several decades. The tree served as a watch tower of the barangay. The people hang a bell on the tree top so that the inhabitants of the barangay and the neighboring barangay could detect the danger through the ringing of the bell.</p>
							<p>One day, the people heard the big thundering crash. They came to see the place and found that half of the tree was cut and it fell vertically on the ground. In vernacular the people said, "ang utod nga kahoy nagtibsok o nag tuladok sa lupa".</p>
							<p>The news about the tree spread out. Many people cam e to see the tree and when asked where they had been, they replied that they had been to Toladukan.</p>
							<p>Since then, the place was called Toladucan which was eventually changed to Tolarucan.</p>
						</div>
					</div>
				</div> <!-- end tolarucan class -->
				
				<div class="tuburan is_barangay_content">
					<h3 class="heading">TUBU<span class="log">RAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>TUBURAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>275.17 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1014</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>4 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>223</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 611, 999.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end tuburan class -->
			
				<div class="ubian is_barangay_content">
					<h3 class="heading">UBI<span class="log">AN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>UBIAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>580.53 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>893</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>169</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 665, 000.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Ang Barangay Ubian mangin isa ka komunidad nga mainuswagon, matawhay, may paghinangpanay, may paghidait, may mapag-on nga mga ekonomiya kag may pag-hiliusa sa Diyos.</p>
					
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang Barangay Ubian nagahugpong sa pakig-angot sa nagakalain-lain nga ahensiya/sector para matigayon ang programa, proyekto kag aktibidades kag magamit sang manggad )materyales, tawo, pinansyal) paagi sa pag-isa may panindugan kag may mapag-on nga pag-ginubyerno.</p>	
						
						</div>
						<h3>Brief History</h3>
						<div>
							<p>In the summer of 1578, the families of Gumok, Hutikon, Ugamut and Pagdakton left their place in Talaugis, at the south coastal settlement of Irog-Irog to escape from the attack of Moros or Muslims; trudging northward into the interior of Panay Island these four families followed the Suage River and settled in places now known as Yabon, Ubian, Danao and Matag-ub, which became the core settlements of Janiuay.</p>
							<p>Formerly Ubian was known as Punod, and in 1738, Datu Dumagtol leads the settlement and Yabon that time was headed by Datu Buhawi. The two leaders were close friends and they were mych close to each other. It was also in this year that the Spanish expedition reached these peaceful communities. The expedition was headed by the young  soldier. Francisco Bayot de Ocampo, who later became the Spanish governor in the year 1769.</p>
							<p>The Spanish visited Punod, and they saw a man digging in the ground near the bank of Suage River. That man was harvesting his "ubi" plantation because during that time "ubi" was abundant in that place.</p>
							<p>The Spaniards ask the man for the name of the place. The man did not understand what the Spaniards was taling and he thought that the Spaniards was asking what he was doing and he replied: "ubi", ga-kali ako "ubi". The Spaniards did not also understand what he was saying so the leader asks again the same question in order to validate the previous statement. The man replied "kaubihan" thinking that the Spaniards was asking the name of the plant.</p>
							<p>Due to misinterpretation of the statements between the man and the Spaniards, the name Punod was changed to Ubian, which was derived from the words "ubi" and "kaubihan". Since then, Punod was called "Ubian".</p>
						</div>
					</div>
				</div> <!-- end ubian class -->

				<div class="yabon is_barangay_content">
					<h3 class="heading">YAB<span class="log">ON</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>YABON</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>355.07 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>873</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>2 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>181</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 586, 619.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end yabon class -->
			
				<div class="anoblezaeast is_barangay_content">
					<h3 class="heading">A. NOBLEZA <span class="log">EAST</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<p style="text-align: center;">Data for barangay A. Nobleza East is not yet available</p>
					</div>
				</div> <!-- end anoblezaeast class -->
			
				<div class="anoblezawest is_barangay_content">
					<h3 class="heading">A. NOBLEZA<span class="log">WEST</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>AQUINO NOBLEZA WEST</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>8.93 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>382</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>43 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>95</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 471, 798.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Barangay Aquino Nobleza West will be one of the most developed and progressive barangay in the Municipality of Janiuay spiritually, economically and commercially.</p>
					
						</div>
						<h3>Mission</h3>
						<div>
							<p>Aims to develop a barangay where cooperation and unity exists with harmonious relationship among residents united for a cause for common complete development and progress, guided by the Almighty God.</p>	
						
						</div>
					</div>
				</div> <!-- end anoblezawest class -->
			
				<div class="rarmada is_barangay_content">
					<h3 class="heading">R. ARMA<span class="log">DA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>R. ARMADA</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>7.16 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>257</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>36 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>62</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 443, 961.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end rarmada class -->
			
				<div class="dgabordo is_barangay_content">
					<h3 class="heading">D.G. <span class="log">ABORDO</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>D. G. ABORDO</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>10.74 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>405</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>38 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>82</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 519, 098.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A community strengthened by love, cooperation and camaraderie towards sustainable development and progress under God's guidance.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To build infrastructure and establish activities, projects and livelihood programs to elevate the standards and quality of living of all members of Barangay Domitilo G. Abordo as well as to uphold and strengthen a local government which promotes and ensures the betterment, cooperation and peace in the community.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Situated within the urban area, Barangay Domitilo G. Abordo is formerly known as Barangay Concepcion. On October 2, 1990 it was changed to Barangay Domitilo G. Abordo thru Ordinance No. 6, Series of 1990 under Resolution No. 411, Series of 1990 upon motion by Hon. Ma. Cleofas G. Talamera, duly seconded by Hon. Jose B. Borra, unanimously approved.</p>
							<p>The purpose is to give honor to the late Congressman Domitilo Galela Abordo, one of the illustrious sons of Janiuay in order that the Janiuaynon's of today and the coming generations will remember him and abide by his intellectual and normal excellence and sublime standards in public as well as in private life.</p>
						</div>
					</div>
				</div> <!-- end dgabordo class -->
			
				<div class="golgota is_barangay_content">
					<h3 class="heading">GOLGO<span class="log">TA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>GOLGOTA</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>6.26 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>452</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>71 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>102</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 494, 236.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end golgota class -->
			
				<div class="locsin is_barangay_content">
					<h3 class="heading">LOC<span class="log">SIN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<p style="text-align: center;">Data for barangay Locsin is not yet available</p>
					</div>
				</div> <!-- end locsin class -->
			
				<div class="dontluterocenter is_barangay_content">
					<h3 class="heading">DON T. LUTERO <span class="log">CENTER</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DON T. LUTERO CENTER</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>8.93 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>416</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>58 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>111</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 503, 408.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>To develop every citizen mentally, physically, morally and spiritually in our barangay.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To uphold and strengthen the unity and bonding towards each and everyone of the residents in order to achieve the progressiveness of our community.</p>	
						</div>
					</div>
				</div> <!-- end dontluterocenter class -->
			
				<div class="dontluteroeast is_barangay_content">
					<h3 class="heading">DON T. LUTERO <span class="log">EAST</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DON T. LUTERO EAST</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>9.84 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>599</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>61 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>131</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 548, 000.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end dontluteroeast class -->
			
				<div class="dontluterowest is_barangay_content">
					<h3 class="heading">DON T. LUTERO <span class="log">WEST</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>DON T. LUTERO WEST</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>9.84 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1634</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>166 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>362</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 801, 351.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>A progressive, peaceful, healthy community developed and improved with a common purpose and efforts towards spiritual and material growth showing transparency on the financial management resulting to better services for the people.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>To grow and transform to be a dynamic unit delivering quality and effective services and facilities to the public focus on effective management of fund, resources and properties of the barangay.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Barangay Don Tiburtio Lutero Street was formerly named San Jose Street. Don Tiburtio Lutero Street got its name in honor of the late Congressman Don Tiburtio Lutero, a prominent family and resident of the place.</p>
						</div>
					</div>
				</div> <!-- end dontluterowest class -->
			
				<div class="crispinsalazarnorth is_barangay_content">
					<h3 class="heading">CRISPIN SALAZAR <span class="log">NORTH</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CRISPIN SALAZAR NORTH</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>7.16 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>193</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>27 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>44</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 482, 000.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Sa tuig 2013 and Barangay Crispin Salazar North mangin isa ka first class barangay nga may malipayon nga mga pamilya, mapag-on nga ekonomiya, may matahum nga palibot, pinakamatinlo nga barangay, pumuluyo nga may dignidad kag may kahadlok sa Diyos.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang barangay amo ang pinaka-diutay nga political unit sang gobyerno nga naga panguna sa mga katungdanan sa pagdumala sang mga programa, proyekto kag paghugpong sang mga nagakalainlain nga mga sektor sa mapag-on nga pagpamamahala sang aton gobyerno nga may dignidad.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Known as "Gahit" which means a path cleared with thick vegetation that grows therein to make a pathway for passerby, Barangay Crispin Salazar was formerly named Sto. Ni&#241;o Street. It was later renamed after Capt. Crispin Salazar, the first PMA graduate of Janiuay who died in line of duty during the encounter with the "Huk Balahap" in Tanawan, Batangas.</p>
						</div>
					</div>
				</div> <!-- end crispinsalazarnorth class -->
			
				<div class="crispinsalazarsouth is_barangay_content">
					<h3 class="heading">CRISPIN SALAZAR <span class="log">SOUTH</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CRISPIN SALAZAR SOUTH</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>8.93 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>211</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>24 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>44</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>not yet available</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end crispinsalazarsouth class -->
			
				<div class="sanjulian is_barangay_content">
					<h3 class="heading">SAN <span class="log">JULIAN</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>SAN JULIAN</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>26.84 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>1431</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>53 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>333</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 684, 564.00</td>
								</tr>
							</table>
						</div>
					</div>
				</div> <!-- end sanjulian class -->
			
				<div class="sanpedro is_barangay_content">
					<h3 class="heading">SAN <span class="log">PEDRO</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>SAN PEDRO</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>5.37 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>603</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>112 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>120</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 607, 664.00</td>
								</tr>
							</table>
						</div>
						<h3>Brief History</h3>
						<div>
							<p>During the time when the Spaniards came, some barangay don't have names. When they came and visited the barangay, they found the people friendly and nice. Every single day that Spaniards have spent in this barangay, they have visited every houses of the residents and one thing they've noticed, all people have poultry in which cock are being kept. They raised cocks and conditioned them to be ready for cockfighting. This was the entertainment of the people of the barangay and became one of their favorite past times.</p>
							<p>One day all Cabeza de Barangay have decided that every barangay must have names. One of the Spaniards suggested that the name suit to this barangay is Saint Peter, the keyholder of the heaven's gate and a saint that is fond of cocks. That's hown San Pedro got its name and until now the people of the barangay are still engaging for cock-raising.</p>
						</div>
					</div>
				</div> <!-- end sanpedro class -->
			
				<div class="starita is_barangay_content">
					<h3 class="heading">STA. <span class="log">RITA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<p style="text-align: center;">Data for barangay Sta. Rita not yet available</p>
					</div>
				</div> <!-- end starita class -->
			
				<div class="captainatirador is_barangay_content">
					<h3 class="heading">CAPTAIN A. <span class="log">TIRADOR</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>CAPT. A. TIRADOR</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>13.43 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>not yet available</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>166 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>159</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 570, 000.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>Sa tuig 2013 ang Barangay mangin isa ka komersidad nga may mapag-on nga ekonomiya, mangin isa ka school belt, malipayon kag mauswagon nga mga pamilya, matahum kag matinlo nga palibot nga may kahadlok sa Dios.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Ang barangay Capt. Agustin Tirador magapanguna sa pag-implementer sang programa, proyekto kag abilidades, nagapatigayon sang paghugpong sang mga sector pamaagi sa mapag-on nga pagginobyerno nga may panindugan.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Located in the Poblacion of Janiuay, was named in honor and memory of the most illustrious son of Janiuay, the venerable Kapitan Agustin Tirador, who had served as Capitan Municipal of Janiuay (1989); distinguished leader of the "manriribuk" against the Spanish regime; a staunch defender of Filipino freedom against the American occupation; eminent leader of the group that planned the brilliant, bloodless takeover of the Municipality of Janiuay by the Filipinos from the Spaniard's dominion and control.</p>
						</div>
					</div>
				</div> <!-- end captainatirador class -->
			
				<div class="smvilla is_barangay_content">
					<h3 class="heading">S.M. <span class="log">VILLA</span></h3>
					<p class="date_range">as of 2008</p>
					<div id="accordion">
						<h3>Barangay Profile</h3>
						<div>
							<table>
								<tr>
									<td>Barangay:</td>
									<td>S. M. VILLA</td>
								</tr>
								<tr>
									<td>Municipality:</td>
									<td>JANIUAY</td>
								</tr>
								<tr>
									<td>Province:</td>
									<td>ILOILO</td>
								</tr>
								<tr>
									<td>Region:</td>
									<td>6</td>
								</tr>
								<tr>
									<td>Area:</td>
									<td>8.05 Has.</td>
								</tr>
								<tr>
									<td>Population:</td>
									<td>428</td>
								</tr>
								<tr>
									<td>Population Density:</td>
									<td>53 persons/hectare</td>
								</tr>
								<tr>
									<td>Households:</td>
									<td>91</td>
								</tr>
								<tr>
									<td>Barangay IRA:</td>
									<td>Php 505, 746.00</td>
								</tr>
							</table>
						</div>
						<h3>Vision</h3>
						<div>
							<p>S. M. Villa as a peaceful, progressive barangay. Efficient and effective delivery of social services and transparent form of government.</p>
						</div>
						<h3>Mission</h3>
						<div>
							<p>Provide and adopt efficient and effective programs, projects and activities to the Barangay S. M. Villa for the attainment of quality life.</p>	
						</div>
						<h3>Brief History</h3>
						<div>
							<p>Barangay S. M. Villa is a progressive barangay located at the northern part of the poblacion of the Municipality of Janiuay. It was named in honor of the late Congressman Silvestre M. Villa, a venerated son of Janiuay who lived at the place. Late Congressman Silvestre M. Villa is a direct descendant of Don Felipe Belarmino, Gobernadorcillo of the town of Janiuay in 1837, whose family name was changed to "Villa" because of the orderly and beautiful arrangement of houses within his "minoro".</p>
						</div>
					</div>
				</div> <!-- end smvilla class -->
			
			</div> <!-- end main barangay content -->

		</div>
		<div class="grid_3 omega login_area">
			<?php $this->load->view('tools/login_area'); ?>
		</div>
	</div> <!--end content_area-->