<?php
/**
 * Check and setup theme's default settings
 *
 * @package chrishurst
 *
 */
function setup_theme_default_settings() {

	// check if settings are set, if not set defaults.
	// Caution: DO NOT check existence using === always check with == .
	// Latest blog posts style.
	$chrishurst_posts_index_style = get_theme_mod( 'chrishurst_posts_index_style' );
	if ( '' == $chrishurst_posts_index_style ) {
		set_theme_mod( 'chrishurst_posts_index_style', 'default' );
	}

	// Sidebar position.
	$chrishurst_sidebar_position = get_theme_mod( 'chrishurst_sidebar_position' );
	if ( '' == $chrishurst_sidebar_position ) {
		set_theme_mod( 'chrishurst_sidebar_position', 'right' );
	}

	// Container width.
	$chrishurst_container_type = get_theme_mod( 'chrishurst_container_type' );
	if ( '' == $chrishurst_container_type ) {
		set_theme_mod( 'chrishurst_container_type', 'container' );
	}
}
