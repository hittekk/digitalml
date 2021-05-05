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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
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
<body class="with-hero white <?php global $class; echo $class; ?>">
    <div class="wrapper">
    
    <div class="sticky-container">
    	
    	
        <header class="header js-burger-container white">
            <div class="grid-center">
                <div class="col-12_md-10_lg-11">
                    <div class="header-inner">
                        <div class="logo">
                            <a href="<?= site_url() ?>">
                                <img src="<?= get_template_directory_uri() ?>/images/2020refresh/digitalML.svg" alt="digitalML">
                            </a>
                        </div>
                        <div class="header-content">
                            <div class="header-content-inner">
                                <ul class="navigation js-header-menu">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="/ignite-platform-2020/" <?php if (preg_match('|ignite-platform|',$_SERVER['REQUEST_URI'])) echo "class='current'"; ?>>ignite Platform</a>
                                        <ul class="sub-menu js-header-menu-content side-by-side">

											<div>
												<li class="menu-item"><a href="/ignite/">Ignite Platform Overview</a></li>
												<p>A holistic catalog of APIs and Services with extended lifecycle management</p>
											</div>
											
											<div>
	                                            <li class="menu-item"><a href="/ignite-holistic-catalog/">Holistic API and Service Catalog</a></li>
	                                            <p>A single location to discover, reuse and manage</p>

    	                                        <li class="menu-item"><a href="/ignite-extended-service-lifecycle/">Extended API and Service Lifecycle</a></li>
												<p>Scale your APIs fast and safely</p>
    	                                    </div>

                                        </ul>



                                    </li><li class="menu-item menu-item-has-children">
                                        <a href="http://blog.digitalml.com/api-economy/" class="menu-item-link-with-children">Industry Solutions</a>

                                        <ul class="sub-menu js-header-menu-content">

                                            <li class="menu-item"><a href="/banking-payments/">Banking & Payments</a></li>
											<li class="menu-item"><a href="/insurance-and-healthcare/">Insurance & Healthcare</a></li>

                                        </ul>


                                    </li><li class="menu-item menu-item-has-children  menu-item-complex">
                                        <a href="http://blog.digitalml.com/" class="menu-item-link-with-children">Blog & Resources</a>


                                       <div class="complex-menu js-header-menu-content">
                                            <div class="mega-menu-item">
                                                <div class="complex-menu-further">
                                                    <h2>
                                                        <a href="/blog" class="link-arrowed">Blog</a>
                                                    </h2>
                                                </div>
                                                <div class="complex-menu-content">
                                                    <div class="complex-menu-content-navs">
                                                        <div class="complex-menu-content-navs-layout">
                                                            <div class="complex-menu-content-navs-item complex-menu-content-navs-item-wide">
                                                                <div class="complex-menu-content-navs-inner">
                                                                    <ul>
                                                                        <li><a href="/category/api-strategy/">API Strategy</a></li>
                                                                        <li><a href="/category/innovation/">Innovation</a></li>
                                                                        <li><a href="/category/it-modernization/">IT Modernization</a></li>
                                                                        <li><a href="/category/banking-payments-apis/">Banking & Payments</a></li>
                                                                        <li><a href="/category/insurance-healthcare-apis/">Insurance & Healthcare</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mega-menu-item">
                                                <div class="complex-menu-further">
                                                    <h2 style="font-weight: 500;">
                                                        Resources
                                                    </h2>
                                                </div>

                                                <div class="complex-menu-content">
                                                    <div class="complex-menu-content-navs-inner">
                                                        <ul class="mega-menu-list">
                                                            <li>
                                                                <div class="dual-box-content">
                                                                <strong>Report</strong>
                                                                <a target="_blank" href="https://go.digitalml.com/IDCspotlight"><h4>IDC Digital Transformation Success Requires an API-centric Approach</h4></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dual-box-content">
                                                                <strong>Webinar</strong>
                                                                <a target="_blank" href="https://go.digitalml.com/APIs_as_a_Platform_Website"><h4>APIs as a Platform for Business Transformation featuring Forrester</h4></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                            <div class="dual-box-content">
                                                            <strong>Report</strong>
                                                            <a target="_blank" href="https://go.digitalml.com/forrester-API-design-report"><h4>Forrester’s APIs Design and Documentation</h4></a>
                                                        </div>
                                                            </li>
                                                 
                                
                                                 
                                                        <ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li><li class="menu-item menu-item-has-children ">
                                        <a href="/about-us/" >Company</a>
									
										<ul class="sub-menu js-header-menu-content">
											<li class="menu-item"><a href="/about-us/">About Us</a></li>
                                            <li class="menu-item"><a href="/careers/">Careers</a></li>
                                         </ul>


                                    </li>
                                </ul>
                                <div class="header-more">
                                    <a href="/contact/" class="button">Contact Us</a>
                                </div>
                            </div>
                            <div class="header-contacts">
                                <ul>
                                    <li><a href="https://na87.salesforce.com/sserv/login.jsp?orgId=00D300000006CbF">Customer portal</a></li>
                                    <li>USA: +1-415-373-0300</li>
                                    <li>UK: +44 1344 424257</li>
                                </ul>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="burger-trigger js-burger">
            					<span class="burger-trigger-holder">
            						<span class="burger-trigger-line"></span>
            					</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="cookie js-cookie">
            <div class="cookie-content">
                <strong>Use of cookies</strong>
                <p>We use cookies to make the website optimal and to continuously improve it. By continuing to use the site, you consent to the use of cookies. Please refer to the
                    <a href="/digitalml-privacy-policy/">privacy policy</a> for more information.</p>
            </div>
            <div class="cookie-accept">
                <a href="#" class="cookie-btn js-close-cookie">Ok</a>
            </div>
        </div>