<?php
/**
 * Assets
 * This is where our assets actually get loaded.
 * Assets include scripts, styles, theme images, etc.
 *
 * @package  powettv
 */

/**
 * Add our styles and scripts.
 */
function add_powettv_scripts_styles() {
	wp_enqueue_style( 'powettv-screen', POWETTV_URL . '/css/powettv-screen.css' );
}

add_action( 'wp_enqueue_scripts', 'add_powettv_scripts_styles' );
