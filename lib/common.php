<?php

$page_url_home = home_url();;
$page_url_platform = '/ignite/';
$page_url_fasttrack = '/fast_track/';
$page_url_resources = '/resources/';
$page_url_aboutus = '/about/';
$page_url_careers = '/careers/';

function digitalml_navigation_markup_template($template, $class) {
    return '<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>';
}
add_filter('navigation_markup_template', 'digitalml_navigation_markup_template', 10, 2);

// Apply a search and replace-type filter to the post content
add_filter('the_content', 'my_content_filter');
function my_content_filter($content) {
	/* e.g. add a class to all image tags:
    $content = preg_replace('#(<img.*?class=")([^"]+?)"#U', '$1some-classname $2"', $content);
	*/
    return $content;
}

// load scripts

function enqueue_riverwood_scripts() {
	// wp_enqueue_script('jquery');
	$screen = get_current_screen(); 
    if($screen->id != 'edit-resource_type'){
		wp_register_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), false, true);
		wp_enqueue_script('jquery-ui');
	}    
    wp_enqueue_style('jquery-ui-style', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css');

	wp_register_script('digitalml-admin', get_template_directory_uri() . '/js/admin.js', array('jquery','jquery-ui'), false, true);
	wp_localize_script('digitalml-admin', 'meta_image',
		array(
			'title' => 'Choose or Upload an Image',
			'button' => 'Use this image',
		)
	);
	wp_enqueue_script('digitalml-admin');
}
add_action('admin_enqueue_scripts', 'enqueue_riverwood_scripts');

// utility methods

function save_meta($post_id, $nonce_name, $field_name, $sanitize = true) {
    if (isset($_POST[$field_name])) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        //check nonce
        wp_verify_nonce(plugin_basename(__FILE__), $nonce_name);

        $field_value = (false === $sanitize) ? $_POST[$field_name] : sanitize_text_field($_POST[$field_name]);
        update_post_meta($post_id, '_' . $field_name, $field_value);
    }
}

function save_checkbox_meta($post_id, $nonce_name, $field_name) {
    if (isset($_POST[$field_name])) {
	    $field_value = 'yes';
    } else {
	    $field_value = '';
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    //check nonce
    wp_verify_nonce(plugin_basename(__FILE__), $nonce_name);

    update_post_meta($post_id, '_' . $field_name, $field_value);
}

function save_code_meta($post_id, $nonce_name, $field_name, $sanitize = true) {
	if (isset($_POST[$field_name])) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		//check nonce
		wp_verify_nonce( plugin_basename( __FILE__ ), $nonce_name );

		$field_value = ( false === $sanitize ) ? $_POST[ $field_name ] : wp_kses( $_POST[ $field_name ], array('\'','\"') );
		update_post_meta( $post_id, '_' . $field_name, $field_value );
	}
}

/**
 * Include a subtemplate file and(optionally) pass arguments to it.
 *
 * @param string $file The file path, relative to theme root
 * @param array $args The arguments to pass to this file. Optional.
 * Default empty array.
 *
 * @return object Use render() method to display the content.
 */
if( !class_exists('Digitalml_ThemeObject') ) {
	class Digitalml_ThemeObject {
		private $args;
		private $file;

		public function __get($name) {
			return $this->args[$name];
		}

		public function __construct($file, $args = array()) {
			$this->file = $file;
			$this->args = $args;
		}

		public function __isset($name){
			return isset( $this->args[$name] );
		}

		public function render() {
			if( locate_template($this->file) ) {
				include( locate_template($this->file) );
			}
		}
	}
}
/**
 * DIGITALML Get Template Part (with args)
 *
 * An alternative to the native WP function `get_template_part`
 *
 * @see PHP class Digitalml_ThemeObject
 * @param string $file The file path, relative to theme root
 * @param array $args The arguments to pass to this file. Optional.
 * Default empty array.
 *
 * @return string The HTML from $file
 */
if( ! function_exists('digitalml_get_template_part') ) {
	function digitalml_get_template_part($file, $args = array()) {
		$template = new Digitalml_ThemeObject($file, $args);
		$template->render();
	}
}
