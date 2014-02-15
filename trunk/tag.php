<?php
/**
 * Tags pages
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Tag: %s', 'vmzwp' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
			</header><!-- .archive-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>