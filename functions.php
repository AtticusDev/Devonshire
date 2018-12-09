<?php
/**
 * Devonshire functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Devonshire
 */


if ( ! function_exists( 'devonshire_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devonshire_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Devonshire, use a find and replace
	 * to change 'devonshire' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'devonshire', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'devonshire' ),
		'top-menu' => esc_html__( 'top menu' ),
		'footer' => esc_html__( 'footer menu' ),
		'general' => esc_html__( 'general menu' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'devonshire_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'devonshire_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devonshire_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devonshire_content_width', 640 );
}
add_action( 'after_setup_theme', 'devonshire_content_width', 0 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Global Settings',
		'menu_title'	=> 'Global Settings',
		'menu_slug' 	=> 'theme-global-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-global-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-global-settings',
	));
		
}

/**
* Hide form labels in gravity forms
*/

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




/**
 * Add CSS/JS Scritps
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap Walker.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';


/**
 * Custom post types.
 */
require get_template_directory() . '/inc/post-types/CPT.php';
//Quote custom post type
require get_template_directory() . '/inc/post-types/register-quotes.php';
//Treatment custom post type
require get_template_directory() . '/inc/post-types/register-treatments.php';
//Condition custom post type
require get_template_directory() . '/inc/post-types/register-conditions.php';
//Consultant custom post type
require get_template_directory() . '/inc/post-types/register-consultants.php';
//Technologies custom post type
require get_template_directory() . '/inc/post-types/register-technology.php';
