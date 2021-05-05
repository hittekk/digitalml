<?php

include_once 'lib/common.php';
include_once 'lib/resource.php';
//include_once 'lib/seed.php';
include_once 'lib/bootstrap_walker_nav_menu.php';

//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

//Add menu support and register main menu
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'main_menu' => 'Main Menu'
  		)
  	);
}

// Bootstrap_Walker_Nav_Menu setup
if ( ! function_exists( 'bootstrap_setup' ) ):
	function bootstrap_setup(){
		add_action( 'init', 'register_menu' );
		function register_menu(){
			register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
			register_nav_menu( 'top-bar-secondary', 'Bootstrap Top Menu Secondary' );
		}
 	}
endif;
add_action( 'after_setup_theme', 'bootstrap_setup' );


// add filter vars
function add_filter_query_vars( $vars ){
/*	$vars[] = "bylocation";
	$vars[] = "byinvestment";
	$vars[] = "byteammember";
	$vars[] = "bygeography";
	$vars[] = "byindustry";
	$vars[] = "bycontenttype";*/
	return $vars;
}
add_filter( 'query_vars', 'add_filter_query_vars' );

function update_cmb2_meta_box_url( $url ) {
    /*
     * If you use a symlink, the css/js urls may have an odd path stuck in the middle, like:
     * http://SITEURL/wp-content/plugins/Users/jt/Sites/CMB2/cmb2/js/cmb2.js?ver=X.X.X
     * Or something like that. http://digitalml.local.com/digitalmlE:/doug/web-design/hfc-digitalml/digitalml%20WP/wp-content/plugins/video-background/framework/css/cmb2.min.css?ver=4.7.1
     *
     * INSTEAD of completely replacing the URL,
     * It is best to do a str_replace. This ensures you only change the url if it's
     * pointing to the broken resource. This ensures that if another version of CMB2
     * is loaded (i.e. in a 3rd part plugin), that their correct URL will load,
     * rather than forcing yours.
     */

    return str_replace( 'E:/doug/web-design/hfc-digitalml/digitalml WP', '', $url );
}
add_filter( 'cmb2_meta_box_url', 'update_cmb2_meta_box_url' );

// add paging/load-more actions
/*add_action( 'wp_ajax_nopriv_ajax_pagination', 'digitalml_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'digitalml_ajax_pagination' );

function digitalml_ajax_pagination() {
	// take the passed in query data and the template-part to load, and then load it and echo the output
	$ajax_listing_query_args = array(
		'post_type' => array($_POST['post_type']),
		'post_status' => array($_POST['post_status']),
		'posts_per_page' => $_POST['posts_per_page'],
		'paged' => $_POST['page'],
		'orderby' => $_POST['orderby'],
		'order' => $_POST['order']
	);
	// display markup for integrated query results
	digitalml_get_template_part($_POST['template'], array(
		'query_args' => $ajax_listing_query_args,
		'show_header' => $_POST['show_header'],
		'truncate_title' => $_POST['truncate_title'],
		'container_classname' => $_POST['container_classname'],
		'filter_teammember' => $_POST['filter_teammember'],
		'filter_investment' => $_POST['filter_investment'],
		'filter_contenttype' => $_POST['filter_contenttype']
    ));
    die();
}*/

// add a shortcode to insert post_thumbnail url into content
// usage [setimagebg]

add_shortcode('setimagebg','insert_post_imageurl_as_bgimage');
function insert_post_imageurl_as_bgimage( $atts ) {
	global $post;
	$options = shortcode_atts( array(
        'image' => 'featured'
    ), $atts );

	switch($options['image']) {
		case 'icon':
			$thumbnailurl = get_post_meta( $post->ID, '_homepage_module_iconimage', true );
			break;
		case 'featured':
		default:
			if ( ! get_post_thumbnail_id( $post->ID ) ) {
				return false;
			} //no thumbnail found

			//get the post thumbnail url
			$thumbnailurl = get_the_post_thumbnail_url( $post->ID, "full" );
			break;
	}
	$styleString = "style=\"background-image: url('" . $thumbnailurl . "')\"";

	return $styleString;
}


