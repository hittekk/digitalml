<?php
/* Template Name: Feature Template
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
              <h2 class="no-transform">Introducing ignite Version 7</h2>
            </div>
          </div>
          <div class="grid-middle-noGutter container-below">
            <div class="col">
              <p class="lead-text">Welcome to this on-demand overview of ignite version 7, presented by digitalML’s CEO and Founder, Jeremy Sindall</p>
              <p class="sublead-text">We've been inspired by our customers and canvased the market to make sure your goals as a large enterprise are met - delivering innovative products and modernizing your IT fast. In this version of ignite, you'll be able to accelerate those digital transformation strategies, support your API Strategy 2.0 and digital transformation strategies, and create and use APIs and Services quickly, by the entire organization.</p>
              <p class="sublead-text">ignite delivers <b>APIs for everyone.</b></p>
              <div class="feature-video">
                <!-- VIMEO EMBED CODE HERE (IFRAME ONLY) --> 
                <iframe src="https://player.vimeo.com/video/467397216" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                <!-- END VIDEO EMBED CODE --> 
              </div>
              <div class="feature-body-text">
                <p>WEBINAR TIMESTAMPS</p>

                <p><b>00:00</b> ignite version 7 methodology and recap of what we’re hearing in the space when it comes to digital, migration to the cloud, and IT modernization</p>

                <p><b>02:36</b> Requirements for APIs and Services at scale (API Strategy 2.0) – discoverability, consistency, adherence to standards, extended API and Service lifecycle management, and governance</p>

                <p><b>04:58</b> What is ignite? A holistic API and Service Catalog with Extended Lifecycle Management – what does this mean and what makes the offering a unique solution for large enterprises?</p>

                <p><b>10:51</b> There are multiple roles in the API and Service lifecycle when moving to API Strategy 2.0, it is important to enable them all</p>

                <p><b>11:53</b> ignite demonstration including Catalog Browse and Discover, Abstracted Designs and Specifications, Versioning, Governance, Code Validation, Output Templates for Artifact Generation, Approval for Reuse, Product Bundles and Reporting</p>
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