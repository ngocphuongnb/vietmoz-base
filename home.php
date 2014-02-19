<?php
/**
 * The main template file
 *
 *
 * @package vietmoz base
 * @since vietmoz base 1.0
 * @author Vietmoz Team
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if ( is_active_sidebar( 'home-1' ) ) : ?>
			<div class="home-widget row-1 widget-area">
				<?php dynamic_sidebar( 'home-1' ); ?>
			</div><!-- #home-widget row-1 -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'home-2' ) ) : ?>
			<div class="home-widget row-2 widget-area">
				<?php dynamic_sidebar( 'home-2' ); ?>
			</div><!-- #home-widget row-2 -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'home-3' ) ) : ?>
			<div class="home-widget row-3 widget-area">
				<?php dynamic_sidebar( 'home-3' ); ?>
			</div><!-- #home-widget row-3 -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'home-4' ) ) : ?>
			<div class="home-widget row-4 widget-area">
				<?php dynamic_sidebar( 'home-4' ); ?>
			</div><!-- #home-widget row-4 -->
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>