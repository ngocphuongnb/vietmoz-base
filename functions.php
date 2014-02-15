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
include 'inc/register_sidebars.php';
 
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
add_action( 'wp_enqueue_scripts', 'vmzwp_enqueue' );
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
add_action('admin_enqueue_scripts', 'vmz_register_script');

function my_login_logo() { ?>
    <style type="text/css">
        body{
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg-login.png)!important;
            background-size:100% 100%!important;
        }
        body.login div#login h1 a {
            width:300px;
            height:80px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            padding-bottom: 30px;
            background-size:300px 80px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return 'http://thietkeweb.vietmoz.com';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


/**
 * Set the content width for image, prevent large image 
 *
 * @since Shape 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 1366; /* pixels */