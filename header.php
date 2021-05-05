<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="shareaholic:image"
	content="http://www.digitalml.com/wp-content/uploads/2017/02/digitalml-256.png"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<?php /* TODO: implement head markup eg:
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png"/>
    */ ?>
    <?php wp_head(); ?>
	

</head>

<body <?php body_class(isset($class) ? $class : ''); ?>>

<header>
<?php
$bodyclasses = get_body_class();

$navclass = 'navbar-inverse';

if (in_array('page-template-configurable-template',$bodyclasses)) {
	$navclass = 'navbar-default';
}

if (in_array('page-template-fast-track',$bodyclasses)) {
	$navclass = 'navbar-default';
}

if (in_array('page-template-homepage',$bodyclasses)) {
	$navclass = 'navbar-default';
}

	if (in_array('page-template-event-page',$bodyclasses)) {
	$navclass = 'navbar-default';
}

if ( is_singular('careers') ) { $navclass = 'navbar-default';}
if ( is_singular('releases') ) { $navclass = 'navbar-default';}

?>
	<nav class="navbar digitalml-navbar <?= $navclass ?>" role="navigation">
	    <div class="container">
	        <div class="row">
	            <div class="digitalml-navbar-content">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					  data-target="#menu-main-menu-container" aria-expanded="false"
					  aria-controls="menu-main-menu-container">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-close"></span>
					</button>
	                <a class="digitalml-brand" href="<?= home_url(); ?>"></a>
		            <div class="flex-pad"></div>
	                <div id="menu-main-menu-container" class="digitalml-navbar-primary navbar-collapse collapse navbar-right cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		                <button class="hidden-md hidden-lg navbar-toggle" data-toggle="collapse" data-target="#menu-main-menu-container" aria-expanded="false"
                          aria-controls="menu-main-menu-container">
			                <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-close"></span>
	                    </button>
		                <div class="hidden-md hidden-lg adhoc-navitem">
			                <a href="<?= home_url(); ?>">Home</a>
		                </div>
	                    <?php wp_nav_menu(array('menu' => 'Main', 'theme_location' => 'top-bar', 'menu_class' => 'nav navbar-nav primary-nav', 'depth' => 3, 'container' => false, 'walker' => new Bootstrap_Walker_Nav_Menu)); ?>
		                <div class="hidden-md hidden-lg digitalml-navbar-secondary">
		                    <?php wp_nav_menu(array('menu' => 'Secondary', 'theme_location' => 'top-bar-secondary', 'menu_class' => 'nav navbar-nav secondary-nav', 'depth' => 3, 'container' => false, 'walker' => new Bootstrap_Walker_Nav_Menu)); ?>
		                </div>
		                <div class="hidden-md hidden-lg heel">
			                <ul>
	                            <li><a href="tel:44 1433-424257">+44 1433-424257</a></li>
	                            <li><a href="tel:1-415-373-0300">+1-415-373-0300</a></li>
				                <li><a href="<?= $page_url_aboutus ?>#section-1">Contact Us</a></li>
<?php /*
			                    <li><a href="/path/to/tbd">FAQ</a></li>
*/ ?>
	                        </ul>
			                <ul class="social-links list-inline">
				                <?php digitalml_get_template_part('partial-templates/_social-links.php', array()); ?>
                            </ul>
		                </div>
	                </div>
	                <div class="digitalml-navbar-secondary">
	                    <?php wp_nav_menu(array('menu' => 'Secondary', 'theme_location' => 'top-bar-secondary', 'menu_class' => 'nav navbar-nav secondary-nav', 'depth' => 3, 'container' => false, 'walker' => new Bootstrap_Walker_Nav_Menu)); ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</nav>
</header>
