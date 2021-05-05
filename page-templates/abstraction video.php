<?php
/* Template Name: Feature Template_Abstraction Video
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
              <h2 class="no-transform">API and Service Abstraction, and Integrations to CI/CD and runtime systems with the ignite platform</h2>
            </div>
          </div>
          <div class="grid-middle-noGutter container-below">
            <div class="col">
              <p class="sublead-text">The ignite platform uniquely sits upstream of CI/CD in the API and Lifecycle. Abstraction and integrations are used to ensure ignite delivers a Holistic API and Service Catalog with Extended Lifecycle that’s seamless with your existing architecture, and delivers reliable and reusable APIs and Services for everyone.</p>
              <p class="sublead-text">With abstraction, your APIs and Services are brought into a common metadata framework and organized into Designs and Specifications. This provides a pure abstracted view (away from all code and implementation details) for non-technical users to discover, understand, and use the APIs and Services in your catalog. There is also a semi-abstracted technical view (with all the technical details for the Services, including payloads, NFRs, policies etc.) and these can be used to generate any code base for downstream targets using output templates.</p>
              <p class="sublead-text">Bi-directional integrations with CI/CD and runtime systems enable your APIs and Services to be deployed directly to their targets, with deployment history available directly in ignite. What’s more, ignite’s own APIs can be used to configure integrations with almost any other system, including upstream domain driven design and product tooling.</p>              
		<p class="sublead-text">This video will take you through how ignite’s functionality supports abstraction and integrations as two key aspects of a Holistic Catalog with Extended Lifecycle.</p> 
	<div class="feature-video">
                <!-- VIMEO EMBED CODE HERE (IFRAME ONLY) --> 
                <iframe src="https://player.vimeo.com/video/491169547" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                <!-- END VIDEO EMBED CODE --> 
              </div>
              <div class="feature-body-text">
                <p>VIDEO TIMESTAMPS</p>

                <p><b>00:00 - 0:46</b> Why abstract your Services into a common metadata framework?</p>
                
		<p><b>0:46 - 1:54</b> Designs and Specifications: abstracted views and technical details for your Services</p>

                <p><b>1:54 - 2:18</b> ignite sits upstream of CI/CD and enables Services to be built directly in ignite or imported in</p>
                
		<p><b>2:18 - 2:38</b> Finding existing Services using the taxonomy tree </p>
               		
		<p><b>2:38 - 3:24 </b> ignite integration to CI/CD methodology</p>
             
		<p><b>3:24 - 3:38</b> ignite’s out-of-the-box integration targets</p>

		<p><b>3:38 - 4:17</b> ignite’s own APIs can be used to establish integrations with many more downstream systems</p>

		<p><b>4:17 - 5:30</b> Integrations at the Design and Product Bundle level</p>
		
		<p><b>5:30 - 6:17</b> What are output templates and how do they work?</p>

		<p><b>6:17 - 7:02</b> Benefits of using ignite’s abstraction and integration for your organization</p>

		<p> For more on API abstraction, check out our <a href="https://www.digitalml.com/api-abstraction-is-key-to-an-api-first-strategy/"> API abstraction blog post.</a></p>

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