<?php
/**
 * The template for displaying search forms in vietmoz base 1.0 
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Type keyword...', 'placeholder', 'vmzwp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'vmzwp' ); ?>">
</form>