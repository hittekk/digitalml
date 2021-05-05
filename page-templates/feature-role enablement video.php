<?php
/* Template Name: Feature Template_Role Enablement Video
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>
<main id="page-feature" class="main homepage-refresh">

 <div id="section-4" class="main-section feature-section"> <!--HOLISTIC API --> 
    <div class="">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="grid-middle-noGutter container-top">
            <div class="col-12">
              <div class="lead-image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/icon_i7@3x.png">
              </div>
              <h2 class="no-transform">Role Enablement with the ignite Platform: Top-Down and Bottom-Up API and Service Development</h2>
            </div>
          </div>
          <div class="grid-middle-noGutter container-below">
            <div class="col">
              <p class="lead-text">Enabling roles across both Business and IT when it comes to API and Service Development is key for: </p>
              <p class="sublead-text">- A collaborative API and Service lifecycle</p>
              <p class="sublead-text"> - Ensuring speed and scale, while delivering reliable, reusable, and well-governed APIs and Services</p>
				<p class="sublead-text"> - Achieving digital maturity where multiple roles across the enterprise are providing and consuming APIs</p>              
	
		<p class="sublead-text"> The ignite platform supports two approaches to this role enablement – top-down and bottom-up API development. 
		<p class="sublead-text">Top-down development involves a domain driven design/product-driven approach to API design and development, and utilizes the enforcement of API standards through governance compliance checks, and encouragement of reuse of common data elements, so that service documentation is normalized and consistent for your developers.</p>
		<p class="sublead-text">In bottom-up development, you’re allowing your development team to work in the tools and environment they’re familiar with, while also allowing, through integration and import of the raw service documentation, developers to contribute to populating your Holistic Catalog.</p>
		<p class="sublead-text">This video demonstrates how the ignite platform supports both these approaches simultaneously, and provides flexibility for you to move to a more top-down development approach over time.</p>
	<div class="feature-video">
                <!-- VIMEO EMBED CODE HERE (IFRAME ONLY) --> 
                <iframe src="https://player.vimeo.com/video/480335068" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                <!-- END VIDEO EMBED CODE --> 
              </div>
              <div class="feature-body-text">
                <p>WEBINAR TIMESTAMPS</p>

                <p><b>00:00 - 0:47</b> What  do we mean by top-down and bottom-up role enablement?</p>
		
		<p><b> Top-down enablement and API development </b></p>
                
		<p><b>0:47 - 1:17</b> Browsing information models in ignite</p>

                <p><b>1:17 - 1:48</b> Creating a new Service in ignite</p>
                
		<p><b>1:48 - 2:34</b> Adding reusable data elements to a Service</p>
               		
		<p><b>2:34 - 3:22 </b> Governance checks and OpenAPI validation, and extensive Service metadata</p>
             
		<p><b>3:22 - 4:25</b> Classifying objects using taxonomy models</p>

		<p><b>4:25 - 5:11</b> Approving Services for reuse</p>

		<p><b> Bottom-up enablement and API development </b></p>
                
		<p><b>5:11 - 5:42</b> Importing a new Service version into an existing Design from a JSON file</p>
		
		<p><b>5:42 - 6:05</b> Prompting enhanced metadata for Services built outside ignite</p>

		<p><b>6:05 - 6:30</b> Creating a new Design and Specification from a JSON file</p>

		<p><b>6:30 - 7:09</b> Consoliating data elements to create a data model over time</p>

		<p> For more on role enablement strategy, check out our <a href="https://www.digitalml.com/api-development-strategies-for-apis-at-scale/">API development blog post.</a></p>

 </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include get_template_directory() . '/sub-footer.php';?>


<script language="javascript">

      $("#modal-extended, #modal-holistic").modal({
        fadeDuration: 1000,
        fadeDelay: 0.50
      });

      $("#webinar_banner").hide(); // ON FEATURE PAGE
    
      function showMe(whichTab) {
      
        document.getElementById("tab1_content").classList.remove("showing");
        document.getElementById("tab2_content").classList.remove("showing");
              
        document.getElementById(whichTab+"_content").classList.add("showing");
        
      }
      
      currentTab = 1;
      
      function showNext(nextOrPrev) {
        if (nextOrPrev=="next") {
          if (currentTab<2) {
            currentTab++;
          } else {
            currentTab = 1;
          }
        } else {
          if (currentTab>1) {
            currentTab--;
          } else {
            currentTab = 2;
          }
        
        }
        
        showMe("tab"+currentTab);
      
      }
    </script>



</main>
<div>
  <div>

    <?php
get_footer('home');