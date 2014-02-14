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
			<div id="home-widget row-1" class="widget-area">
				<?php dynamic_sidebar( 'home-1' ); ?>
			</div><!-- #home-widget row-1 -->
	<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>