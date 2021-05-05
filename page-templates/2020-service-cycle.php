<?php
/* Template Name: Service Cycle 2020
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('2020');
?>
	<main class="main layout2020">
			<div class="container">
				<div class="grid-center">
					<div class="col-12_md-10_lg-9">
						<h1>Extended API and Service Lifecycle</h1>
						
						<h3>Scale your APIs fast and safe</h3>
						
						<p>It’s clear large organizations need APIs and Services in order to launch innovative products, enter new digital ecosystems, comply with regulation, and build successful partnerships. But by focusing on only the developer-centric parts of the API and Service lifecycle, it’s hard to move fast, align to business requirements, and involve your whole organization in the process.</p>
						
						<a href="https://calendly.com/digitalml/ignite-introduction?month=2020-09" class="button">Book a demo</a>
					</div>
				</div>
			</div>

			
			<div class="grid-center hero2020">
				<div class="col-12_md-10_lg-9">
					<img src="<?= get_template_directory_uri() ?>/images/2020refresh/digitalML_ignite_Service-LifecycleHero.svg">
				</div>
			</div>
	
	
			<div class="container">
				<div class="grid-center">
					<div class="col-12_md-10_lg-9">
						<p>
							The <a href="/ignite/">ignite Platform</a> allows your organization to automate and deskill parts of the API and Service lifecycle, creating critical APIs at scale in a consistent, safe, and faster way with baked-in governance and standards. ignite helps digital leaders build out their <a href="/ignite-holistic-catalog/">holistic catalog</a> of thousands of API building blocks representing their business and IT capabilities, allowing them to respond to transforming business models and digital opportunities, fast and safely.
						</p>
					</div>
				</div>
			</div>
	
	
	
				
			
			<div class="bluedots2020">
			<div class="container">

				<div class="col-12_md-10_lg-9">
					<h2>Learn how an extended API lifecycle helps large enterprises create the thousands of APIs and Services they need for faster, safer innovation and quicker, flexible modernization</h2>
				
					<p>
						Leaders are implementing an extended lifecycle that emphasizes the plan, design, and build stages in order to deliver consistent, reusable, and compliant APIs and Services at scale.
					</p>	
					
					<a href="https://go.digitalml.com/ignite_extended_lifecycle" class="button border-only">Download now</a>
				</div>
			
			</div>
			</div>
			
			
			
			
			
			
			<div class="container">
					<div class="col-12_md-10_lg-9">
						
						
						
						<div class="tab_container">
						
						<a class="back-next" id="back_arrow" href="javascript:showNext('prev')" style="transform: rotate(180deg);">&#10140;</a>
						
						<div id="tab1_content" class="tab_content showing">
						
							<h3>Extended Lifecycle Benefits</h3>
							
							<p>
							Leaders are implementing ignite to add to their lifecycle the plan, design, and build stages in order to deliver consistent, reusable, and compliant <a href="service-catalog-2020/">APIs and Services</a>. This approach provides large organizations the visibility and business focus on the plan, design, and development and ownership of APIs, while automates manual development tasks like governance, and repetitive, error-prone development activities.
							</p>

						
						</div>
						
						
						
						
						<div id="tab2_content" class="tab_content">
						
							<h3>Extended Lifecycle Benefits</h3>
							
							<p>
								ignite’s lifecycle ensures high quality APIs can be designed from scratch or from legacy services, aligned to enterprise standards and combined into consumable products.
							</p>

							
						</div>
						
						
						
						<div id="tab3_content" class="tab_content">
						
							<h3>Extended Lifecycle Benefits</h3>
							
							<p>
								The extended API and Service Lifecycle supports a top-down domain driven design, business capability, and product ownership approach, with a collaborative lifecycle and brings in an expanded audience. This also supports bottom-up development, allowing developers to build APIs in their preferred environment, import and validate against standards, governance, and compliance rules and quickly make adjustments to generate approved artifacts.
							</p>
						
							
						</div>
					
					
						<a class="back-next" id="next_arrow" href="javascript:showNext('next')">&#10140;</a>
					
			
						<div id="tab_nav">
							<div id="tab1" class="nav-tab current"><a href="javascript:showMe('tab1');"><i class="fa fa-circle"></i></a></div>
							<div id="tab2" class="nav-tab"><a href="javascript:showMe('tab2');"><i class="fa fa-circle"></i></a></div>
							<div id="tab3" class="nav-tab"><a href="javascript:showMe('tab3');"><i class="fa fa-circle"></i></a></div>
						</div>
			
					</div>

			</div>
			</div> <!-- container  -->
			
			
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
			
	
			
			
			<div class="container">
				<div class="grid-center">
					<div class="col-12_md-10_lg-9">
						<h2>How An Extended API and Service Lifecycle Fits</h2>
					</div>
				</div>
			</div>
			
			
			
			<div class="container">
				<div class="column_container">
				
				
					<div class="left_column">
						<img class="svg" src="<?= get_template_directory_uri() ?>/images/2020refresh/digitalML_ignite_Service-Lifecycle-Fit.svg" >
					</div>
					<div class="right_column">
						<ul>
							<li>Integrates with upstream and downstream existing architecture for a faster time to market and the realization of a modern agile process that drives CI/CD, including a bi-directional integration for pipeline and runtime deployment with end-to-end status and metrics.</li>

							<li>Deskills parts of the service lifecycle in support of hard to find developer talent</li>

							<li>Enables developers so they can focus on business and application logic rather than hand-crafting APIs and Services</li>
							
							<li>Supports top-down API and Service design and deployment supporting Domain Driven Design and Legacy Conversion</li>
							
							<li>Supports bottom-up or pass through compliance and registration/deployment</li>
							
							<li>Aligns APIs and Services to your maturity model including governance, architecture pattern affinity, policy-based security, and inheritance of common services like logging, monitoring, and auditing</li>
							
							<li>Publishes back into your <a href="ignite-holistic-catalog/">Holistic Catalog of APIs and Services</a> to grow your coverage of discoverable and reusable APIs and Services among your portfolio audience including business roles, executives, and product owners</li>
						</ul>
					</div>
					
					
				</div>
			</div>
			
		
			
			
			
		


			<div class="grey2020">
			<div class="container">

				<div class="col-12_md-10_lg-9">
					<h2>Resources</h2>
				</div>
			
				
				<div class="logos-inner panels three-up">
					<div class="icon-item square-panel">
						<a href="https://go.digitalml.com/API_Lifecycle">
						<img class="svg" src="<?= get_template_directory_uri() ?>/images/2020refresh/Resources Icons/Service Lifecycle/ExtendedLifecycle_WhitePaper.svg" >
						<p style="padding-bottom: 0;">WHITE PAPER: Future-proof, automate and deskill your digital transformation strategy</p>
						<p>How a full and integrated API and Service Lifecycle provides speed and scale</p>
						<div class="learn_more">Learn More <span>&#10132;</span></div>
						</a>
					</div>
					
					<div class="icon-item square-panel">
						<a href="https://www.digitalml.com/api-development-strategies-for-apis-at-scale/">
						<img class="svg" src="<?= get_template_directory_uri() ?>/images/2020refresh/Resources Icons/Service Lifecycle/ExtendedLifecycle_Developement.svg" >
						<p style="padding-bottom: 0;">2 API and Service Development Strategies for Role Enablement and APIs at Scale</p>
						<p>How to support both top down and/or bottom up development</p>
						<div class="learn_more">Learn More <span>&#10132;</span></div>
						</a>
					</div>
					
					<div class="icon-item square-panel" style="background-color: #1976d2;">
						<a href="https://www.digitalml.com/api-lifecycle-recommended-approach/">
						<img class="svg" src="<?= get_template_directory_uri() ?>/images/2020refresh/Resources Icons/Service Lifecycle/ExtendedLifecycle_Benefit.svg" >
						<p style="padding-bottom: 0;">A Recommended Approach for APIs and Services at Scale</p>
						<p>Why the plan, design, and build parts of the lifecycle shouldn't be overlooked </p>
						<div class="learn_more">Learn More <span>&#10132;</span></div>
						</a>
					</div>
					
				</div>
			
			
			
			</div>
			</div>





			
			
			<div class="bluedots2020">
			<div class="container">

				<div class="col-12_md-10_lg-9">
					<h2>Book a digital roadmap consultation with one of our experts</h2>
				
					<a href="https://calendly.com/digitalml/ignite-introduction?month=2020-09" class="button">Book a demo</a>
				</div>
			
				
			</div>
			</div>




	</main>
<?php
get_footer('2020');