// add a shortcode to insert post_thumbnail url into content
// usage [postimageurl]

add_shortcode('postimageurl','insert_post_imageurl');
function insert_post_imageurl( $atts ) {
	global $post;
	$options = shortcode_atts( array(
        'image' => 'featured'
    ), $atts );

	switch($options['image']) {
		case 'icon':
			$thumbnailurl = get_post_meta( $post->ID, '_homepage_module_iconimage', true );
			break;
		case 'featured':
		default:
			if ( ! get_post_thumbnail_id( $post->ID ) ) {
				return false;
			} //no thumbnail found

			//get the post thumbnail url
			$thumbnailurl = get_the_post_thumbnail_url( $post->ID, "full" );
			break;
	}

	return $thumbnailurl;
}


// START THEME OPTIONS
// custom theme options for user in admin area - Appearance > Theme Options
function digitalml_theme_menu() {
	add_theme_page( 'Theme Option', 'Theme Options', 'manage_options', 'digitalml_theme_options.php', 'digitalml_theme_page');
}
add_action('admin_menu', 'digitalml_theme_menu');

function digitalml_theme_page() {
?>
	<div class="section panel">
		<h1>digitalML Custom Theme Options</h1>
		<form method="post" enctype="multipart/form-data" action="options.php">
			<hr>

		<?php
          settings_fields('digitalml_theme_options');

          do_settings_sections('digitalml_theme_options.php');
          echo '<hr>';
        ?>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
<?php
}

add_action( 'admin_init', 'digitalml_register_settings' );
/**
 * Function to register the settings
 */
function digitalml_register_settings() {
    // Register the settings with Validation callback
    register_setting( 'digitalml_theme_options', 'digitalml_theme_options' );

    // Add settings section
    add_settings_section( 'digitalml_text_section', 'Social Links', 'digitalml_display_section', 'digitalml_theme_options.php' );

	// TODO: add youtube channel
	/*
    $field_args = array(
      'type'      => 'text',
      'id'        => 'youtube_link',
      'name'      => 'youtube_link',
      'desc'      => 'Youtube Link - Example: https://www.youtube.com/channel/channel_id',
      'std'       => '',
      'label_for' => 'youtube_link',
      'class'     => 'css_class'
    );

    // Add youtube field
    add_settings_field( 'youtube_ink', 'Youtube', 'digitalml_display_setting', 'digitalml_theme_options.php', 'digitalml_text_section', $field_args );
	*/

    /*$field_args = array(
      'type'      => 'text',
      'id'        => 'investorlogin_link',
      'name'      => 'investorlogin_link',
      'desc'      => 'Investor Login Link - Example: https://riverwoodcapital.altareturn.com/_layouts/CBALogin/LoginIP_enus.aspx',
      'std'       => '',
      'label_for' => 'investorlogin_link',
      'class'     => 'css_class'
    );

    // Add Investor Login field
    add_settings_field( 'investorlogin_link', 'Investor Login Link', 'digitalml_display_setting', 'digitalml_theme_options.php', 'digitalml_text_section', $field_args );*/

/*	$field_args = array(
	   'type'      => 'text',
	   'id'        => 'linkedin_link',
	   'name'      => 'linkedin_link',
	   'desc'      => 'LinkedIn Link - Example: https://www.linkedin.com/company/riverwood-capital',
	   'std'       => '',
	   'label_for' => 'linkedin_link',
	   'class'     => 'css_class'
	 );

	 // Add LinkedIn field
	 add_settings_field( 'linkedin_link', 'LinkedIn', 'digitalml_display_setting', 'digitalml_theme_options.php', 'digitalml_text_section', $field_args );*/

    // TODO: Add settings section title here
    add_settings_section( 'section_name_tbd', 'More settings coming soon...', 'digitalml_display_section', 'digitalml_theme_options.php' );

    // Create textarea field
    $field_args = array(
      'type'      => 'textarea',
      'id'        => 'settings_field_1',
      'name'      => 'settings_field_1',
      'desc'      => 'Custom Setting Description TBD',
      'std'       => '',
      'label_for' => 'settings_field_1'
    );

    // section_name should be same as section_name above in 1st arg of add_settings_section
    add_settings_field( 'settings_field_1', 'Custom Setting TBD', 'digitalml_display_setting', 'digitalml_theme_options.php', 'section_name_tbd', $field_args );


    // Copy lines for $field_args and add_settings_field within that section
    // Copy line width add_settings_section for a new section and then lines for $field_args and add_settings_field to create a field in that section
}

