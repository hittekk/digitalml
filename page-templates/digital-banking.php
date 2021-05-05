<?php
/* Template Name: Digital Banking
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('2020-subpage');
?>
	
	<main class="main banking">
	
		<div class="hero banking refresh">
		
		
			<div class="container">
				<div class="static-content static-wider">
					<h1>
						<span>solutions for</span>
						Banking & Payments
					</h1>
				</div>
			</div>
	
		
		</div>
		
		
		
		<div id="banking_intro">
				
			<div class="grid-center">

						
						
				<div class="col-12_md-10_lg-11">
					<div class="container">
					
						<div style="height: 100px;"></div>
						
						<h1><span>ignite</span> helps large Banks and Payment Processors transform into digital businesses to become as nimble as digitally native startups, without having to start from scratch.</h1>
						
						<picture>
						  <source media="(min-width: 415px)" srcset="<?= get_template_directory_uri() ?>/images/subhero_img3-wide@2x.png">
						  <source srcset="<?= get_template_directory_uri() ?>/images/subhero_img3-tall@3x.png">
						  <img src="<?= get_template_directory_uri() ?>/images/subhero_img3-wide@2x.png" width="1537" height="601" alt="Complex Diagram">
						</picture>
							
						<div class="column_container">
						
							<div class="left_column">
							<p>Digital and API First starts with a portfolio of abstracted and bundle-ready business and technical functions, designed for how your business needs to be and clearly understood by developers, product owners, and business.<p>
								
								<p> ignite accelerates the maturity of an API strategy and fills a gap in your digital platform with: 
								</p>
							<p> 1. Holistic and abstracted API/Service Catalog </p>
							<p> 2. Plan, Design, Build lifecycle with baked in governance </p>
							<p> 3. A consistent way to deliver APIs/Services at scale </p>
							<p> No other platform replaces manual processes, becomes a force multiplier for hard to find talent, and increases value of existing solutions like CI/CD pipelines and gateways, while providing future flexibility. 
								
								</p>
								</p>
							</div>
							
							<div class="right_column">
								<div class='embed-container'>
									<iframe src="https://player.vimeo.com/video/359336399?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
								</div>					
							</div>
							

						</div>					
					</div>
				</div>
					
					
			</div>

				
		</div>
		
		
		
		
		<div class="banking-tabs">
			<h1 style="text-align: center;padding: 0 3em;">ignite delivers IT solutions for banking business needs</h1>
				
			<div id="tab_nav">
				<div id="tab1" class="nav-tab current"><a href="javascript:showMe('tab1');"><i class="fas fa-network-wired"></i> ignite for IT Modernization</a></div>
				<div id="tab2" class="nav-tab"><a href="javascript:showMe('tab2');"><i class="fas fa-tachometer-alt"></i> ignite for Digital Enablement</a></div>
				<div id="tab3" class="nav-tab"><a href="javascript:showMe('tab3');"><i class="fas fa-money-bill-alt"></i> ignite for Regulation and Compliance</a></div>
			</div>
				
			<div class="grid-center">

						
						
				<div class="col-12_md-10_lg-11">
					<div class="container">
						
						<a class="back-next" id="back_arrow" href="javascript:showNext('prev')" style="transform: rotate(180deg);">&#10140;</a>
						
						<div id="tab1_content" class="tab_content showing">
						
							<h5>Bank IT Modernization in Months not Years Without Adding Tech Debt</h5>
							
							
							<p>
							When it’s time to replace core banking systems, update runtime platforms and transition monolithic applications to micro or answer to open banking security constraints, ignite’s holistic catalog and lifecycle makes it safer, faster and cheaper.  ignite let’s you build a layer of microservices representing your business functions that are managed as abstracted designs and organized as reusable, compliant, building blocks. These can be easily combined to apply Banking business logic to a standard backend core banking platform. Modularizing your business logic makes it easier to move to the cloud and replace your old monolithic systems in a properly controlled way. As the designs are code and platform agnostic your new IT landscape is free of tech debt and remains future proof.
							</p>

						
						</div>
						
						
						
						
						<div id="tab2_content" class="tab_content">
						
							<h5>Banking Products and Services Made Bundle Ready</h5>
							
							
							<p>
								The next stage of digital enablement (and PSD2, open banking, fintech frenimization) is being able to turn your products and services into bundle-ready products. ignite provides a key part of the infrastructure that supports unlocking existing functionality and digitizing your products and services, while speeding up and simplifying the process. Launch new innovations like branded and flexible cards, money transfer, buy now pay later, know your customer… in a way that’s fit for a traditional bank but fast like a start-up.
							</p>

							
						</div>
						
						
						
						<div id="tab3_content" class="tab_content">
						
							<h5>Answer Banking Regulator Request in Hours, Saving Millions</h5>
							
							<p>
								Regulators now require a Bank to show where your data is, who is consuming the services and APIs, who owns the services and data, what the impact of regulator scenarios are, and how you are supporting legal requirement like PSD2 and GDPR. By importing your APIs, services, data models, mappings, taxonomies into a holistic and abstracted catalog; mapping them to business capabilities (e.g. BIAN) and baking your governance and standards into the plan, design and build process, ignite ensures everything that goes into production is compliant and aligned. ignite also provides easy regulator friendly reporting to support rapid response times to regulators.
							</p>
						
							
						</div>
					
					
						<a class="back-next" id="next_arrow" href="javascript:showNext('next')">&#10140;</a>
			</div>

				</div>
			</div>
		</div>
		
		
		
		<script language="javascript">
		
			function showMe(whichTab) {
				document.getElementById("tab1").classList.remove("current");
				document.getElementById("tab2").classList.remove("current");
				document.getElementById("tab3").classList.remove("current");
				
				document.getElementById(whichTab).classList.add("current");
				
				document.getElementById("tab1_content").classList.remove("showing");
				document.getElementById("tab2_content").classList.remove("showing");
				document.getElementById("tab3_content").classList.remove("showing");
							
				document.getElementById(whichTab+"_content").classList.add("showing");
				
			}
			
			currentTab = 1;
			
			function showNext(nextOrPrev) {
				if (nextOrPrev=="next") {
					if (currentTab<3) {
						currentTab++;
					} else {
						currentTab = 1;
					}
				} else {
					if (currentTab>1) {
						currentTab--;
					} else {
						currentTab = 3;
					}
				
				}
				
				showMe("tab"+currentTab);
			
			}
		</script>
		
		

		
		
		<div class="fintech">
			<h1 style="text-align: center;">Fintech Frenemization</h1>
				
				
			<div class="grid-center">

						
						
				<div class="col-12_md-10_lg-11">
					<div class="container">
						
						
						<div class="logos-inner">

							<div class="icon-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/banking_features_icon-simplify@3x.png" alt="Simplify the process">
								<h5>Simplify the process</h5>
								<p>through which your customers consume products and services.</p>
							</div>
							
							
							
							
							<div class="icon-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/banking_features_icon-flex@3x.png" alt="Flexible and Seamless">
								<h5>Flexible and Seamless</h5>
								<p>configuration of assets to help retain and future-proof your business while also creating new partnership opportunities.</p>
							</div>
							
							
							
							

							<div class="icon-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/banking_features_icon-regional@3x.png" alt="Regional Responsiveness & Innovation">
								<h5>Regional Responsiveness & Innovation</h5>
								<p>Reusable building blocks allow you to launch new innovations fast, wherever you want them .</p>
							</div>

							
							
							

							<div class="icon-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/icons/banking_features_icon-fast@3x.png" alt="Fast">
								<h5>Fast</h5>
								<p>Go faster without creating a new layer of technical debt.</p>
							</div>

						
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
					
					
			</div>

				
		</div>
		
		
		
		
		
		

		<div class="logos  digital-banking">
			<h1 style="text-align: center; padding: 0 3em;">Used by the world’s leading financial service institutions</h1>
				
				
			<div class="grid-center">

						
						
				<div class="col-12_md-10_lg-11">
					<div class="container">
						
						
						<div class="logos-inner">

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_citi@3x.png" alt="Citi">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_aci@3x.png" alt="ACI Universal Payments">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_mufg@3x.png" alt="Mitsubishi UFJ Financial Group">
							</div>
							
							
							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_usbank@3x.png" alt="US Bank">
							</div>

							<div class="logos-item">
								<img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_nedbank@3x.png" alt="Nedbank">
							</div>
							
						
						</div>
					</div>
				</div>
					
					
			</div>
			
			<a href="https://www.digitalml.com/contact/" class="button" style="max-width: 10em;margin: 0 auto;">Learn More</a>
				
		</div>
	
	
			
	
	
		

	</main>


<?php
get_footer('industry-solutions');