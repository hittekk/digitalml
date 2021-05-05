<?php
/* Template Name: Contact Refresh
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>
	
	<main class="main">
	
		<div class="hero refresh about" style="padding-bottom: 50px;">
			<div class="container">
				<div class="static-content">
					<h1 class="refresh_hero_headline">Contact Us</h1>
					<p>Have a question? Send us a note using the form below and someone from the digitalML team will be in touch soon.</p>
				</div>
				
				<div class="grid-center">
					<div class="col-12">
						<iframe src="https://go.pardot.com/l/296922/2018-09-19/bwxts" width="100%" height="780" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
					</div>
				</div>
			</div>
		</div>
	
		
		<div class="image-decoration-bg-wave">
			<div class="container">
				<div class="static-content">
					<h2 class="refresh_hero_headline" style="padding-top: 0;">Our Offices</h2>
				</div>
				<div class="grid-center-noGutter" style="margin-bottom: 50px;">
					<div class="col-sm-4">
						<!--  /////////////////  REPLACE NYC MAP URL BELOW  -->
						<div class="contact-rollover" onClick="document.getElementById('contact-map').src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0753450362618!2d-73.97267988421433!3d40.76036754259139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4da27094d%3A0xc1fa4e44b4d7395d!2s126+E+56th+St%2C+New+York%2C+NY+10022!5e0!3m2!1sen!2sus!4v1540306900086';">
							<div class="contact-rollover-bg no-mobile"></div>
							<div class="contact-rollover-triangle no-mobile"></div>
							<div class="contact-content">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/nyc.png" width="414" height="355" alt="nyc">
					
								<p>New York, NY</p>
						
								<p>126 East 56th St., Suite 1220
								<br>New York, NY 10022
								<br>+1 415 373 0300
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<!--  /////////////////  REPLACE SF MAP URL BELOW  -->
						<div class="contact-rollover" onClick="document.getElementById('contact-map').src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.8736548280126!2d-122.40630728427202!3d37.79300061888286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a52e9373d%3A0x9315435325540eb4!2s580+California+Street%2C+580+California+St+%231600%2C+San+Francisco%2C+CA+94104!5e0!3m2!1sen!2sus!4v1540307335532';">
							<div class="contact-rollover-bg no-mobile"></div>
							<div class="contact-rollover-triangle no-mobile"></div>
							<div class="contact-content">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/sf.png" width="414" height="355" alt="nyc">
					
								<p>San Francisco</p>
						
								<p>580 California Street,Suite 1600
								<br>San Francisco, CA 94104
								<br>+1 415 373 0300
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<!--  /////////////////  REPLACE UK MAP URL BELOW  -->
						<div class="contact-rollover" onClick="document.getElementById('contact-map').src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.2090579058677!2d-0.762653684024858!3d51.41758622508671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487680a5fbb53759%3A0x9db3df9a7b01e0ed!2sdigitalML!5e0!3m2!1sen!2sus!4v1540307560914';">
							<div class="contact-rollover-bg no-mobile"></div>
							<div class="contact-rollover-triangle no-mobile"></div>
							<div class="contact-content">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/uk.png" width="414" height="355" alt="nyc">
					
								<p>UK</p>
						
								<p>Origin, Western Rd.
								<br>Bracknell RG12 1US, UK
								<br>+44 1344 424257
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid-center-noGutter">
					<div class="col-12 no-mobile">
						<div class="map_holder">
							<!--  /////////////////  REPLACE DEFAULT MAP URL BELOW - WHICHEVER MAP YOU'D LIKE TO LOAD FIRST  -->
							<iframe id="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0753450362618!2d-73.97267988421433!3d40.76036754259139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4da27094d%3A0xc1fa4e44b4d7395d!2s126+E+56th+St%2C+New+York%2C+NY+10022!5e0!3m2!1sen!2sus!4v1540306900086" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="container subscribe-form-holder">
			
				<div class="grid-center-noGutter">
					<div class="col-12_md-10_lg-9">
						<div class="subscribe">
							<div class="subscribe-title">
								<h2 class="mixed-case">Sign up to receive custom content from our API Best Practice Team</h2>
							</div>
							<div class="subscribe-form">
								<div class="subscribe-form-inner">
									<strong>We'll help you develop your API strategy and deliver on initiatives</strong>
									<div class="subscribe-frame js-subscribe-frame">
										<iframe src="https://go.pardot.com/l/296922/2018-08-27/btrq6" width="100%" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			
		</div>	
				
				

			
	

	</main>


<?php
get_footer('home');