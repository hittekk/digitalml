<?php
/* Template Name: Platform page Template
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
         * output the platform page section-by-section, pulling editable content as needed from custom fields defined in lib/platformpage-data.php
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
					<div class="module image-module icon-module">
						<span class="image-wrap parallax" <?php /* [setimagebg] */ ?>>&nbsp; 
							<span id="platform-hero-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-hero-overlay" class="overlay">&nbsp;</span></span>
				        </span>

					    <div class="body-wrap">
					        <div class="body">
						        <div class="text-wrap">
						            <div class="big-text">ignite for the entire API Product Management lifecycle</div>
						        </div>
						        <div class="icon-wrap">
						            <div id="platform-hero-icon" class="inset-icon" <?php /* [setimagebg image="icon"] */ ?>>&nbsp;</div>
						        </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<div class="container card-module" id="section-2">
			<div class="row">
				<div class="module-wrap">
					<div class="card-module-wrap plan">
						<div class="module image-module">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
					        </span>

							<div class="body-wrap">
								<div class="header"><div class="icon"></div></div>
								<div class="body">
									<div class="title">Plan</div>
									<div class="subtitle">(Business+)</div>
									<div class="text">
										Give business and product owners a holistic view of all of your existing and in-flight APIs, and allow business and IT to collaborate and manage the intake and prioritization of new innovative ideas and projects.<br class="hidden-xs hidden-sm"/><br class="hidden-xs hidden-sm"/>
									</div>
									<ul class="bottom-text-wrap">
										<li class="text-item">Business & Service & Stakeholder portfolio view</li>
										<li class="text-item">Search, discover, innovate </li>
										<li class="text-item">Prioritize & collaborate</li>
										<li class="text-item">API Product Management </li>
										<li class="text-item">Expected vs. Actual KPIs</li>
									</ul>
								</div>
							</div>

							<div class="caption-wrap">
								<div class="caption">
									<a href="/ignite-plan" class="btn btn-default"><span class="btn-text">Learn More</span></a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-module-wrap design">
						<div class="module image-module">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
					        </span>

							<div class="body-wrap">
								<div class="header"><div class="icon"></div></div>
								<div class="body">
									<div class="title">Design</div>
									<div class="subtitle">(Analyst+ & Organizer) </div>
									<div class="text">
										Design and expose your portfolio of common microservice building blocks, with consistent resources from data and taxonomy models, standardized API definitions and system of record mapping, and change management with lineage and impact analysis.
									</div>
									<ul class="bottom-text-wrap">
										<li class="text-item">Common microservice building blocks</li>
										<li class="text-item">Consistent resources from data & taxonomy model </li>
										<li class="text-item">Speed with control </li>
										<li class="text-item">Change management, impact analysis & lineage</li>
										<li class="text-item">Import and align existing web services and APIs</li>
										<li class="text-item">Standardized design artifacts ready for development to plug into</li>
									</ul>
								</div>
							</div>

							<div class="caption-wrap">
								<div class="caption">
									<a href="/ignite-design" class="btn btn-default"><span class="btn-text">Learn More</span></a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-module-wrap build">
						<div class="module image-module">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
					        </span>

							<div class="body-wrap">
								<div class="header"><div class="icon"></div></div>
								<div class="body">
									<div class="title">Build</div>
									<div class="subtitle">(Developer+ & Base)</div>
									<div class="text">
										Auto-generate contracts, code, mappings between layers and transaction, and test conditions so developers can easily assemble repeatable, predictable and rapidly scalable API products, then plug specific functionalities into the back-end as needed. This frees up IT minds to focus on business logic, implementation, user experience, back-end connections and all the big-brain thinking that optimizes their skill sets.
									</div>
									<ul class="bottom-text-wrap">
										<li class="text-item">Consistency, reuse, alignment </li>
										<li class="text-item">Contracts – REST, SOAP, Event </li>
										<li class="text-item">Code, test conditions, transformation, documentation</li>
										<li class="text-item">Developers freed up for business logic </li>
									</ul>
								</div>
							</div>

							<div class="caption-wrap">
								<div class="caption">
									<a href="/ignite-build" class="btn btn-default"><span class="btn-text">Learn More</span></a>
								</div>
							</div>
						</div>
					</div>

					<div class="card-module-wrap run">
						<div class="module image-module">
							<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
								<span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
					        </span>

							<div class="body-wrap">
								<div class="header"><div class="icon"></div></div>
								<div class="body">
									<div class="title">Run</div>
									<div class="subtitle">(Connect+) </div>
									<div class="text">
										API Products planned, designed, and built in ignite are ready to be delivered to run, extending consistency, lineage and speed to production and execution. Once in run, ignite provides a window on actual KPIs and ROI, letting the business know how API Products are actually performing in the market and providing accurate investment decisions.<br class="hidden-xs hidden-sm"/><br class="hidden-xs hidden-sm"/>
									</div>
									<ul class="bottom-text-wrap">
										<li class="text-item">Vendor agnostic - will adapt to what you acquire next</li>
										<li class="text-item">Integrate with API management </li>
										<li class="text-item">Integrate with work management</li>
										<li class="text-item">Dev Ops dashboard</li>
										<li class="text-item">ESB integration</li>
										<li class="text-item">SCM integration</li>
									</ul>
								</div>
							</div>

							<div class="caption-wrap">
								<div class="caption">
									<a href="/ignite-run" class="btn btn-default"><span class="btn-text">Learn More</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php } else { ?>
		<div class="container">
			<div class="row">
				<h1>Page Not Found</h1>
		        <p>That's odd.</p>
			</div>
		</div>
<?php } ?>


<?php get_footer(); ?>

