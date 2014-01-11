<?php
/**
 * The Header.
 *
 * Design by thietkeweb.vietmoz.com
 *
 * @package VietMoz Base
 * @since VietMoz Base 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" role="banner">
    <?php if ( is_active_sidebar( 'top_nav_left' ) || is_active_sidebar( 'top_nav_right' ) ) : ?>
	<div id="site-top-nav">
		<div class="wrap">
            <?php if ( is_active_sidebar( 'top_nav_left' ) ) : ?>
			<div class="left top-nav">
				<?php dynamic_sidebar( 'top_nav_left' ); ?>
			</div><!-- .left.top-nav -->
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'top_nav_right' ) ) : ?>
			<div class="right top-nav">
				<?php dynamic_sidebar( 'top_nav_right' ); ?>
			</div><!-- .right.top-nav -->
            <?php endif; ?>
		</div><!-- .wrap -->
	</div><!-- #top-nav -->
    <?php endif; ?>
	<div id="site-header">
		<div class="logo left">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php //display logo as option ?>
				</a>
			</h1>
			<?php if($vmzData['site_slogan']): ?>
			<div class="site-slogan">
				<span><?php echo $vmzData['site_slogan']; ?></span>
			</div><!-- .site-slogan -->
			<?php endif; ?>
		</div><!-- .logo.left -->
        <?php if ( is_active_sidebar( 'header_sidebar' ) ) : ?>
		<div class="right header-sidebar">
			<?php dynamic_sidebar( 'header_sidebar' ); ?>
		</div><!-- .right.header-sidebar -->
        <?php endif; ?>
	</div><!-- #masthead -->
    <?php if ( is_active_sidebar( 'main_menu' ) ) : ?>
	<nav id="site-nav" class="main-nav">
		<?php dynamic_sidebar('main_menu'); ?>  
	</nav><!-- #site-nav.main-nav -->
    <?php endif; ?>
</header><!-- #site-header -->
<main>