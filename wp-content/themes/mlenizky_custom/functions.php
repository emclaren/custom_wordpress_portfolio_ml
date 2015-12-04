<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ml_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'ml_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function ml_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'ml_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ml_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ml_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function ml_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'ml_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function ml_starter_scripts() {
	wp_enqueue_style( 'ml-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array('jquery'), '20130115', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ml_starter_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';




/**
 * Plugin Name:       Hide Default Posts
 * Plugin URI:        https://gist.github.com/mandiwise/2ea571ae0773b340af5a
 * Description:       Hide post-related screens in the WP admin area, including Categories and Tags.
 * Version:           1.0.0
 * Author:            Mandi Wise
 * Author URI:        http://mandiwise.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
	die;
}
class Hide_Default_Posts {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		// Admin bar and menus customization
    	add_action( 'admin_menu', array( $this, 'remove_menus' ) );
		add_action( 'admin_bar_menu', array( $this, 'remove_admin_bar_menu_items' ), 999 );
		// Redirects for default post type, comments, and default category/tag functionality
		add_action( 'load-edit.php', array( $this, 'redirect_from_default_post_index' ) );
		add_action( 'load-post-new.php', array( $this, 'redirect_from_new_default_post' ) );
		add_action( 'load-edit-tags.php', array( $this, 'redirect_from_new_default_taxonomies' ) );
	}
	/**
    * Remove unused menu items by adding them to the array
    *
    * @since 1.0.0
    */
   public function remove_menus() {
   	global $menu;
   	$restricted = array( 'Posts' );
   	end ($menu);
   	while ( prev( $menu ) ){
   		$value = explode( ' ',$menu[key($menu)][0] );
   		if( in_array( $value[0] != NULL?$value[0]:"" , $restricted ) ){ unset($menu[key($menu)] ); }
   	}
   }
	/**
	 * Remove Admin Bar items
	 *
	 * @since 1.0.0
	 */
	public function remove_admin_bar_menu_items( $wp_admin_bar ) {
	   // Remove the new post link (because we don't use default posts)
	   $wp_admin_bar->remove_node( 'new-post' );
	   // Get a reference to the "new-content "node to modify
	   $new_content_node = $wp_admin_bar->get_node( 'new-content' );
	   // Change the "+ New" link so it doesn't point to default new post screen
	   $new_content_node->href = '';
	   $wp_admin_bar->add_node( $new_content_node );
	}
	/**
	 * Prevent users from getting to the default post type index page
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_default_post_index() {
	   if ( get_current_screen()->post_type == 'post' ) {
	      wp_die( "Sorry, this website doesn't support default WordPress posts." );
	   }
	}
	/**
	 * Prevent users from creating new default WordPress posts
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_new_default_post() {
	   if ( get_current_screen()->post_type == 'post' ) {
	      wp_die( "Sorry, this website doesn't support default WordPress posts." );
	   }
	}
	/**
	 * Prevent users from creating new default WordPress categories or tags
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_new_default_taxonomies() {
	   if (
			get_current_screen()->taxonomy == 'category'
			|| get_current_screen()->taxonomy == 'post_tag'
		) {
	      wp_die( "Sorry, this website doesn't support default WordPress categories or tags." );
	   }
	}
}
new Hide_Default_Posts();
