<?php
/* Template Name: Resource page Template
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
         * output the platform page section-by-section, pulling editable content as needed from custom fields defined in lib/resourcepage-data.php
         *
         * example: custom fields such as
         *  section 1/hero content
         *  section 2/business-it content (if any)
         *  section 3/ignite-boxes content (if any)
         *  etc.
         */
?>
<div class="page-resources">
	<div class="container-fluid hero" id="section-1">
			<div class="row">
        <div class="module-wrap">
          <div class="module image-module parallax">

            <div class="body-wrap">
              <div class="body">
                <div class="text-wrap">
                  <div class="content"><?php the_content() ?></div>
                </div>

                <div class="icon-wrap">

                  <div class="card-module-wrap">
<div class="shadow"></div>
                    <div class="module image-module">
                      <span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
                        <span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
                      </span>

                      <div class="body-wrap">
                        <div class="header"><div class="icon"></div></div>
                        <div class="body">
                          <span class="extra-small">The ignite User Conference</span>
<span class="big-text">New York City </br> 
<h3>October 16th - 17th, 2017</h3>

</span>
<p>Bringing business and IT practitioners together to learn, plan, and create API Products that transform large enterprises, allowing them to become digital, modernize IT systems, and grow.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div><!-- end .body -->
            </div><!-- end .body-wrap -->
          </div><!-- end module -->
        </div><!-- end module-wrap -->
			</div><!-- end row -->
		</div><!-- end container-fluid -->

		<div class="container">
			<div class="row">
				<div id="section-2" class="module filters filter-module"></div>
			</div>
		</div>

		<div class="container" id="section-3">
			<div class="row">
        <div class="col-md-12">
          <div class="module articles carousel-module">
            <h3>Articles</h3>
            <div class="row">
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/introducing-accelerators-a-new-lite-interface-in-ignite/" target="_blank">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-1.png" alt="Introducing Accelerators, a New Lite Interface in ignite" title="Introducing Accelerators, a New Lite Interface in ignite">
                  </div>
                  <h5>Introducing Accelerators, a New Lite Interface in ignite</h5>
                </a>
              </div>
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/business-capability-apis-vs-exposure-apis/" target="_blank">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-2.png" alt="Business Capability APIs vs. Exposure APIs" title="Business Capability APIs vs. Exposure APIs"></div>
                  <h5>Business Capability APIs vs. Exposure APIs</h5>
                </a>
              </div>
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/7-reasons-to-use-a-resource-model-while-designing-restful-apis/" target="_blank">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-3.png" alt="7 Benefits of Using a Resource Model While Designing Restful APIs" title="7 Benefits of Using a Resource Model While Designing Restful APIs"></div>
                  <h5>7 Benefits of Using a Resource Model While Designing Restful APIs</h5>
                </a>
              </div>
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/code-first-vs-api-design-management/" target="_blank">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-4.png" alt="&quot;Code First&quot; vs. API Design Management" title="&quot;Code First&quot; vs. API Design Management"></div>
                  <h5>&quot;Code First&quot; vs. API Design Management</h5>
                </a>
              </div>
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/govern-all-types-of-data-in-motion-and-at-rest-to-gain-deeper-insights-and-consistent-business-outcomes/" target="_blank">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-5.png" alt="Govern All Types of Data, In Motion and At Rest, To Gain Deeper Insights and Consistent Business Outcomes" title="Govern All Types of Data, In Motion and At Rest, To Gain Deeper Insights and Consistent Business Outcomes"></div>
                  <h5>Govern All Types of Data, In Motion and At Rest, To Gain Deeper Insights and Consistent Business Outcomes</h5>
                </a>
              </div>
              <div class="col-md-2 col-sm-6">
                <a href="http://blog.digitalml.com/heard-at-the-forum-design-matters-to-enabling-apis-and-big-data-to-succeed-in-large-enterprises/" target="_blank">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/articles/Article-6.png" alt="Design Matters to Enabling APIs and Big Data to Succeed in Large Enterprises" title="Design Matters to Enabling APIs and Big Data to Succeed in Large Enterprises"></div>
                <h5>Design Matters to Enabling APIs and Big Data to Succeed in Large Enterprises</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
			</div>
		</div>

		<div class="container-fluid" id="section-4">
			<div class="row">

	          <div class="module-wrap">
	            <div class="module videos media-module">
	              <h3>Videos</h3>
	              <div class="media-grid">
	                <div class="media-item light">
		                <?php digitalml_get_template_part('partial-templates/_video-embed-youtube.php', array(
	                                'video_id' => 'JZIDCV-WWTQ',
	                                'video_title' => 'APIs and the Race to Become a Digital Disrupter',
	                                'video_thumburl' => get_stylesheet_directory_uri() . "/images/thumbnail-video-apis-and-the-race-1x.png"
	                            )); ?>
		                <h5 class="title">APIs and the Race to Become a Digital Disrupter</h5>
	                </div>
	                <div class="media-item dark">
		                <?php digitalml_get_template_part('partial-templates/_video-embed-youtube.php', array(
	                        'video_id' => '6vnqxkvBKs0',
	                        'video_title' => 'Plan, Design, Build and Run API Products with ignite',
	                        'video_thumburl' => get_stylesheet_directory_uri() . "/images/thumbnail-video-plan-design-build-run-1x.png"
	                    )); ?>
		                <h5 class="title">Animated Explainer Plan, Design, Build and Run API Products with ignite</h5>
	                </div>
	              </div>
	            </div>
	          </div>

			</div>
		</div>


		<div class="container" id="section-5">
			<div class="row">
        <div class="col-md-12">
          <div class="module white-papers carousel-module">
            <h3>White Papers</h3>
            <div class="row white-papers-scrolling">
              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zhv">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/Retail-WP.jpg" alt="How to Win the Digital Retail Race with Effective API Design Management using the ignite API Product Management Platform" title="How to Win the Digital Retail Race with Effective API Design Management using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg"></div>
                  <h5>How to Win the Digital Retail Race with Effective API Design Management using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zj2">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/Insurance-WP.jpg" alt="Speeding Insurance Firms' Digital Transformation using the ignite API Product Management Platform" title="Speeding Insurance Firms' Digital Transformation using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg"></div>
                  <h5>Speeding Insurance Firms' Digital Transformation using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zj4">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/Banking-WP.jpg" alt="Speeding Banks' Innovation In Digital Services And Payments using the ignite API Product Management Platform" title="Speeding Banks' Innovation In Digital Services And Payments using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg"></div>
                  <h5>Speeding Banks' Innovation In Digital Services And Payments using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zjb">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/Telecomm-WP.jpg" alt="Speeding Digital Transformation in Telecom using the ignite API Product Management Platform" title="Speeding Digital Transformation in Telecom using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg"></div>
                  <h5>Speeding Digital Transformation in Telecom using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zhz">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/Healthcare-WP.jpg" alt="Speeding Digital Healthcare Transformation using the ignite API Product Management Platform" title="Speeding Digital Healthcare Transformation using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg" class="download-arrow">
                  </div>
                  <h5>Speeding Digital Healthcare Transformation using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zjq">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/API-Economy-WP.jpg" alt="How to Thrive in the API Economy Optimizing your API & Service Portfolio using the ignite API Product Management Platform" title="How to Thrive in the API Economy Optimizing your API & Service Portfolio using the ignite API Product Management Platform" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg" class="download-arrow">
                  </div>
                  <h5>How to Thrive in the API Economy Optimizing your API & Service Portfolio using the ignite API Product Management Platform</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zjv">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/API-Strategy-Report.jpg" alt="2016 API Strategy Report" title="2016 API Strategy Report" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg" class="download-arrow">
                  </div>
                  <h5>2016 API Strategy Report</h5>
                </a>
              </div>

              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zk4">
                  <div class="resource-image">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/white-papers/10-characteristics.jpg" alt="10 Characteristics of a great API" title="10 Characteristics of a great API" class="dl-thumbnail">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-white-paper-download.svg" class="download-arrow">
                  </div>
                  <h5>10 Characteristics of a great API: Make your APIs easy to use and hard to misuse</h5>
                </a>
              </div>

            </div>
          </div>
        </div>
			</div>
		</div>

		<div class="container" id="section-6">
			<div class="row">
        <div class="col-md-12">
          <div class="module presentations carousel-module">
            <h3>Presentations & Case Studies</h3>
            <div class="row presentations-scrolling">
              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zlj">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/CNA-Presentation-Thumbnail.jpg"></div>
                  <h5>CNA 2016 Presentation</h5>
                </a>
              </div><!-- end .col -->
              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zlg">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/Anthem-Presentation-Thumbnail.jpg"></div>
                  <h5>Anthem 2016 Presentation</h5>
                </a>
              </div><!-- end .col -->
              <div class="col-md-2">
                 <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zlx">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/Walmart-Presentation-Thumbnail.jpg"></div>
                  <h5>Walmart 2015 Presentation</h5>
                </a>
              </div><!-- end .col -->
              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zmz">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/T-Mobile-Presentation-Thumbnail.jpg"></div>
                  <h5>T-Mobile 2014 Presentation</h5>
                </a>
              </div><!-- end .col -->
              <div class="col-md-2">
                <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zmx">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/Allstate-Presentation-Logo.jpg"></div>
                  <h5>Allstate 2015 Presentation</h5>
                </a>
              </div><!-- end .col -->
              <div class="col-md-2">
                 <a href="#myGatedContent" data-toggle="modal" class="gated-content" data-iframe-src="https://go.pardot.com/l/296922/2017-01-25/2zn2">
                  <div class="resource-image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/resources/presentations/MetLife-Presentation-Thumbnail.jpg"></div>
                  <h5>Metlife 2014 Presentation</h5>
                </a>
              </div><!-- end .col -->
            </div><!-- end .row -->
          </div><!-- end .module -->
        </div><!-- end .col -->
			</div><!-- end .row -->
		</div>

		<div class="container">
			<div class="row">
				<div id="section-7" class="module reports carousel-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-8" class="module case-studies carousel-module"></div>
			</div>
		</div>
