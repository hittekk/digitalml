<?php
/* Template Name: Homepage Template
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>
	<main class="main">
		<div class="hero" style="background-image: url(<?= get_template_directory_uri() ?>/dist/images/hero/img02.jpg);">
			<div class="container">
				<div class="grid-center">
					<div class="col-12_md-10_lg-9">
						<div class="hero-inner">
							<h1>ignite Platform</h1>
							<p>Build and manage your <a href="https://blog.digitalml.com/#Abstraction_layer">abstraction layer</a> of <a href="https://blog.digitalml.com/#Digitized_business_functions">digitized business</a> functions</p>
						</div>
					</div>
				</div>
			</div>
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
		<div class="image-decoration-bg">
			<div class="container">
				<div class="grid-center-noGutter">
					<div class="col-12_md-10_lg-9">
						<div class="dual-box tablet-preview-wide">
							<div class="dual-box-inner">
								<div class="dual-box-descr">
									<div class="dual-box-content">
										<strong>Manage your abstraction</strong>
										<h2>Holistic Service Catalog</h2>
										<p>Gain a holistic service view to both Business and Service Owners and consuming stakeholders providing visibility into service availability, effectively increasing service re-use, decreasing costs, and limiting non-standard implementations.</p>
										<a href="#" class="button decor">Learn more</a>
									</div>
								</div>
								<div class="dual-box-preview">
									<div class="dual-box-img">
										<img src="<?= get_template_directory_uri() ?>/dist/images/dual-box/img01.png" alt="pic">
									</div>
								</div>
							</div>
						</div>
						<div class="dual-box tablet-preview-sm reverse centered-picture">
							<div class="dual-box-inner">
								<div class="dual-box-descr">
									<div class="dual-box-content">
										<strong>Improve your management</strong>
										<h2>Full Lifecycle Management</h2>
										<p>Manage all your APIs and Services through the full lifecycle and show how your APIs and services are enabling your transformation to digitized business functions. ignite has simplified governance processes and best of breed design and artifact generation capabilities that drive your CI/CD with quality code, interface contract and configuration.</p>
										<a href="#" class="button decor">Learn more</a>
									</div>
								</div>
								<div class="dual-box-preview">
									<div class="dual-box-img">
										<img src="<?= get_template_directory_uri() ?>/dist/images/dual-box/img05.png" alt="pic">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="grid-center-noGutter">
				<div class="col-12_md-10_lg-9">
					<div class="dual-box decor-box integration-section">
						<div class="dual-box-inner">
							<div class="dual-box-descr">
								<div class="dual-box-content">
									<strong>Improve your management</strong>
									<h2>Pre-Built Integrations</h2>
									<p>Move to a true intelligent enterprise with collaboration through platforms that can tie the API & service lifecycle together seamlessly and with more automation.</p>
									<a href="#" class="button decor">Learn more</a>
								</div>
							</div>
							<div class="dual-box-preview">
								<div class="dual-box-img">
									<img src="<?= get_template_directory_uri() ?>/dist/images/dual-box/img06.png" alt="pic">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="image-decoration-bg image-decoration-bg-alternative">
			<div class="container">
				<div class="grid-center-noGutter">
					<div class="col-12_md-10_lg-9">
						<div class="static-content">
							<strong>Improve your management</strong>
							<h2>Tools and Content</h2>
							<p>Get up and running quickly with tools and content created through our best practice experience.</p>
							<a href="#" class="button decor">Learn more</a>
						</div>
						<div class="report-card ">
							<div class="report-card-content">
								<div class="report-card-inner">
					            			
					                        <span class="report-card-pic">
					                            <img src="<?= get_template_directory_uri() ?>/dist/images/card-logo.png" alt="pic">
					                        </span>
									<h3>digitalML cited in Forrester's API Design and Documentation Report</h3>
									<blockquote>One product is differentiated enough to be worthy of special note: digitalML's ignite API Product Management Platform takes an expansive view of API design and documentation, providing the broadest set of features for business and technology collaboration around a core of design and documentation for APIs and API Products."</blockquote>

								</div>
							</div>
							<div class="report-card-preview" style="background-image: url(<?= get_template_directory_uri() ?>/dist/images/report-card-bg.png)">
								<a href="#" class="button decor">Download the Report</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container pre-decor-section">
			<div class="grid-center-noGutter">
				<div class="col-12_md-10_lg-9">
					<div class="reviews-section">
						<h2>Gartner Peer Insights – the Real Voices of Our Enterprise Customers</h2>

						<div class="reviews-section-rating">
							<div class="reviews-rating">
								<div class="reviews-rating-slider js-slider">

									<div class="reviews-rating-item">
										<div class="rating-content">
											<h3>A partner, not merely a vendor, for your API journey</h3>
											<strong>AVP Enterprise Architecture Services in the Finance Industry</strong>
											<p>The relationship with digitalML has been excellent from Day 0 - even while there were a couple of
												failed attempts at API Management in our organization. They were extremely patient, always willing
												to listen to our needs, very responsive to communicatio -</p>
										</div>
										<div class="rating-actions">
											<div class="rating-info">
												<span class="rating-info-text">Rating <span>(4.5)</span>:</span>
				            							<span class="rating-info-img">
				            								<span style="width: 96%;"></span>
				            							</span>
											</div>
											<a href="#" class="rating-link">Read Full Review</a>
										</div>
									</div>

									<div class="reviews-rating-item">
										<div class="rating-content">
											<h3>A partner, not merely a vendor, for your API journey</h3>
											<strong>AVP Enterprise Architecture Services in the Finance Industry</strong>
											<p>The relationship with digitalML has been excellent from Day 0 - even while there were a couple of
												failed attempts at API Management in our organization. They were extremely patient, always willing
												to listen to our needs, very responsive to communicatio -</p>
										</div>
										<div class="rating-actions">
											<div class="rating-info">
												<span class="rating-info-text">Rating <span>(4.5)</span>:</span>
				            							<span class="rating-info-img">
				            								<span style="width: 96%;"></span>
				            							</span>
											</div>
											<a href="#" class="rating-link">Read Full Review</a>
										</div>
									</div>

									<div class="reviews-rating-item">
										<div class="rating-content">
											<h3>A partner, not merely a vendor, for your API journey</h3>
											<strong>AVP Enterprise Architecture Services in the Finance Industry</strong>
											<p>The relationship with digitalML has been excellent from Day 0 - even while there were a couple of
												failed attempts at API Management in our organization. They were extremely patient, always willing
												to listen to our needs, very responsive to communicatio -</p>
										</div>
										<div class="rating-actions">
											<div class="rating-info">
												<span class="rating-info-text">Rating <span>(4.5)</span>:</span>
				            							<span class="rating-info-img">
				            								<span style="width: 96%;"></span>
				            							</span>
											</div>
											<a href="#" class="rating-link">Read Full Review</a>
										</div>
									</div>

									<div class="reviews-rating-item">
										<div class="rating-content">
											<h3>A partner, not merely a vendor, for your API journey</h3>
											<strong>AVP Enterprise Architecture Services in the Finance Industry</strong>
											<p>The relationship with digitalML has been excellent from Day 0 - even while there were a couple of
												failed attempts at API Management in our organization. They were extremely patient, always willing
												to listen to our needs, very responsive to communicatio -</p>
										</div>
										<div class="rating-actions">
											<div class="rating-info">
												<span class="rating-info-text">Rating <span>(4.5)</span>:</span>
				            							<span class="rating-info-img">
				            								<span style="width: 96%;"></span>
				            							</span>
											</div>
											<a href="#" class="rating-link">Read Full Review</a>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="reviews-section-tip">
							<div class="story-tip">
								<div class="story-tip-content">
									<h3>Looking for a Gartner Magic Quadrant?</h3>
									<p>We have a different narrative with a perspective that spans multiple MQs.</p>
								</div>
								<a href="#" class="story-tip-link">See how ignite fits in<svg class="arrow-icon"><use xlink:href="#arrow-right"></use></svg></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="decor-section">
			<div class="container">
				<div class="grid-center-noGutter">
					<div class="col-12_md-10_lg-9">
						<div class="benefits">
							<h2>Knowledge Center</h2>
							<ul class="benefits-heading js-tabs-triggers">
								<li><a href="#" class="is-active">Abstraction Layer</a></li>
								<li><a href="#">Digitized Business Functions</a></li>
							</ul>

							<div class="js-tabs-content tabs-content">
								<div class="benefits-inner">
									<p>0Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
								<div class="information">
									<div class="information-steps">
										<ol class="steps">

											<li><a href="#">
													What do you mean? How is this different?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													Why do I need it to become an intelligent enterprise?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													How do I build it? How long does it take? What's involved? Can I reuse existing assets?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													Once I have it, how do I manage it?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

										</ol>
									</div>
									<div class="information-preview">
										<div class="information-pic">
											<img src="<?= get_template_directory_uri() ?>/dist/images/info.png" alt="pic">
										</div>
									</div>
								</div>
							</div>

							<div class="js-tabs-content tabs-content">
								<div class="benefits-inner">
									<p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
								<div class="information">
									<div class="information-steps">
										<ol class="steps">

											<li><a href="#">
													What do you mean? How is this different?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													Why do I need it to become an intelligent enterprise?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													How do I build it? How long does it take? What's involved? Can I reuse existing assets?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

											<li><a href="#">
													Once I have it, how do I manage it?
													<svg class="arrow-icon">
														<use xlink:href="#arrow-right"></use>
													</svg>
												</a></li>

										</ol>
									</div>
									<div class="information-preview">
										<div class="information-pic">
											<img src="<?= get_template_directory_uri() ?>/dist/images/info.png" alt="pic">
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="subscribe">
							<div class="subscribe-title">
								<h2>Sign up for our newsletter</h2>
							</div>
							<div class="subscribe-form">
								<div class="subscribe-form-inner">
									<strong>No spam, we promise</strong>
									<div class="subscribe-frame js-subscribe-frame">
										<iframe src="http://go.digitalml.com/l/296922/2018-08-27/btrq6" width="100%" type="text/html"
												frameborder="0" allowTransparency="true" style="border: 0"></iframe>
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