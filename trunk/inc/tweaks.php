<?php
/**
 * Theme tweak
 *
 * Design by thietkeweb.vietmoz.com
 *
 * @package VietMoz Base
 * @since VietMoz Base 1.0
 */
/**
* Get wp_nav_menu() fallback, wp_page_menu(), to show a home link
*
* @since VietMoz Base 1.0
*/
function show_page_menu_args ( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'show_page_menu_args' );