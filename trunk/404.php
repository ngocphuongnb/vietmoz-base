<?php
/**
 * 404 pages (Not Found)
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Trang bạn truy cập không tồn tại!', 'vmzwp' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Chúng tôi xin lỗi, nhưng không có trang nào phù hợp với truy vấn của bạn. Có thể bạn đã gõ sai địa chỉ, hoặc các trang không còn tồn tại. Hãy dùng thanh tìm kiếm để tìm thông tin bạn cần.', 'vmzwp' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>