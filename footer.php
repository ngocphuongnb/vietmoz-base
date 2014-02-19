	</div><!-- .wrap -->
</main>
<footer id="colophon">
	<div class="footer-row footer-row-1">
		<div class="wrap">
			<?php dynamic_sidebar( 'footer_row_1' ); ?>
		</div><!-- .wrap -->
	</div><!-- .footer-row-1 -->
	<div class="footer-row footer-row-2">
		<div class="wrap">
			<div class="col">
				<?php dynamic_sidebar( 'footer_col_1' ); ?>
			</div><!-- 1st col -->
			<div class="col">
				<?php dynamic_sidebar( 'footer_col_2' ); ?>
			</div><!-- 2nd col -->
			<div class="col">
				<?php dynamic_sidebar( 'footer_col_3' ); ?>
			</div><!-- 3rd col -->
			<div class="col">
				<?php dynamic_sidebar( 'footer_col_4' ); ?>
			</div><!-- 4th col -->
		</div><!-- .wrap -->
	</div><!-- .footer-row-2 -->
	<div class="footer-row-3 footer-row">
		<div class="wrap">
			<?php dynamic_sidebar( 'footer_row_3' ); ?>
		</div><!-- .wrap -->
	</div>
</footer>
<?php //Code to insert Google Analytics ?>
<?php wp_footer(); ?>
</div><!-- #site-container -->
</body>
</html>