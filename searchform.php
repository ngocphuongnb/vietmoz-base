<?php
/**
 * The template for displaying search forms in vietmoz base 1.0 
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Tìm kiếm:', 'label', 'vmzwp' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Nhập từ khóa tìm kiếm &hellip;', 'placeholder', 'vmzwp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Tìm kiếm', 'submit button', 'vmzwp' ); ?>">
</form>