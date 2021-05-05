<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="shareaholic:image"
          content="http://www.digitalml.com/wp-content/uploads/2017/02/digitalml-256.png"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style-2020.css"/>
   
    <!-- Hotjar Tracking Code for https://www.digitalml.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:927841,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
	<script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>


</head>
<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
    <symbol id="arrow-right" viewBox="0 0 22 16">
        <defs><path id="keqqa" d="M1318 169.8c-.01.29-.13.6-.33.81l-6.52 6.64c-.44.38-1.29.53-1.78.1a1.18 1.18 0 0 1 .01-1.71l4.58-4.66h-16.74a1.2 1.2 0 0 1-1.22-1.17c0-.65.55-1.17 1.22-1.17h16.74l-4.58-4.66c-.42-.4-.5-1.27-.01-1.71.48-.44 1.36-.3 1.78.1l6.52 6.63c.22.23.33.5.33.8z"/></defs><g><g transform="translate(-1296 -162)"><use xlink:href="#keqqa"/></g></g>
    </symbol>
</svg>
<body class="with-hero white <?=$post->post_name ?>">
  <div id="webinar_banner" class="grid-middle grid-center">
        <div class="col-12_md-10_lg-11">
            <div class="grid-center">
                <div>
                   <span id="webinar_action">
                        Introducing ignite 7&reg; <a href="https://go.digitalml.com/ignite-7" class="highlight-link">Watch On-Demand Webinar <i class="icon-forward"></i></a>
                    </span>
                </div>
            </div>
        </div>
	</div>
    <div class="wrapper">
        <header class="header js-burger-container" >
            <div class="grid-center container">
                <div class="col-12_md-10_lg-11">
                    <div class="menu-header-top">
                  <div class="logo-container menu-mobile-col">
                            <div class="logo">
                                <a href="<?= site_url() ?>">
                                    <img id="img1" src="<?= get_template_directory_uri() ?>/dist/images/digitalML.png" alt="digitalML logo">
									<img id="img2" src="<?= get_template_directory_uri() ?>/dist/images/logo.svg" alt="digitalML logo white">
                                </a>
                            </div>
                        </div>
                        <div class="header-content-menu-mobile">
                            <a href="javascript:void(0);" class="burger-trigger js-burger">
                                    <span class="burger-trigger-holder">
                                        <span class="burger-trigger-line"></span>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-mobile-col">
                        <div class="header-content-container">
                            <div class="header-content-nav">
                                <ul class="navigation js-header-menu">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="/ignite-platform-2020/" <?php if (preg_match('|ignite-platform|',$_SERVER['REQUEST_URI'])) echo "class='current'"; ?>>ignite Platform</a>
                                        <ul id="overview" class="sub-menu js-header-menu-content">
                                            <div class="sub-menu-content">
                                                <div class="sub-menu-item full-row">
                                                    <a href="/ignite/">Overview</a>
                                                    <span>A consistent way to deliver APIS and Services at scale</span>
                                                </div>
                                                <div class="sub-menu-item mobile-indent"><a href="/ignite-holistic-catalog/">Holistic API and <br>Service Catalog</a><span>A single location to discover, reuse and manage</span></div>
                                                <div class="sub-menu-item mobile-indent"><a href="/ignite-extended-service-lifecycle/">Extended API and <br>Service Lifecycle</a><span>Scale your APIs fast and safely</span></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Industry Solutions</a>
                                        <ul class="sub-menu js-header-menu-content">
                                            <div class="sub-menu-content">
                                                <div class="sub-menu-item"><a href="/banking-payments/">Banking and Payments</a><span>Support Bank IT Modernization, New Products and Services, and Banking Regulator Requests</span></div>
                                                <div class="sub-menu-item"><a href="/insurance-and-healthcare/">Insurance & Healthcare</a><span>Support Growth through innovation and new business models, IT Modernization, and Privacy and Compliance</span></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Knowledge</a>
                                        <ul id="resources" class="sub-menu js-header-menu-content">
                                            <div class="sub-menu-content menu-col-3">
                                                <div class="menu-col-content">
                                                <div class="sub-menu-item menu-full-column">
                                                        <div class="sub-menu-item-title">Resources</div>
                                                        <div class="sub-menu-item-list">
                                                            <a href="/resources" class="menu-text-highlight">All Content</a>
                                                            <a href="/resource/future-proof-automate-and-deskill-your-digital-strategy-with-an-extended-lifecycle/">Future-proof, Automate and Deskill your Digital Strategy with an Extended Lifecycle</a>
                                                            <a href="/resources/what-is-a-holistic-and-abstracted-api-catalog/">What is a Holistic and Abstracted API Catalog?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-col-content">
                                                    <div class="sub-menu-item menu-full-column">
                                                        <div class="sub-menu-item-title">Blog</div>
                                                        <div class="sub-menu-item-list">
                                                            <a href="/blog" class="menu-text-highlight">All Topics</a>
                                                            <a href="/category/api-strategy/">API Strategy </a>
                                                            <a href="/category/innovation/">Innovation</a>
                                                            <a href="/category/it-modernization/">IT Modernization</a>
                                                            <a href="/category/banking-payments-apis/">Banking & Payments</a>
                                                            <a href="/category/insurance-healthcare-apis/">Insurance & Healthcare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">About</a>
                                        <ul id="about" class="sub-menu js-header-menu-content  menu-col-small">
                                            <div class="sub-menu-content">
                                                    <div class="sub-menu-item"><a href="/about-us/">Leadership</a></div>
                                                    <div class="sub-menu-item">
                                                        <a href="/careers/">Careers
                                                            
                                                        </a>
                                                        <span class="menu-text-counter">6 Openings</span>
                                                    </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-highlight-color menu-item-force-display">
                                        <a href="/contact/">Contact</a>
                                        <ul id="contact" class="sub-menu last js-header-menu-content">
                                            <div class="sub-menu-content">
                                                <div class="sub-menu-item">
                                                    <a href="/contact/">Contact digitalML</a>
                                                </div>
                                                <div class="sub-menu-item">
                                                    <a href="tel:+14153730300">Call +1 415 373 0300 (US)</a>
                                                </div>
                                                <div class="sub-menu-item">
                                                    <a href="https://calendly.com/digitalml/ignite-introduction" target="_blank">Book a Demo</a>
                                                </div>
                                                <div class="sub-menu-item">
                                                    <a href="tel:+441344424257">Call +44 1344 424257 (UK)</a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="grid-center-nobottom">
                <div class="col-12_md-10_lg-11">
			<div id="secondary_nav">
	<a href="/ignite">Overview</a>
	<a href="/ignite-holistic-catalog/">Holistic API and Service Catalog</a>
	<a href="/ignite-extended-service-lifecycle/">Extended API and Service Lifecycle</a>
</div>
				</div>
			</div>
					
        </header>
		
	<div class="sticky-container">
        <div class="cookie js-cookie">
            <div class="cookie-content">
                <strong>Use of cookies</strong>
                <p>We use cookies to make the website optimal and to continuously improve it. By continuing to use the site, you consent to the use of cookies. Please refer to the
                    <a href="https://www.digitalml.com/digitalml-privacy-policy/">privacy policy</a> for more information.</p>
            </div>
            <div class="cookie-accept">
                <a href="#" class="cookie-btn js-close-cookie">Ok</a>
            </div>
        </div>
