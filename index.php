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
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'vmzwp' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'vmzwp' ), admin_url( 'post-new.php' ) ); ?></p>
				</section><!-- .entry-content -->
			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'vmzwp' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'vmzwp' ); ?></p>
					<?php get_search_form(); ?>
				</section><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>
			</article><!-- #post-0 -->
		<?php endif; // end have_posts() check ?>
		</div><!-- #content -->
	</div><!-- #primary -->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>