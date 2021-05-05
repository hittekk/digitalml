<?php
/* Template Name: Homepage Template
 *
 * @package digitalML
 */

get_header();
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
?>

<?php
if (have_posts()) { the_post();
    ?>

    <?php while (have_posts()) : the_post(); ?>

        <?php the_content(''); ?>

    <?php endwhile; ?>


    <?php
    /** TODO:
     * output the homepage section-by-section, pulling editable content as needed from custom fields defined in lib/homepage-data.php
     *
     * example: custom fields such as
     *  section 1/hero content
     *  section 2/business-it content (if any)
     *  section 3/ignite-boxes content (if any)
     *  etc.
     */
    ?>


    <!-- start ROLE BAR -->
    <div id="content_role_matrix">

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(''); ?>

        <?php endwhile; ?>

    </div>


    <!-- ================================== end ROLE BAR-->

    <!-- ================================== BUSINESS / IT-->
    <div class="container-fluid navsection-waypoint" id="section-2">
        <div class="row">
            <div class="module-wrap">
                <div class="module collaboration diagram-module">
                    <div class="pre-header-wrap">
                        <div class="pre-header">
                            <div class="icon business">Business</div>
                            <div class="icon it">IT</div>
                        </div>
                    </div>
                    <div class="section-header">Success means close collaboration between business and IT</div>
                    <div class="body">
                        <div class="diagram-wrap">
                            <div class="diagram">
                                <div class="animation-wrap">
                                    <div class="back animated"></div>
                                    <div class="middle animated"></div>
                                    <div class="front animated"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end BUSINESS / IT-->

    <!-- ================================== IGNITE-->
    <div class="container navsection-waypoint" id="section-3">
        <div class="row">
            <div class="module-wrap">
                <div class="module ignite features-module">
                    <div class="section-header">We offer the ability to do that with</div>
                    <div class="feature main animated">
                        <div class="header">
                            <div class="logo"><img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/' ?>logo-ignite-2x.png" /></div>
                        </div>
                        <div class="body">
                            <div class="title-text">API Product Management Platform</div>
                            <ul>
                                <li><a href="/ignite-plan"><span class="accent">Plan</span> &mdash; Business+</a></li>
                                <li><a href="/ignite-design"><span class="accent">Design</span> &mdash; Analyst+</a></li>
                                <li><a href="/ignite-build"><span class="accent">Build</span> &mdash; Developer+</a></li>
                                <li><a href="/ignite-run"><span class="accent">Run</span> &mdash; Connect+</a></li>
                                <li class="pad">&nbsp;</li>
                                <li><span class="accent">Set Up</span> &mdash; Organizer</li>
                            </ul>
                            <a href="<?= $page_url_platform ?>" class="btn btn-default center-block"><span class="btn-text">Learn More</span></a>
                        </div>
                    </div>

                    <div class="feature left animated">
                        <div class="header"><div class="icon industry-solutions"></div></div>
                        <div class="body">
                            <div class="title-text">Industry Solutions</div>
                            <ul>
                                <li>Insurance</li>
                                <li>Retail</li>
                                <li>Banking</li>
                                <li>Healthcare</li>
                            </ul>
                            <a href="#section-7" class="btn btn-default center-block"><span class="btn-text">Learn More</span></a>
                        </div>
                    </div>

                    <div class="feature right animated">
                        <div class="header"><div class="icon fast-track"></div></div>
                        <div class="body">
                            <div class="title-text">ignite Fast Track</div>
                            <ul>
                                <li>Strategic Alignment Program</li>
                                <li>Quick Win Program</li>
                                <li>Digital Market Leadership</li>
                            </ul>
                            <a href="<?= $page_url_fasttrack ?>" class="btn btn-default center-block"><span class="btn-text">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end IGNITE-->

    <!-- ================================== API LIFECYCLE-->
    <div class="container navsection-waypoint" id="section-4">
        <div class="row">
            <div class="module-wrap">
                <div class="module flow diagram-module">
                    <div class="section-header">API Product Management Lifecycle</div>
                    <div class="body">
                        <div class="diagram-wrap">
                            <div class="diagram">
                                <div class="animation-wrap">
                                    <div class="back animated"></div>
                                    <div class="front animated"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end API LIFECYCLE-->

    <!-- ================================== DIGITAL MARKET LEADERSHIP-->
    <div class="container-fluid navsection-waypoint" id="section-5">
        <div class="row">
            <div class="module-wrap parallax">
                <div class="module strategy threadline-module">
                    <div class="body-wrap">
                        <div class="body">
                            <div class="section-header">Igniting Digital Market Leadership</div>
                            <div class="big-text">A winning API product management strategy<br/>
                                Is key to delivering your business drivers</div>
                            <div class="icon-wrap">
                                <div class="icon-body main">
                                    <div class="connector"></div>
                                    <div class="icon"></div>
                                    <div class="caption">Digital Transformation</div>
                                </div>
                                <div class="icon-body left">
                                    <div class="connector"></div>
                                    <div class="icon"></div>
                                    <div class="caption">Growth</div>
                                </div>
                                <div class="icon-body right">
                                    <div class="connector"></div>
                                    <div class="icon"></div>
                                    <div class="caption">IT Modernization</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end DIGITAL MARKET LEADERSHIP-->



    <!-- ================================== INDUSTRIES-->
    <div class="container-fluid navsection-waypoint" id="section-7">
        <div class="row">
            <div class="module-wrap">
                <div class="module industries carousel-module">
                    <div class="section-header">Industries</div>
                    <div class="pre-text">Pre-built, industry specific API building blocks - get to your end-to-end digital faster</div>
                    <div class="body">
                        <div class="lead-in">
                            <div class="text-wrap">
                                <div class="title">Retail Solutions</div>
                                <div class="text">Deliver API products like Buy Online & Pick-up In-Store, Scan & Send and Location Based Loyalty Offers quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Inventory, Order, Customer, Location - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch.</div>
                                <?php /*
									<div class="cta"><a href="/platform/tbd">Learn More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
 */ ?>
                            </div>
                        </div>
                        <div class="slider">
                            <div class="slide-wrap hidden-sm hidden-md hidden-lg slide-xs" data-slideindex="3">
                                <div class="solution-card retail">
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">Retail</div>
                                            <div class="text">Deliver API products like Buy Online...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap slide-xs slide-sm" data-slideindex="0">
                                <div class="solution-card banking">
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">Banking</div>
                                            <div class="text">Deliver API products like Mobile Deposit...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap slide-xs slide-sm" data-slideindex="1">
                                <div class="solution-card insurance">
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">Insurance</div>
                                            <div class="text">Deliver API products like Add a Car...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap slide-xs slide-sm" data-slideindex="2">
                                <div class="solution-card healthcare">
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">Healthcare</div>
                                            <div class="text">Deliver API products like Know Your Deductible...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrap hidden-xs slide-sm" data-slideindex="3">
                                <div class="solution-card retail">
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">Retail</div>
                                            <div class="text">Deliver API products like Buy Online...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end INDUSTRIES-->



    <!-- ================================== CLIENTS-->
    <div class="container-fluid navsection-waypoint" id="section-8">
        <div class="row">
            <div class="module-wrap">
                <div class="module customers logofarm-module">
                    <div class="section-header">Customers that have ignited the possibilities</div>
                    <div class="body">
                        <div class="logofarm">
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/Anthem.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/tmobile.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/CNA.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/kohls.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/citi.png"></div>

                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/staples.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/lowes.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/aci.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/metlife.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/allstate.png"></div>

                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/manulife.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/IRS.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/nedbank.png"></div>
                            <div class="customer-logo"><img class="img-responsive" src="http://www.digitalml.com/wp-content/uploads/2017/12/petrobas.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== end CLIENTS-->
    <?php /* digitalml_get_template_part('partial-templates/_vertical-nav-dots.php', array(
	'section_count' => 8,
    'container_class' => 'hidden-xs'
)); */ ?>
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
        'use strict';

        // DEFINE animations
        function initHomepageAnimatedTransitions() {
            $('.animated').fadeTo( 0, 0.0 );

            // BUSINESS-IT diagram
            window.animateElementCSS({
                el: '#section-2 .diagram .middle',
                down: 'zoomAndPulseIn',
                up: 'fadeOut',
                waypointEl: '#section-2',
                waypointOffset: '50%',
                doneClass: 'in',
                startVisible: true
            }/*, function () {
             $('#section-2 .diagram .middle').addClass('pulse')
             }*/);
            window.animateElementCSS({
                el: '#section-2 .diagram .front',
                down: 'zoomAndPulseIn',
                up: 'fadeOut',
                waypointEl: '#section-2',
                waypointOffset: '50%',
                doneClass: 'in',
                startVisible: true
            });
            window.animateElementCSS({
                el: '#section-2 .diagram .back',
                down: 'fadeInDownSmall',
                up: 'fadeOutUpSmall',
                waypointEl: '#section-2',
                waypointOffset: '40%',
                doneClass: 'in'
            });

            // IGNITE feature slides
            window.animateElementCSS({
                el: '.feature.main',
                down: 'fadeInUp',
                up: 'fadeOutDown',
                waypointEl: '#section-3',
                waypointOffset: '75%',
                doneClass: 'in'
            });
            window.animateElementCSS({
                el: '.feature.left',
                down: 'bounceInRightSmall',
                up: 'fadeOut',
                waypointEl: '#section-3',
                waypointOffset: '85%',
                doneClass: 'in',
                startVisible: true
            });
            window.animateElementCSS({
                el: '.feature.right',
                down: 'bounceInLeftSmall',
                up: 'fadeOut',
                waypointEl: '#section-3',
                waypointOffset: '85%',
                doneClass: 'in',
                startVisible: true
            }, function () {
                $('.feature.bounceInLeftSmall,.feature.bounceInRightSmall').addClass('in')
            });

            // APML diagram
            window.animateElementCSS({
                el: '#section-4 .diagram .back',
                down: 'fadeIn',
                up: 'fadeOut',
                waypointEl: '#section-4',
                waypointOffset: '50%',
                doneClass: 'in'
            });
            window.animateElementCSS({
                el: '#section-4 .diagram .front',
                down: 'zoomAndSwellIn',
                up: 'fadeOut',
                waypointEl: '#section-4',
                waypointOffset: '45%',
                doneClass: 'in'
            });
        }

        $(document).on('ready', function($) {
            // helper nav
            //window.initVerticalNav();

            // DO animations
            initHomepageAnimatedTransitions();
        });

    })(jQuery);
</script>




<?php get_footer(); ?>

