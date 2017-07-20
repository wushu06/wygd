<?php
/**
 * West Yorkshire Garage Doors WYGD
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Documentation standards:
 * https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/
 *
 * @package		WordPress
 * @subpackage	WYGD
 * @since		1.0.2
 *
 * @author		The Bigger Boat
 */

/**
 * Increase memory and processing time.
 *
 * @since  1.0.1
 */

ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );


/**
 * Define theme path for quicker referencing.
 *
 * @since  1.0.1
 */

define( 'THEME_DIR', get_template_directory_uri() );


/**
 * Load our ACF configuration information.
 *
 * This is required to set up ACF Local JSON.
 *
 * @since 1.0.1
 */

require_once get_template_directory() . '/inc/acf/config.php';


/**
 * Load our helpers file.
 *
 * This contains a number of useful functions used throughout the theme.
 *
 * @since 1.0.2
 */

require_once get_template_directory() . '/inc/helpers/westYorkshire.php';


/**
 * Core theme class.
 *
 * Sets up WordPress hooks for actions and filters that are used in the theme.
 *
 * @since 1.0.1
 */

class westYorkshire {

	/**
	 * Set up our action and filter hooks.
	 */
	public function __construct() {

		/**
		 * Remove Generator Meta Tag.
		 *
		 * @since 1.0.1
		 */

		remove_action( 'wp_head', 'wp_generator' );

		/**
		 * Set up stylesheets and scripts.
		 *
		 * @since 1.0.1
		 */

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		/**
		 * Set up image sizes and menu assignment.
		 *
		 * @since 1.0.1
		 */

		add_action( 'init', array( $this, 'westYokshire_init' ) );
	

		/**
		 * Additional active menu classes.
		 *
		 * @since 1.0.1
		 */

		add_filter('nav_menu_css_class', array( $this, 'add_active_class' ), 10, 2 );


		/*
		* Google Api
		*/

		add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


		/*
		* Excerpt
		 */
		
		


	}
	function my_acf_google_map_api( $api ){
	
		$api['key'] = 'AIzaSyCwXwrp-FcHELStKoqx8ZyzQkEW5zVSPEc';
		
		return $api;
		
	}


	/**
	 * Enqueue scripts and styles for the front end.
	 * 
	 * @since 1.0.1
	 * @access public
	 */

	public function enqueue_styles() {
		// Set up our base stylesheet.

		wp_enqueue_style( 'timepicker-style', THEME_DIR . '/stylesheets/jquery.timepicker.css', array(), '1.0.1' );

		wp_enqueue_style( 'wygd-style', THEME_DIR . '/stylesheets/app.css', array(), '1.0.1' );


        // Add our slick carousel styles
		wp_enqueue_style( 'wygd-slick', THEME_DIR . '/js/slick/slick.css', array(), '1.0.1' );
		wp_enqueue_style( 'wygd-slick-theme', THEME_DIR . '/js/slick/slick-theme.css', array(), '1.0.1' );


		// Include the fontawesome library.
		wp_enqueue_style( 'wygd-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.1' );

		// Add latest jQuery.
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.1.1.min.js', array(), '3.1.1', true );

		
		// Set up our required theme scripts.
		wp_enqueue_script( 'wygd-bootstrap', THEME_DIR . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array( 'jquery' ), '1.0.1', false );
		wp_enqueue_script( 'wygd-slick', THEME_DIR . '/js/slick/slick.min.js', array( 'jquery' ), '1.0.1', false );
		//wp_enqueue_script( 'wygd-viewport', THEME_DIR . '/js/jquery.viewportchecker.js', array( 'jquery' ), '1.0.1', false );
		wp_enqueue_script( 'time-app', THEME_DIR . '/js/jquery.timepicker.js', array( 'jquery' ), '3.1.1', false );
		wp_enqueue_script( 'jquery-cookie', THEME_DIR . '/js/jquery.cookie.js', array( 'jquery' ), '3.1.1', false );

		wp_enqueue_script( 'isotop', THEME_DIR . '/js/masonry.min.js', array( 'jquery' ), '1.0.1', false );
		wp_enqueue_script( 'fittext-app', THEME_DIR . '/js/jquery.fittext.js', array( 'jquery' ), '1.0.1', false );
		
		wp_enqueue_script( 'wygd-app', THEME_DIR . '/js/app.js', array( 'jquery' ), '1.0.1', false );

	}


	/**
	 * Set up the theme information.
	 * 
	 * This assigns image sizes, registers nav menus and enables HTML5 components.
	 * 
	 * @since 1.0.1
	 * @access public
	 */
	
	// Register Custom Navigation Walker
	

	public function westYokshire_init() {
		// Register our menus.
		register_nav_menus( array(
			
			'primary'  => __( 'Primary Menu', 'wygd' )
		) );

		// Register our image sizes.
		add_theme_support( 'post-thumbnails' );

		// Additional image sizes.
		add_image_size( 'technical', 384, 344, array( 'center', 'center' ) );
		add_image_size( 'key-feature', 440, 440, array( 'center', 'center' ) );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );
	}


	/**
	 * Add additional classes to active menu items.
	 * 
	 * @since 1.0.1
	 * @access public
	 */

	public function add_active_class( $classes, $item ) {
		if( $item->menu_item_parent == 0 && 
			in_array( 'current-menu-item', $classes ) ||
			in_array( 'current-menu-ancestor', $classes ) ||
			in_array( 'current-menu-parent', $classes ) ||
			in_array( 'current_page_parent', $classes ) ||
			in_array( 'current_page_ancestor', $classes )
		) {
			$classes[] = 'active';
		}

		return $classes;
	}

	

}

// Here we go! - Mario, 2017
new westYorkshire;
require_once('wp-bootstrap-navwalker.php');
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );