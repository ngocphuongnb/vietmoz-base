<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( is_single() ): ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-meta">
				<span class="entry-date"><?php echo get_the_date(); ?></span>
				<?php if ( comments_open() ) : ?>
					<div class="comments-link">
						<?php comments_popup_link( '<span class="leave-reply">' . __( 'Bình luận', 'vmzwp' ) . '</span>', __( '1 Reply', 'vmzwp' ), __( '% Replies', 'vmzwp' ) ); ?>
					</div><!-- .comments-link -->
				<?php endif; // comments_open() ?>
			</div> <!-- .entry-meta -->
		</header><!-- .entry-header -->
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->
		<footer class="entry-meta">
			<div class="tag-list">
				<?php the_tags(); ?>
			</div>
			<?php edit_post_link( __( 'Edit', 'vmzwp' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	<?php else : ?>
		<!-- Start thumbnail -->
		<?php if( has_post_thumbnail() ) : ?>
		<?php
		$attachment_id = get_post_thumbnail_id( $post_id );
		$size = "full"; // (thumbnail, medium, large, full or custom size)
		$image = wp_get_attachment_image_src( $attachment_id, $size );
		?>
		<div class="cat-entry-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=140&amp;h=140" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
		</div>
		<?php endif; ?>
		<!-- End thumnail -->
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<section class="entry-excerpt">
			<?php the_excerpt(); ?>
		</section><!-- .entry-excerpt -->
		<footer class="entry-meta">
			<div class="tag-list">
				<?php the_tags(); ?>
			</div>
			<?php edit_post_link( __( 'Edit', 'vmzwp' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	<?php endif; ?>
	</article><!-- #post -->