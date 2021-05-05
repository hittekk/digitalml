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
            <h4>Abstracted Service Management</h4>

            <a style="max-width: 15em; margin: 0 auto; letter-spacing: 0;" href="javascript:void;"
              onClick="document.getElementById('video_frame').style.display='flex';" class="button">See How</a>

            <div id="video_frame"
              style="position: absolute; top: 0; left:0; background-color: #000;width: 100vw; height: 100vh;display: flex; justify-content: center; flex-direction: column; text-align: center;display:none;"
              onClick="this.style.display='none';">
              <iframe src="https://player.vimeo.com/video/331212017?color=fff&title=0&byline=0&portrait=0" width="1024"
                height="576" style="margin: 0 auto;" frameborder="0" allow="autoplay; fullscreen"
                allowfullscreen></iframe>
            </div>
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
  <div id="forrester-click" class="idc-gradient">
    <div class="container">
      <div class="grid-center-noGutter">
        <div class="col-12_md-10_lg-9">
          <div class="dual-box dual-idc ">
            <div class="dual-box-inner">
              <div class="dual-box-descr">
                <div class="dual-box-content">
                  <strong>MAY 2020 REPORT — IDC x digitalML</strong>
                  <h2 style="font-size: 35px;">Digital Transformation Success Requires an API-Centric Approach</h2>

                  <a href="http://go.digitalml.com/forrester-API-design-report" class="button">Download Report</a>
                </div>
              </div>
              <div class="dual-box-preview" style="background-image: url(<?= get_template_directory_uri() ?>/images/idc.png)">
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div id="webinar">
    <div class="container">
      <div class="grid-center-noGutter">
        <div class="col-12_md-10_lg-9">
          <div class="dual-box tablet-preview-wide">
            <div class="dual-box-inner">
              <div class="dual-box-descr">
                <div class="dual-box-content">
                  <strong>webinar</strong>
                  <h2>APIs as a Platform for Business Transformation featuring Forrester&reg;</h2>

                  <a href="https://go.digitalml.com/APIs_as_a_Platform_Website" class="button">DOWNLOAD WEBINAR</a>
                </div>
              </div>
              <div class="dual-box-preview">
                <div class="dual-box-img">
                  <img src="<?= get_template_directory_uri() ?>/images/webinar-supportGraphic@3x.png"
                    alt="Download our webinar">
                </div>
              </div>
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
                  <strong>Discoverability & Availability</strong>
                  <h2>Holistic Service Catalog</h2>
                  <p>Gain a holistic service view supporting multiple audiences (business, technology, consumers) with
                    views into coverage, gaps, heatmaps, and categories of your APIs and Services. Your catalog enables
                    reuse, product creation, collaboration, and prioritization.</p>
                  <a href="digitalml.com/ignite-platform/#catalog" class="button decor">Learn more</a>
                </div>
              </div>
              <div class="dual-box-preview">
                <div class="dual-box-img">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/dual-box/img01.png"
                    alt="This illustration shows an example of the ignite service catalog that enables reuse, product creation, and prioritization">
                </div>
              </div>
            </div>
          </div>
          <div class="dual-box tablet-preview-sm reverse centered-picture">
            <div class="dual-box-inner">
              <div class="dual-box-descr">
                <div class="dual-box-content">
                  <strong>Plan, Design, & Build</strong>
                  <h2>Full Lifecycle Management</h2>
                  <p>Supporting the plan, design, build lifecycle while integrating to CI/CD and run, with self-service
                    governance, federated development and product bundling innovation built in</p>
                  <a href="digitalml.com/ignite-platform/#lifecycle" class="button decor">Learn more</a>
                </div>
              </div>
              <div class="dual-box-preview">
                <div class="dual-box-img">
                  <img src="<?= get_template_directory_uri() ?>/images/ignite/refresh_03.png"
                    alt="ignite supports full lifecycle management of APIs and services - plan, design, build, run.">
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
                <strong>Futureproof You Architecture</strong>
                <h2>Pre-Built Integrations</h2>
                <p>Move to a true intelligent enterprise with collaboration through platforms that can tie the API &
                  service lifecycle together seamlessly and with more automation. Integrate with your CI/CD, runtime
                  platforms, and agile tools.</p>
                <a href="digitalml.com/ignite-platform/#integrations" class="button decor">Learn more</a>
              </div>
            </div>
            <div class="dual-box-preview">
              <div class="dual-box-img">
                <img src="<?= get_template_directory_uri() ?>/dist/images/dual-box/img06.png"
                  alt="The ignite platform ties the API and service lifecycle together seamlessly and integrates with runtime technologies">
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
            <strong>APIs in Hours</strong>
            <h2>Tools and Content</h2>
            <p>Import your existing assets and use our foundation packs created from years of best practice experience
              to build your holistic catalog quickly. Manage it with customized accelerators that bake in your
              processes, governance, standards, security, and more.</p>
            <a href="digitalml.com/ignite-platform/#tools" class="button decor">Learn more</a>
          </div>
          <div class="report-card ">
            <div class="report-card-content">
              <div class="report-card-inner">

                <span class="report-card-pic">
                  <img src="<?= get_template_directory_uri() ?>/dist/images/card-logo.png" alt="pic">
                </span>
                <h3>digitalML cited in Forrester's API Design and Documentation Report</h3>
                <blockquote>One product is differentiated enough to be worthy of special note: digitalML's ignite API
                  Product Management Platform takes an expansive view of API design and documentation, providing the
                  broadest set of features for business and technology collaboration around a core of design and
                  documentation for APIs and API Products."</blockquote>

              </div>
            </div>
            <div class="report-card-preview"
              style="background-image: url(<?= get_template_directory_uri() ?>/dist/images/report-card-bg.png)">
              <a href="http://go.digitalml.com/forrester-API-design-report" class="button decor">Download the
                Report</a>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="container pre-decor-section">
      <div class="grid-center-noGutter">
        <div class="col-12_md-10_lg-9">
          <div class="reviews-section">
            <h2>Gartner Peer Insights – the Voices of Our Enterprise Customers</h2>

            <div class="reviews-section-rating">
              <div class="reviews-rating">
                <div class="reviews-rating-slider js-slider">

                  <div class="reviews-rating-item">
                    <div class="rating-content">
                      <h3>A partner, not merely a vendor, for your API journey</h3>
                      <strong>AVP Enterprise Architecture Services in the Finance Industry</strong>
                      <p>The relationship with digitalML has been excellent from Day 0 - even while there were a couple
                        of
                        failed attempts at API Management in our organization. They were extremely patient, always
                        willing
                        to listen to our needs, very responsive to communication -</p>
                    </div>
                    <div class="rating-actions">
                      <div class="rating-info">
                        <span class="rating-info-text">Rating <span>(4.5)</span>:</span>
                        <span class="rating-info-img">
                          <span style="width: 96%;"></span>
                        </span>
                      </div>
                      <a href="https://www.gartner.com/reviews/review/view/376553" class="rating-link">Read Full
                        Review</a>
                    </div>
                  </div>

                  <div class="reviews-rating-item">
                    <div class="rating-content">
                      <h3>Best in class for API & Service Lifecycle Management</h3>
                      <strong>Chief Architect in the Finance Industry</strong>
                      <p>ACI has chosen ignite for API & Service modeling aspects. Our experience has been very
                        positive.
                        The digitalML team is very professional, understands the customer needs and context. They have
                        provided timely solutions to almost all of our ask. -</p>
                    </div>
                    <div class="rating-actions">
                      <div class="rating-info">
                        <span class="rating-info-text">Rating <span>(4.5)</span>:</span>
                        <span class="rating-info-img">
                          <span style="width: 96%;"></span>
                        </span>
                      </div>
                      <a href="https://www.gartner.com/reviews/review/view/372933" class="rating-link">Read Full
                        Review</a>
                    </div>
                  </div>

                  <div class="reviews-rating-item">
                    <div class="rating-content">
                      <h3>digitalML ignite addressed the full scope of what is needed for API implementation</h3>
                      <strong>IT Integration Strategy in the Healthcare Industry</strong>
                      <p>digitalML has real implementation expertise for addressing our needs for lifting our current
                        SOA
                        deployment to an API offering. -</p>
                    </div>
                    <div class="rating-actions">
                      <div class="rating-info">
                        <span class="rating-info-text">Rating <span>(4.5)</span>:</span>
                        <span class="rating-info-img">
                          <span style="width: 96%;"></span>
                        </span>
                      </div>
                      <a href="https://www.gartner.com/reviews/review/view/391606" class="rating-link">Read Full
                        Review</a>
                    </div>
                  </div>

                  <div class="reviews-rating-item">
                    <div class="rating-content">
                      <h3>Unique feautures for data management and potential do full lifecycle management</h3>
                      <strong>Architect in the Energy and Utilities Industry</strong>
                      <p>This data management feature is something we could not find on the other tools that we use on
                        our
                        environment or in other players of the market. -</p>
                    </div>
                    <div class="rating-actions">
                      <div class="rating-info">
                        <span class="rating-info-text">Rating <span>(4.5)</span>:</span>
                        <span class="rating-info-img">
                          <span style="width: 96%;"></span>
                        </span>
                      </div>
                      <a href="https://www.gartner.com/reviews/review/view/447493" class="rating-link">Read Full
                        Review</a>
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
                <a href="http://go.digitalml.com/where_ignite_fits_in" class="story-tip-link">See how ignite fits in<svg
                    class="arrow-icon">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<div class="grid-center-noGutter">
  <div class="col-12_md-10_lg-9">
    <div class="subscribe">
      <div class="subscribe-title">
        <h3>Join our Mailing List</h3>
      </div>
      <div class="subscribe-form">
        <div class="subscribe-form-inner">

          <p>Sign up to receive content on API Best Practices, Customer Stories, ignite Updates and more.</p>
          <div class="subscribe-frame js-subscribe-frame">
            <iframe src="https://go.pardot.com/l/296922/2018-08-27/btrq6" width="100%" type="text/html" frameborder="0"
              allowTransparency="true" style="border: 0"></iframe>
          </div>
        </div>
      </div>
    </div>

    <?php
get_footer('home');