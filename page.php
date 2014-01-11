<?
/**
* Default Page template
*
* @package vietmoz base 1.0 
* @since vietmoz base 1.0 
*/
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>