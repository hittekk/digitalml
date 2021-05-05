<?php
/* Template Name: Fast Track page Template
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<?php
	if (have_posts()) { the_post();
?>
<?php
        /** TODO:
         * output the fast-track page section-by-section, pulling editable content as needed from custom fields defined in lib/fast-trackpage-data.php
         *
         * example: custom fields such as
         *  section 1/hero content
         *  section 2/business-it content (if any)
         *  section 3/ignite-boxes content (if any)
         *  etc.
         */
?>

		<div class="container-fluid hero" id="section-1">
			<div class="row">
				<div class="module-wrap">
					<div class="module combo-module">
					    <div class="body-wrap">
					        <div class="body clearfix">
						        <div class="icon-wrap">
						            <div id="fasttrack-hero" class="inset-icon" <?php /* [setimagebg image="icon"] */ ?>>&nbsp;</div>
						        </div>

						        <div class="text-wrap">
						            <div class="big-text">Fast Track enables you to rapidly get up and running to develop and deploy repeatable, predictable and rapidly scalable API products.</div>
						        </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="section-2">
			<div class="row">
				<div class="module-wrap half-module-wrap">
					<div class="simple-card-module-wrap sap">
						<div class="module simple-card-module left">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-hero-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-hero-overlay" class="overlay">&nbsp;</span></span>
					        </span>

						    <div class="body-wrap">
						        <div class="body">
							        <div class="title">Strategic Alignment Program</div>
									<div class="text">
										IT and business should work like gears, meeting, meshing and driving progress. Our Strategic Alignment Program shifts IT and business into high gear by enabling your teams to plan, design, build and run world-class API products.
									</div>
						        </div>
						    </div>
						</div>
					</div>

					<div class="sap2">
						<div class="module list-module">
							<div class="body-wrap">
						        <div class="body">
							        <div class="title">The digitalML Strategic Alignment Program</div>
									<div class="text">
										Ensures that business knows what IT is talking about and IT knows what business wants.
									</div>
							        <div class="little-text">
										<ul>
											<li>Translates ideas into real work pipelines.</li>
											<li>Helps you meet critical timescales.</li>
											<li>Develops efficient and transparent workstreams.</li>
											<li>Aligns the right people with the right processes and technology to propel your digital strategy.</li>
										</ul>
							        </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="section-3">
			<div class="row">
				<div class="module-wrap">
					<div class="module how-we-do-it iconlist-module">
						<div class="body-wrap">
							<div class="body clearfix">

								<div class="section-header">How we do it:</div>

								<div class="col-md-4 content-wrap">
									<div class="header"><div class="icon people"></div></div>
									<div class="title">People</div>
									<div class="text">
										We reach across boundaries and break down silos to connect people in strategic partnerships, working toward common goals.
									</div>
								</div>

								<div class="col-md-4 content-wrap">
									<div class="header"><div class="icon processes"></div></div>
									<div class="title">Processes</div>
									<div class="text">
										We identify the ways that entrenched business and IT processes fail to connect, and we find ways to connect them.
									</div>
								</div>

								<div class="col-md-4 content-wrap">
									<div class="header"><div class="icon platforms"></div></div>
									<div class="title">Platforms</div>
									<div class="text">
										We help all your departments understand the benefits of using APIs as connected platforms to scale their efforts across lines of business or international regions.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container" id="section-4">
			<div class="row">
				<div class="module-wrap half-module-wrap">
					<div class="quickwins">
						<div class="module list-module">
							<div class="body-wrap">
						        <div class="body">
							        <div class="title">The digitalML Quick Win Program</div>
									<div class="text">
										Initiates a culture of success by ferreting out existing services and building new operational APIs from Day One.
									</div>
							        <div class="little-text">
										<ul>
											<li>We discover, organize and clearly identify API assets to create a clear view of business needs and existing API products.</li>
											<li>We build repeatable building blocks with Ignite that developers can adapt quickly by adding extensions.</li>
											<li>ignite features automatic code generation, saving developers weeks of code writing. </li>
											<li>We integrate your legacy APIs into the ignite flow, and in doing so... we turn pools of stagnant, archived data into streams of data-in-motion, creating opportunities for insights and end-to-end experiences.</li>
										</ul>
							        </div>
						        </div>
						    </div>
						</div>
					</div>

					<div class="simple-card-module-wrap quickwins2">
						<div class="module simple-card-module right">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-hero-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-hero-overlay" class="overlay">&nbsp;</span></span>
					        </span>

						    <div class="body-wrap">
						        <div class="body">
							        <div class="title">Quick Wins </div>
									<div class="text">
										You already have winning assets and valuable data buried in the mess of wire and maze of code that piled up as your digital presence emerged. But only a few of them are predictable, repeatable and scalable.
									</div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="section-5">
			<div class="row">
				<div class="module-wrap half-module-wrap">
					<div class="simple-card-module-wrap dmlp">
						<div class="module simple-card-module left">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="fastrack-dmlp-overlay-wrap" class="overlay-wrap">&nbsp;<span id="fasttrack-dmlp-overlay" class="overlay">&nbsp;</span></span>
					        </span>

						    <div class="body-wrap">
						        <div class="body">
							        <div class="title">Digital Market Leadership Program</div>
									<div class="text">
										Custom Accelerators<br/>
										Enterprise Workshops<br/>
										Success Communications<br/>
										Thought Leadership<br/>
										…to speed your journey to digital
									</div>
						        </div>
						    </div>
						</div>
					</div>

					<div class="dmlp2">
						<div class="module list-module">
							<div class="body-wrap">
						        <div class="body">
									<div class="text">
										Once IT has a clear view of its API product potential, bringing business to the same page accelerates growth in many ways
									</div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php /*
		<div class="container" id="section-6">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-5 module-wrap">
					<div class="module accelerators1 iconlist-module">
						<div class="body-wrap">
							<div class="header"><div class="icon"></div></div>
							<div class="body">
								<div class="title">Accelerator A</div>
								<div class="text">
									Develop a common language so business and IT work transparently toward enterprise priorities and goals.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-offset-1 col-lg-4 module-wrap">
					<div class="module accelerators2 iconlist-module">
						<div class="body-wrap">
							<div class="header"><div class="icon"></div></div>
							<div class="body">
								<div class="title">Accelerator B</div>
								<div class="text">
									Build out a portfolio of predictable, repeatable, scalable APIs that align to your digital strategy.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-offset-1 col-lg-5 module-wrap">
					<div class="module accelerators3 iconlist-module">
						<div class="body-wrap">
							<div class="header"><div class="icon"></div></div>
							<div class="body">
								<div class="title">Accelerator C</div>
								<div class="text">
									Build support for APIs that reach across the business, connecting silos across divisions and geographies.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-offset-1 col-lg-4 module-wrap">
					<div class="module accelerators4 iconlist-module">
						<div class="body-wrap">
							<div class="header"><div class="icon"></div></div>
							<div class="body">
								<div class="title">Accelerator D</div>
								<div class="text">
									Rapidly on-board new teams and scale API products to create seamless, end-to-end customer experiences.
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container" id="section-7">
			<div class="row">
				<div class="module-wrap">
					<div class="module workshop list-module">
						<div class="section-header">Enterprise Workshop</div>

						<div class="big-text">
							We bring your people together. Our pilot workshops get your key players moving fast with hands-on experience.
						</div>

						<div class="body-wrap">
					        <div class="body">
						        <div class="little-text">
							        <div class="leader-text">
								        Planning for Digital Products and API Products (3 day workshop)
                                    </div>
							        <ul>
								        <li>Using Ignite Business+ to Plan and Deliver Digital Solutions</li>
								        <li>Using Ignite Business+ to Build Metrics & Monitor the API Product Portfolio</li>
								        <li>API Product Management for business users</li>
									</ul>
						        </div>

						        <div class="little-text">
							        <div class="leader-text">
								        Planning for Digital Products and API Products (3 day workshop)

                                    </div>
							        <ul>
								        <li>Using Ignite Accelerators to Design Great APIs</li>
								        <li>API Change Management</li>
								        <li>Deploying Complete APIs – Services & Microservices</li>
									</ul>
						        </div>

						        <div class="little-text">
							        <div class="leader-text">
								        Data Model Workshop (3 or 5 day workshop)
                                    </div>
							        <ul>
								        <li>Modeling Data for API Resources with Ignite Organizer</li>
								        <li>Data Model Change Management</li>
									</ul>
						        </div>

						        <div class="little-text">
							        <div class="leader-text">
								        Integrating Ignite as Part of a Digital Technology Platform \u2028(Scoped for your requirements)
                                    </div>
							        <ul>
								        <li>Integrating with Work Management Tools (IBM Rational Team Concert CCM, JIRA)</li>
								        <li>Integrating with Development Tools (IBM Rational Team Concert SCM, Perforce, GitHub)</li>
								        <li>Integrating with API Management Platforms (IBM API Connect, Apigee Edge, WSO2)</li>
								        <li>Integrating with Runtime Monitoring Tools (Splunk, AppDynamics)</li>
									</ul>
						        </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="section-8">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-5 module-wrap">
					<div class="module measuringwins list-module">
						<div class="body-wrap">
					        <div class="body">
						        <div class="title">Measuring in Wins</div>
								<div class="text">
									<p>They’ll come fast.  Once core API building blocks and configurations are designed, your IT department can create new API products as fast a business can describe the need.</p>

									<p>You’ll measure success in time and money—real, tangible metrics. Resolving APIs after an acquisition, a process that without us might take three years, can be accomplished in six weeks.  An overhaul to streamline policies could cost 10% less.  Launching into new geographies happens faster and smoother than ever before.</p>
								</div>
					        </div>
					    </div>
					</div>
				</div>

				<div class="col-lg-5 module-wrap">
					<div class="module measuringwins2 list-module">
						<div class="body-wrap">
					        <div class="body">
						        <div class="title">Generating excitement</div>
								<div class="text">
									A key element of our service is teaching IT and business how to communicate successes and best practices internally.  By calling attention to successful APIs and why they worked, you will connect the innovators in business units across the enterprise and generate an air of excitement about a new way of working together.
								</div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
*/ ?>

<?php } else { ?>
		<div class="container">
			<div class="row">
				<h1>Page Not Found</h1>
		        <p>That's odd.</p>
			</div>
		</div>
<?php } ?>


<?php get_footer(); ?>

