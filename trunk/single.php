<?php
/**
* Single template
*
* @package vietmoz base 1.0 
* @since vietmoz base 1.0 
*/
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>