/**
 * Function to add extra text to display on each section
 */
function digitalml_display_section($section){

}


// allow wordpress post editor functions to be used in theme options
function digitalml_display_setting($args)
{
    extract( $args );

    $option_name = 'digitalml_theme_options';
    $options = get_option( $option_name );

    switch ( $type ) {
	    case 'text':
		    $options[$id] = stripslashes($options[$id]);
		    $options[$id] = esc_attr( $options[$id]);
		    echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";
		    echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
		    break;
	    case 'textarea':
		    $options[$id] = stripslashes($options[$id]);
		    //$options[$id] = esc_attr( $options[$id]);
		    $options[$id] = esc_html( $options[$id]);

		    printf(
			    wp_editor($options[$id], $id,
				    array('textarea_name' => $option_name . "[$id]",
	                      'style' => 'width: 200px' )
			    )
		    );
		    // echo "<textarea id='$id' name='" . $option_name . "[$id]' rows='10' cols='50'>".$options[$id]."</textarea>";
		    // echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
		    break;
    }
}

function digitalml_validate_settings($input) {
	foreach($input as $k => $v) {
        $newinput[$k] = trim($v);

        // Check the input is a letter or a number
        if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
	        $newinput[$k] = '';
        }
	}
	return $newinput;
}

// END THEME OPTIONS

// Add custom styles to theme options area
add_action('admin_head', 'custom_admin_options_style');
function custom_admin_options_style() {
  echo '<style>
    .appearance_page_digitalml_theme_options .wp-editor-wrap {
      width: 75%;
    }
    .regular-textcss_class {
    	width: 50%;
    }
    .appearance_page_digitalml_theme_options h3 {
    	font-size: 2em;
    	padding-top: 40px;
    }
  </style>';
}

// Customize admin menu view
add_action( 'admin_menu', 'customize_admin_menus' );
function customize_admin_menus() {
/*	remove_menu_page( 'edit.php' );                   //hide Posts
	remove_menu_page( 'edit-comments.php' );          //hide Comments */
}

/**
 * Load site scripts.
 */
