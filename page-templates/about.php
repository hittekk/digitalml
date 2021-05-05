<?php
/* Template Name: About-page Template
 *
 * @package digitalML
 */

get_header();
global $post;
?>
<div class="page-about-us">
<?php
	if (have_posts()) { the_post();
?>
<?php
        /** TODO:
         * output the about page section-by-section, pulling editable content as needed from custom fields defined in lib/aboutpage-data.php
         *
         * example: custom fields such as
         *  section 1/hero content
         *  section 2/business-it content (if any)
         *  section 3/ignite-boxes content (if any)
         *  etc.
         */
?>
		<div class="container-fluid" id="section-1">
			<div class="row">
        <div class="module hero image-module parallax">
          <div class="body-wrap">
            <div class="body">
              <div class="row">
                <div class="col-md-7"><!-- md-6 -->
                  <div class="mobile-padding">
                    <h1><?php the_title() ?></h1>
                    <div class="content"><?php the_content() ?></div>
                  </div>
                </div>
                <div class="col-md-4 col-md-offset-1 about-contact-us-form"><!-- md-6 -->
                  <div class="mobile-padding">
                    <h3 class="contact-us">Contact Us</h3>
                    <iframe src="https://go.pardot.com/l/296922/2017-01-27/32zb" width="100%" height="480" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
                  </div>
                </div>
              </div><!-- end .row -->
            </div><!-- end .body -->
          </div>
        </div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-2" class="module leadership team-module">
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a data-toggle="tab" href="#jeremy">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/headshots/jeremy.png">
                <h4>Jeremy Sindall</h4>
                <p>CEO</p>
              </a></li>
            <li><a data-toggle="tab" href="#john">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/headshots/john.png">
                <h4>John Bogard</h4>
                <p>VP Sales</p>
              </a></li>
            <li><a data-toggle="tab" href="#brian">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/headshots/brian.png">
                <h4>Brian Otten</h4>
                <p>Chief Customer Officer</p>
              </a></li>
            <li><a data-toggle="tab" href="#andy">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/headshots/andy.png">
                <h4>Andy Medlicott</h4>
                <p>Chief Architect</p>
              </a></li>
          </ul>

          <div class="tab-content">
            <div id="jeremy" class="tab-pane fade in active">
              <p>Jeremy founded digitalML in June 2000. At this time the challenge was to build a new type of post .com era enterprise software company by throwing out the old playbook and focusing on the needs of the largest enterprises first. Under his leadership digitalML have successfully built up a customer base of the largest enterprises in the world all sharing the need to become successful digital enterprises through leveraging a portfolio of business led APIs and Services. This has been achieved while achieving impressive organic growth and by reinvesting profits into R&amp;D. During this time the company has also expanded from its UK base into Germany and North America. Prior to founding digitalML Jeremy Sindall was VP EMEA for Interleaf where he was a member of the Senior Management team, which led a three-year turnaround of the business from a market cap of $13M to a trade sale to BroadVision (NASDAQ:BVSN) for $870M. Prior to Interleaf, Jeremy served 12 years at Xerox at a time where their PARC research labs were creating many of the IT foundations that we all rely on today. At the culmination of Jeremy’s time at Xerox he ran Xerox’s software division, XSoft for Southern Europe based in Paris.</p>
            </div>

            <div id="john" class="tab-pane fade">
              <p>John has a background in sales, business development, and marketing in technology and business services with experience generating revenue and growth in early stage companies as well as larger public corporations. He is responsible for driving all sales efforts and extending the ignite Service Design Platform within the marketplace. He joined digitalML in 2006 as the company launched in the US. Prior to joining digitalML John was Vice President of Sales at MCC:o2, a global venture accelerator for early stage technology ventures, responsible for launching new products and producing repeatable and scalable revenue for client companies from the US and Europe. Previously, John was in enterprise sales with salesforce.com, the worldwide leader in on-demand customer relationship management (CRM) services; and was responsible for a sales and business development team at Apex Systems, Inc. John earned his BA in Political Science and Business Administration from the University of Calgary.</p>
            </div>

            <div id="brian" class="tab-pane fade">
              <p>Brian leads the digitalML professional services team with their mandate to work closely with our customers to drive change in the optimal working practices for API design that are made available to our clients by use of the ignite Service Design Platform combined with Agile best practices. Prior to joining digitalML Brian worked in this field in Barclays Capital, Bank of America and Merrill Lynch and as a consultant to Reuters, Hutchison 3G (3 Mobile UK),  and Cisco Systems. </p>
            </div>

            <div id="andy" class="tab-pane fade">
              <p>As Chief Architect, Andy brings innovation and experienced technical leadership to Ignite, ensuring best-of-breed technology supports our customers. He works closely with customers advising on both service and API design and rapidly prototyping product ideas to ensure they have the right solution to fit their organization. Having been with digitalML for over 12 years he has been involved in every aspect of Ignite and has been a key individual in ensuring Ignite evolves and continues to give customers an edge in the constantly competitive world of digital business. Andy's background has always been technical, having discovered a passion for software when, aged 10, he was given a Commodore 64. At 12 he wrote his first commercial software using DBase... later he formalized his experience by studying Computer Science with Systems Integration at Southampton University and obtaining a BSc (Hons) whilst working as a contractor writing embedded fuel control software for turbines. Since then his career has spanned diverse domains including designing the infrastructure behind the BBC's first highly dynamic website, a flight planning and booking system for light aircraft in Africa, and C compilers to simplify programming Field Programmable Gate Arrays (FPGAs). Andy's interests include skiing and whiskey, though not both at the same time!</p>
            </div>

          </div><!-- end .tab-content -->
        </div><!-- end .leadership .team-module -->
			</div>
		</div><!-- end .container -->

		<div class="container-fluid">
			<A NAME="locations">
			<div class="row">
        <div id="section-3" class="module locations icon-list-module  parallax">
          <div class="body-wrap">
            <div class="body container">
              <div class="row">
                <div class="col-md-12">
                  <h3>Locations</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="location">
                    <div class="location-marker"></div>
                    <p><strong>DigitalML US</strong></br>
                    126 East 56th Street, </br>Suite 1220,</br>
                    NY, NY 10022 </br>
                    <a href="tel:14153730302">+1 415 373 0302</a>
                    </p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="location">
                    <div class="location-marker"></div>
                    <p><strong>DigitalML US</strong></br>
                    580 California Street, </br>Suite 1600,</br>
                    San Francisco, CA 94104</br>
                    <a href="tel:14153730300">+1 415 373 0300</a>
                    </p>
                  </div>
                </div>

               <div class="col-md-4">
                  <div class="location">
                    <div class="location-marker"></div>
                    <p><strong>DigitalML UK</strong></br>
                    Origin, Western Rd,</br>
                    Bracknell RG12 1US, </br>UK<br>
                    <a href="tel:441344424257">+44 1344 424257</a>
                    </p>
                  </div>
                </div>
               </div>
            </div><!-- end .body -->
          </div>
        </div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-4" class="module careers careers-module"></div>
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
</div>

<?php get_footer(); ?>

