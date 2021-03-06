<?php
/**
 * Chrishurst enqueue scripts
 *
 * @package chrishurst
 */

if ( ! function_exists( 'chrishurst_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function chrishurst_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'chrishurst-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'chrishurst-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );
	}
} // endif function_exists( 'chrishurst_scripts' ).

add_action( 'wp_enqueue_scripts', 'chrishurst_scripts' );
