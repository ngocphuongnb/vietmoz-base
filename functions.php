<?php
/**
 * Theme functions
 *
 * Design by thietkeweb.vietmoz.com
 *
 * @package VietMoz Base
 * @since VietMoz Base 1.0
 */
  
 /**
  * Including Other Files
  */
 include 'inc/widgets/image/image.php';
 
 
if (! function_exists('vmzwp_setup') ) :
	/*
	* Setup the theme and register menu, feed, post format.
	*
	* @package VietMoz Base
	* @since VietMoz Base 1.0
	*/
function vmzwp_setup() {
	/**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );
 
    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
    /**
     * Enable support for the Aside Post Format
     */
    //add_theme_support( 'post-formats', array( 'aside' ) );
    /**
     * Register menu, use 1 location, the rest using widgets.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vmzwp' ),
    ) );
}
endif; //vmz_setup
add_action( 'after_setup_theme', 'vmzwp_setup' );
/* Register sidebar */
register_sidebar(array(
  'name' => __( 'Main sidebar' ),
  'id' => 'sidebar-1',
  'description' => __( 'Aside area.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'Top left sidebar' ),
  'id' => 'top_nav_left',
  'description' => __( 'Top left widgets area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'Top right sidebar' ),
  'id' => 'top_nav_right',
  'description' => __( 'Top right widgets area.' ),
  'before_title' => '',
  'after_title' => ''
));

/**
* Enqueue Script and Style
*/
function vmzwp_enqueue() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js', array(), 10012014, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
function vmz_register_script()
{
	wp_register_script( 'js', get_template_directory_uri().'/inc/vmz.js', array('jquery','media-upload','thickbox') );  
	
    wp_enqueue_media();  
    
	wp_enqueue_script('jquery');  

	wp_enqueue_script('thickbox');  
	wp_enqueue_style('thickbox');  

	wp_enqueue_script('media-upload');  
	wp_enqueue_script('js');
}
add_action('admin_enqueue_scripts', 'vmz_register_script');/**
 * Set the content width for image, prevent large image 
 *
 * @since Shape 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 1366; /* pixels */