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
  'name' => __( 'VietMoz Main sidebar' ),
  'id' => 'sidebar-1',
  'description' => __( 'Aside area.' ),
  'before_widget' => '<aside id="%1$s" class="main-widget widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Top left sidebar' ),
  'id' => 'top_nav_left',
  'description' => __( 'Top left widgets area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Top right sidebar' ),
  'id' => 'top_nav_right',
  'description' => __( 'Top right widgets area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Header - Banner sidebar' ),
  'id' => 'header_sidebar',
  'description' => __( 'Header - Banner widgets area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Main menu' ),
  'id' => 'main_menu',
  'description' => __( 'Main menu area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Main menu' ),
  'id' => 'main_menu',
  'description' => __( 'Main menu area.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Home Widget row 1' ),
  'id' => 'home-1',
  'description' => __( 'Home Widget row 1.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Home Widget row 2' ),
  'id' => 'home-2',
  'description' => __( 'Home Widget row 2.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Home Widget row 3' ),
  'id' => 'home-3',
  'description' => __( 'Home Widget row 3.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Home Widget row 4' ),
  'id' => 'home-4',
  'description' => __( 'Home Widget row 4.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer row 1' ),
  'id' => 'footer_row_1',
  'description' => __( 'Footer row 1.' ),
  'before_title' => '',
  'after_title' => ''
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer col 1' ),
  'id' => 'footer_col_1',
  'description' => __( 'Footer col 1.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer col 2' ),
  'id' => 'footer_col_2',
  'description' => __( 'Footer col 2.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer col 3' ),
  'id' => 'footer_col_3',
  'description' => __( 'Footer col 3.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer col 4' ),
  'id' => 'footer_col_4',
  'description' => __( 'Footer col 4.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));
register_sidebar(array(
  'name' => __( 'VietMoz Footer row 3' ),
  'id' => 'footer_row_3',
  'description' => __( 'Footer row 3.' ),
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