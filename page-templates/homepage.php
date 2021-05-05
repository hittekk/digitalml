<?php
/* Template Name: Homepage Template
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('2020-new');
?>
<main class="main homepage-refresh">
  <div id="section-1" class="main-section hero">
    <div class="container">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="hero-inner">
            <h2>ignite Platform</h2>
            <h3>A Holistic API and Service Catalog with Extended Lifecycle</h3>
            <h1>APIs for <span>everyone</span></h1>

            <a href="https://calendly.com/digitalml/ignite-introduction" class="button decor decor-white" target="_blank">Book a Demo</a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="section-2" class="main-section"> <!-- INTRO TEXT / LOGOS --> 
    <div class="container">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <h3>igniting the world’s leading enterprises’ transition to digital, migration to the cloud, and IT modernization initiatives</h3>
          <div class="highlight-logos grid-center">
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_aci@3x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_mufg@3x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_usbank@3x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/banking_clients_nedbank@3x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/insurance_clients_anthem@2x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/insurance_clients_cna@2x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/insurance_clients_kaiser@2x.png"/>
            <img src="<?= get_template_directory_uri() ?>/dist/images/logos/insurance_clients_metlife@2x.png"/>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="section-aux" class="main-section"> <!-- INTRO TEXT / LOGOS --> 
    <div class="container offset-section">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="grid-equalHeight container-top">
            <div class="highlight-box col first">
              <div class="highlight-inner">
                <div class="highlight-box-logo">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/IDC.svg">
                </div>
                <div class="highlight-box-meta">
                  May 2020 Report — IDC x digitalML
                </div>
                <div class="highlight-box-title">
                  <a class="highlight-link" href="https://go.digitalml.com/IDCspotlight">Digital Transformation Success Requires an API-Centric Approach</a>
                </div>
                <div class="highlight-box-button">
                  <a href="https://go.digitalml.com/IDCspotlight" class="button decor">Read Report</a>
                </div>
              </div>
            </div>
            <div class="highlight-box col last">
              <div class="highlight-inner">
                <div class="highlight-box-logo">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/Forrester.svg">
                </div>
                <div class="highlight-box-meta">
                  February 2020 Webinar — Forrester x digitalML
                </div>
                <div class="highlight-box-title">
                  <a class="highlight-link" href="https://go.digitalml.com/APIs_as_a_Platform_Website" class="button decor"">APIs as a Platform for Business Transformation featuring Forrester®</a>
                </div>
                <div class="highlight-box-button">
                  <a href="https://go.digitalml.com/APIs_as_a_Platform_Website" class="button decor">Listen Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="section-3" class="main-section"> <!-- WHY IGNITE --> 
    <div class="container">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="grid container-top">
            <div class="col-7">
              <h2>Why ignite?</h2>
              <p>A single source of truth for all your APIs that everyone can work with
              </p>
            </div>
            <div class="col small-first">
              <img src="<?= get_template_directory_uri() ?>/dist/images/wi_graphic01@3x.png">
            </div>
          </div>
          <div class="grid container-below highlight-col">
            <div class="col">
              <div class="highlight-image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/wi_graphic02@3x.png">
              </div>
              <div class="highlight-text">
                <p><span>Combine APIs together</span> as Bundles for new applications, customers and partners</p>
              </div>
            </div>
            <div class="col small-spacer">
              <div class="highlight-image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/wi_graphic03@3x.png">
              </div>
              <div class="highlight-text">
                <p><span>Build on</span> your existing API investments</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="section-4" class="main-section"> <!--HOLISTIC API --> 
    <div class="container">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="grid-middle-noGutter container-top">
            <div class="col-12">
              <div class="lead-image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/catalog_graphic01@3x.png">
              </div>
              <h2>Holistic API and Service Catalog</h2>
            </div>
          </div>
          <div class="grid-middle-noGutter container-below">
            <div class="col">
              <p class="lead-text">A single location to discover, reuse and manage your APIs and Services</p>
              <p class="sublead-text">Services and methods/operations are organized and aligned to taxonomies and maturity models (governance, patterns, standards) for a complete view of your API and service portfolio</p>
              <a href="/ignite-holistic-catalog/" class="button decor">Learn More</a>
            </div>
            <div class="col small-first">
              <div class="highlight-side-image">
                <a href="#modal-holistic" rel="modal:open">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/digitalml-ignite_api-catalog-integration_feature01_thmb@2x.png">
                </a>
              </div>
              <div class="highlight-action">
                <a class="highlight-link" href="#modal-holistic" rel="modal:open">
                  <span class="icon-enlarge"></span>Enlarge
                </a>
              </div>
              <div id="modal-holistic" class="modal">
                <div class="modal-image">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/digitalml-ignite_api-catalog-integration_feature01_hiRes.png">
                </div>
                <div class="modal-description">
                  Holistic API and Service Catalog.
                  <!--<a href="#" rel="modal:close">Close</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="section-5" class="main-section"> <!--EXTENDABLE --> 
    <div class="container">
      <div class="grid-center grid-middle">
        <div class="col-12_md-10_lg-9">
          <div class="grid-middle-noGutter container-top">
            <div class="col-12">
              <div class="lead-image">
                <img src="<?= get_template_directory_uri() ?>/dist/images/lifecycle_graphic01@3x.png">
              </div>
              <h2>Extended API & Service Lifecycle</h2>
            </div>
          </div>
          <div class="grid-middle-noGutter container-below">
            <div class="col">
              <p class="lead-text">Scale your APIs fast and safely</p>
              <p class="sublead-text">Digital leaders rely on thousands of APIs and Services. ignite is designed to ensure these are properly managed  at scale.</p>
              <p class="sublead-text">Whether managing internally, or within a complex ecosystem of customers and partners, the extended lifecycle capabilities of ignite ensures a flexible approach to standardized, reusable and secure APIs throughout.</p>
              <a href="/ignite-extended-service-lifecycle/" class="button decor">Learn More</a>
            </div>
            <div class="col small-first">
              <div class="highlight-side-image">
                <a href="#modal-extended" rel="modal:open">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/digitalml-ignite_api-lifecycle_feature01_thmb@2x.png">
                </a>
              </div>
              <div class="highlight-action">
                <a class="highlight-link" href="#modal-extended" rel="modal:open">
                  <span class="icon-enlarge"></span>Enlarge
                </a>
              </div>
              <div id="modal-extended" class="modal">
                <div class="modal-image">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/digitalml-ignite_api-lifecycle_feature01_thmb@2x.png">
                </div>
                <div class="modal-description">
                  Extended API and Service Lifecycle.
                  <!--<a href="#" rel="modal:close">Close</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script language="javascript">

      $(window).on('load resize', function () {
        var width = $(window).width();
        if(width < 768) {
            $(".highlight-action a").click(function(e) {
                e.preventDefault();
            });
        }
      });



      $("#modal-extended, #modal-holistic").modal({
        fadeDuration: 1000,
        fadeDelay: 0.50
      });
    
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