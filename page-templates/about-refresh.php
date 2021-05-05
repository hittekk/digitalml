<?php
/* Template Name: About Refresh
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>
	
	<main class="main homepage-refresh">
	
		<div class="hero refresh about">
			<div class="container">
				<div class="static-content static-wider">
					<h1 class="refresh_hero_headline">About Us</h1>
					<p><p>Our vision is unique in the market. It is designed to help large enterprises turn their complex IT legacies around to become as nimble as the Amazons of the world.</p>
				</div>
		<div class="logos">
			<div class="grid-center">
				<div class="col-12_md-10_lg-11">
					<div class="container">
						<div class="logos-inner">

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img01.png" alt="logo">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img02.png" alt="logo">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img03.png" alt="logo">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img04.png" alt="logo">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img05.png" alt="logo">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/img06.png" alt="logo">
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
				<div class="grid-center">
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() ?>/images/about_us/refresh_aboutUs_01.png" alt="digitalML - About Us">
					</div>
					<div class="col-md-6 refresh-about-intro">
						<p>We realize that successful implementation of this vision takes time, especially if the measure of success goes beyond counting the number of users or services, to delivering business transformation that provides competitive advantage. It involves a blend of tried-and-true technology (our platform has gone through several iterations over several years), long-term customer commitment, industry-specific solutions, and expertise based on experience.</p>

						<p>We believe that our customers require a long term partner on this journey, with a funding model and structure that supports this approach. Our company is privately held, profitable, stable, and growth is managed at a sustainable level. This ensures our priorities are aligned to the delivery of customer success over the long term.</p>
					</div>
					</div>
				</div>
			</div>
		

		
		<div class="container bio-row">
			<div class="grid-center-noGutter">
				<div class="col-12">
					
					<div class="static-content static-wider" style="padding-bottom: 50px;">
						<h2>Leadership Team</h2>
					</div>
				
					<div class="row refresh-bios">
						<div class="col-md-1"></div>
						
						<div class="col-md-2" style="cursor: pointer;" onClick="document.getElementById('jeremy_bio').style.display='block';">
							<div class="show_rollover">
								<img src="<?= get_template_directory_uri() ?>/images/headshots/jeremy@2x.png" alt="Jeremy Sindall">
								<div class="name-and-title">
									<strong>Jeremy Sindall</strong>
									CEO
								</div>
							</div>
						</div>
						<div class="col-md-2" style="cursor: pointer;" onClick="document.getElementById('john_bio').style.display='block';">
							<div class="show_rollover">
								<img src="<?= get_template_directory_uri() ?>/images/headshots/john@2x.png" alt="John Bogard">
								<div class="name-and-title">
									<strong>John Bogard</strong>
									VP Sales
								</div>
							</div>
						</div>
						<div class="col-md-2" style="cursor: pointer;" onClick="document.getElementById('brian_bio').style.display='block';">
							<div class="show_rollover">
								<img src="https://www.digitalml.com/wp-content/uploads/2020/10/Pierre-Jacobs-Headshot.png" alt="Pierre Jacobs">
								<div class="name-and-title">
									<strong>Pierre Jacobs</strong>
									Engineering Director 
								</div>
							</div>
						</div>
						<div class="col-md-2" style="cursor: pointer;" onClick="document.getElementById('kelly_bio').style.display='block';">
							<div class="show_rollover">
								<img src="<?= get_template_directory_uri() ?>/images/headshots/kelly@2x.png" alt="Kelly Maltman">
								<div class="name-and-title">
									<strong>Kelly Maltman</strong>
									Head of Marketing
								</div>
							</div>
						</div>
						
						<div class="col-md-2" style="cursor: pointer;" onClick="document.getElementById('dick_bio').style.display='block';">
							<div class="show_rollover">
								<img src="<?= get_template_directory_uri() ?>/images/headshots/dick@2x.png" alt="Dick Brown">
								<div class="name-and-title">
									<strong>Dick Brown</strong>
									Director of Customer Success
								</div>
							</div>
						</div>
						
						<div class="col-md-1"></div>
							
					</div>

					
				</div>
			</div>
			 <div class="clearfix" style="height: 50px;"></div>
		</div>
	
			
		<div class="bio-container" id="jeremy_bio">
			<a class="bio-close-x" href="javascript:void(0);" onClick="this.parentNode.style.display='none';">x</a>
			<div class="bio-scroller" data-simplebar>
				<div class="container">
				<div class="col-sm-12 col-md-4">
					<img src="<?= get_template_directory_uri() ?>/images/headshots/jeremy.png" width="320" height="397" alt="Jeremy Sindall">
					<div class="bio-buttons">
						<a href="https://twitter.com/godigitalML" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/twitter.png" width="16" height="14" alt="twitter"></a>
						<a href="https://www.linkedin.com/in/jeremy-sindall-324211/" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/linkedIn.png" width="15" height="15" alt="linkedIn"></a>
						<a href="mailto:jsindall@digitalml.com" class="button decor">Email</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="name-and-title">
						CEO
						<strong>Jeremy Sindall</strong>
					</div>
		
					<div class="bio-copy">
						Jeremy founded digitalML in June 2000. At this time the challenge was to build a new type of post .com era enterprise software company by throwing out the old playbook and focusing on the needs of the largest enterprises first. Under his leadership digitalML have successfully built up a customer base of the largest enterprises in the world all sharing the need to become successful digital enterprises through leveraging a portfolio of business led APIs and Services. This has been achieved while achieving impressive organic growth and by reinvesting profits into R&amp;D. During this time the company has also expanded from its UK base into Germany and North America. Prior to founding digitalML Jeremy Sindall was VP EMEA for Interleaf where he was a member of the Senior Management team, which led a three-year turnaround of the business from a market cap of $13M to a trade sale to BroadVision (NASDAQ:BVSN) for $870M. Prior to Interleaf, Jeremy served 12 years at Xerox at a time where their PARC research labs were creating many of the IT foundations that we all rely on today. At the culmination of Jeremy’s time at Xerox he ran Xerox’s software division, XSoft for Southern Europe based in Paris.</p>
					</div>
				</div>
			</div>
			</div> <!-- simplebar -->
		</div>	
		
		<div class="bio-container" id="john_bio">
			<a class="bio-close-x" href="javascript:void(0);" onClick="this.parentNode.style.display='none';">x</a>
			<div class="bio-scroller" data-simplebar>
				<div class="container">
				<div class="col-sm-12 col-md-4">
					<img src="<?= get_template_directory_uri() ?>/images/headshots/john.png" width="320" height="397" alt="John Bogard">
					<div class="bio-buttons">
						<a href="https://twitter.com/johnbogard" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/twitter.png" width="16" height="14" alt="twitter"></a>
						<a href="https://www.linkedin.com/in/johnbogard/" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/linkedIn.png" width="15" height="15" alt="linkedIn"></a>
						<a href="mailto:jbogard@digitalml.com" class="button decor">Email</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="name-and-title">
						VP Sales
						<strong>John Bogard</strong>
					</div>
		
					<div class="bio-copy">
						John has a background in sales, business development, and marketing in technology and business services with experience generating revenue and growth in early stage companies as well as larger public corporations. He is responsible for driving all sales efforts and extending the ignite Service Design Platform within the marketplace. He joined digitalML in 2006 as the company launched in the US. Prior to joining digitalML John was Vice President of Sales at MCC:o2, a global venture accelerator for early stage technology ventures, responsible for launching new products and producing repeatable and scalable revenue for client companies from the US and Europe. Previously, John was in enterprise sales with salesforce.com, the worldwide leader in on-demand customer relationship management (CRM) services; and was responsible for a sales and business development team at Apex Systems, Inc. John earned his BA in Political Science and Business Administration from the University of Calgary.</p>
					</div>
				</div>
			</div>
			</div> <!-- simplebar -->
		</div>	
		
		<div class="bio-container" id="brian_bio">
			<a class="bio-close-x" href="javascript:void(0);" onClick="this.parentNode.style.display='none';">x</a>
			<div class="bio-scroller" data-simplebar>
				<div class="container">
				<div class="col-sm-12 col-md-4">
					<img src="https://www.digitalml.com/wp-content/uploads/2020/10/Pierre-Jacobs-Headshot.png" width="320" height="397" alt="Mark Whitehead">
					<div class="bio-buttons">
						<a href="https://twitter.com/godigitalML" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/twitter.png" width="16" height="14" alt="twitter"></a>
						<a href="https://www.linkedin.com/in/i-pierre-jacobs/" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/linkedIn.png" width="15" height="15" alt="linkedIn"></a>
						<a href="mailto:pjacobs@digitalml.com" class="button decor">Email</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="name-and-title">
						Engineering Director
						<strong>Pierre Jacobs</strong>
					</div>
		
					<div class="bio-copy">
Pierre is Director of Engineering at digitalML and is responsible for all delivery aspects of digitalML’s flagship ignite Service Design Platform. Pierre brings extensive experience in helping enterprises accelerate digital transformation and adoption. Prior to joining digitalML Pierre was Engineering Director at Mastercard where he was responsible for real-time payment gateways, a critical enabler in moving nations’ economies into the twenty-first century. Before that Pierre’s considerable consulting experience in digital enablement led to successful collaborations with Google to create best-in-class automotive intelligence solutions as well as partnering with Capgemini, BT, Fujitsu and Aspire to revolutionise digital communication within HM Revenue and Customs. Pierre holds formal qualifications in both Software Engineering and Nutritional Medicine. 				</div>
				</div>
			</div>
			</div> <!-- simplebar -->
		</div>	
		
		<div class="bio-container" id="kelly_bio">
			<a class="bio-close-x" href="javascript:void(0);" onClick="this.parentNode.style.display='none';">x</a>
			<div class="bio-scroller" data-simplebar>
				<div class="container">
				<div class="col-sm-12 col-md-4">
					<img src="<?= get_template_directory_uri() ?>/images/headshots/kelly.png" width="320" height="397" alt="Kelly Maltman">
					<div class="bio-buttons">
						<a href="https://twitter.com/godigitalML" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/twitter.png" width="16" height="14" alt="twitter"></a>
						<a href="https://www.linkedin.com/in/kellymaltman/" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/linkedIn.png" width="15" height="15" alt="linkedIn"></a>
						<a href="mailto:kmaltman@digitalml.com" class="button decor">Email</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="name-and-title">
						Head of Marketing
						<strong>Kelly Maltman</strong>
					</div>
		
					<div class="bio-copy">
						Kelly joined digitalML in 2016 to help launch digitalML's marketing initiatives. She's responsible for the company's overall brand positioning and communications, but also works closely to support customer's own internal marketing needs, helping them navigate the space, evangelize their API initiatives and craft stories around their successes.</p>
					</div>
				</div>
			</div>
			</div> <!-- simplebar -->
		</div>		
		
		
		
		<div class="bio-container" id="dick_bio">
			<a class="bio-close-x" href="javascript:void(0);" onClick="this.parentNode.style.display='none';">x</a>
			<div class="bio-scroller" data-simplebar>
				<div class="container">
				<div class="col-sm-12 col-md-4">
					<img src="<?= get_template_directory_uri() ?>/images/headshots/dick.png" width="320" height="397" alt="Dick Brown">
					<div class="bio-buttons">
						<a href="https://www.linkedin.com/in/richard2/" target="_blank"><img class="social" src="<?= get_template_directory_uri() ?>/dist/images/icons/linkedIn.png" width="15" height="15" alt="linkedIn"></a>
						<a href="mailto:dbrown@digitalml.com" class="button decor">Email</a>
					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="name-and-title">
						Director of Customer Success
						<strong>Dick Brown</strong>
					</div>
		
					<div class="bio-copy">
						Dick Brown is Director of Customer Success at digitalML, and heads up our customer delivery, support, and solutions teams, to ensure ignite customers achieve their strategic goals. His experience spans program management, software consultancy, sales and marketing across multiple industries. Dick offers a record of success developing and implementing complex enterprise software solutions across international markets, including the UK, Europe, Australia, and emerging markets in Africa and South America.
					</div>
				</div>
			</div>
			</div> <!-- simplebar -->
		</div>		
			


	
		

	</main>


<?php
get_footer('home');