</div>

<div class="modal fade" id="myGatedContent" tabindex="-1" role="dialog" aria-labelledby="myGatedContent">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <!--div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Do we need a title?</h4>
      </div-->

      <div class="modal-body">
        <iframe src="https://go.pardot.com/l/296922/2017-01-25/2zhv" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

<script>
(function($) {
  $(document).on('ready', function() {

		$("#section-5 .white-papers-scrolling").slick({
			mobileFirst: true,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			responsive: [
				{
					breakpoint: 300,
					settings: {
						dots: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false
					}
				},
				{
					breakpoint: 768,
					settings: {
						dots: true,
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: false
					}
				},
				{
					breakpoint: 1024,
					settings: {
						dots: true,
						slidesToShow: 6,
						slidesToScroll: 6,
						infinite: false
					}
				}

			]
		});

		$("#section-6 .presentations-scrolling").slick({
			mobileFirst: true,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
			responsive: [
				{
					breakpoint: 300,
					settings: {
						dots: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false
					}
				},
				{
					breakpoint: 768,
					settings: {
						dots: true,
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: false
					}
				},
				{
					breakpoint: 1024,
					settings: {
						dots: true,
						slidesToShow: 6,
						slidesToScroll: 6,
						infinite: false
					}
				}

			]
		});


	});

})(jQuery);
</script>

<?php get_footer(); ?>