function bootstrap_theme_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Custom theme version number. Update upon each major release.
	$version = '1.0.1';

	if (!is_front_page()){
		wp_enqueue_script( 'jquery' );
		// jQuery.

		// slide menus
		wp_enqueue_script( 'modernizr.custom', $template_url . '/js/vendor/modernizr.custom.js', array('jquery' ), null, false );
		wp_enqueue_script( 'classie', $template_url . '/js/vendor/classie.js', array('jquery' ), null, true );

		// Bootstrap
		wp_enqueue_script( 'bootstrap-script', $template_url . '/js/bootstrap/bootstrap.min.js', array( 'jquery' ), null, true );
		//wp_enqueue_script( 'bootstrap-select-script', $template_url . '/js/bootstrap/bootstrap-select.min.js', array( 'jquery' ), null, true );

		// jQuery Mobile Touch events
		wp_enqueue_script( 'jquery-mobile-touch-script', $template_url . '/js/jquery.mobile.touch.min.js', array( 'jquery' ), null, true );

		// slick carousels
		wp_enqueue_script( 'slick-script', $template_url . '/js/vendor/slick.min.js', array( 'jquery' ), null, true );

		// scroller waypoints
		wp_enqueue_script( 'waypoints-script', $template_url . '/js/jquery.waypoints.min.js', array( 'jquery' ), null, true );

		// sticky-kit
		wp_enqueue_script( 'sticky-kit', $template_url . '/js/jquery.sticky-kit.min.js', array( 'jquery' ), null, true );

		// bootstrap hover dropdown
		wp_enqueue_script( 'hover-dropdown', $template_url . '/js/bootstrap-hover-dropdown.min.js', array( 'jquery' ), null, true );

		// parallax
		wp_enqueue_script( 'parallax', $template_url . '/js/parallax.js', array( 'jquery' ), null, true );

		// mixitup
		wp_enqueue_script( 'mixitup', $template_url . '/js/mixitup.js', array( 'jquery' ), null, true );

		// lity
		wp_enqueue_script( 'lity', $template_url . '/js/lity.js', array( 'jquery' ), null, true );

		// Main Script
		wp_enqueue_script( 'digitalml-main-script', $template_url . '/js/index.js', array( 'jquery' ), null, true );

		// animators
		if( is_front_page() || is_page('demo') ) {
			//wp_enqueue_script( 'snap-script', $template_url . '/js/vendor/snap.svg-min.js', array( 'jquery' ), null, true );
			//wp_enqueue_script( 'animators-script', $template_url . '/js/svg-follow.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'homepage-script', $template_url . '/js/homepage.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'digitalmlapp-script', $template_url . '/js/app.js', array( 'jquery' ), null, false );
		}

		// Bootstrap CSS
		wp_enqueue_style( 'bootstrap-style', $template_url . '/css/bootstrap/bootstrap.min.css' );
		//wp_enqueue_style( 'bootstrap-select-style', $template_url . '/css/bootstrap/bootstrap-select.min.css' );
		wp_enqueue_style( 'font-awesome-style', $template_url . '/css/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'lity-style', $template_url . '/css/lity.css' );
		wp_enqueue_style( 'animate-style', $template_url . '/css/vendor/animate.min.css' );
		wp_enqueue_style( 'montserrat-style', $template_url . '/fonts/montserrat/montserrat.css' );

		// Main style manifest
		wp_enqueue_style( 'digitalml-main-style', $template_url . '/css/index.less' );

		// Override CSS
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrap_theme_enqueue_scripts', 1 );

// CUSTOM POST TYPES
function create_post_type() {
	register_post_type( 'careers',
		array(
			'labels' => array(
				'name' => __( 'Careers' ),
				'singular_name' => __( 'Career' ),
				'add_new_item' => __( 'Add new career' ),
				'edit_item' => __( 'Edit career' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor')
		)
	);
	register_post_type( 'releases',
		array(
			'labels' => array(
				'name' => __( 'Releases' ),
				'singular_name' => __( 'Release' ),
				'add_new_item' => __( 'Add new release' ),
				'edit_item' => __( 'Edit release' )
			),
		'public' => true,
		'taxonomies' => array('releases-category'),
		'has_archive' => true,
		'supports' => array('title', 'editor')
		)
	);
	flush_rewrite_rules( false );
}
add_action( 'init', 'create_post_type' );

// CUSTOM POST TYPE TAXONOMIES
function create_custom_taxonomies() {

	register_taxonomy(
		'releases-category',
		array('releases'),
		array(
			'labels' => array(
				'name' => 'Releases Category',
				'add_new_item' => 'Add Release Category',
				'new_item_name' => "New Release Category"
			),
			'show_ui' => true,
			'query_var' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'sort' => true,
			'has_archive' => true,
			'public' => true
		)
	);
}
add_action( 'init', 'create_custom_taxonomies', 0 );

// IMAGE SIZES
add_action('after_setup_theme','add_custom_sizes');
function add_custom_sizes() {
	add_image_size( 'resource-thumb', 600, 310, true );

}

function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}
 
// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );
 
// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

// Thumbnail upscale
function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null; // let the wordpress default function handle this
 
    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
 
    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);
 
    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );
 
    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );




/**
 * Register our sidebars and widgetized areas.
 *
 */
function blogBar_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'blogBar_widgets_init' );


// Custom Excerpts

function resources_excerpts($limit, $custom_text = '' ) {
    return wp_trim_words($custom_text ? $custom_text : get_the_excerpt(), $limit, '&nbsp;&hellip;');
}

?>
