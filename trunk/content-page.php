<?php
/**
* template part for page
*
* @package vietmoz base 1.0 
* @since vietmoz base 1.0
*/
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header">
					<h1><?php the_title(); ?></h1>
				</header>
				<section class="page-content">
					<?php the_content(); ?>
				</section>
				<footer class="page-meta">
					<div class="tag-list">
						<?php the_tags(); ?>
					</div>
					<?php edit_post_link( __( 'Edit', 'vmzwp' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .page-meta -->
			</article>