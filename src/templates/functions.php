<?php
/**
 * Functions.php
 * We will only include files in here and not put any actual logic.
 *
 * @package powettv
 */

// Define path and URL.
define( 'POWETTV_PATH', dirname( __FILE__ ) );
define( 'POWETTV_URL', get_template_directory_uri() );

// Initial theme setup.
require_once( POWETTV_PATH . '/inc/theme.php' );

// This is where the assets actually get loaded.
require_once( POWETTV_PATH . '/inc/assets.php' );
