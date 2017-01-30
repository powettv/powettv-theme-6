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

// Include Asset loader helper class.
//require_once( POWETTV_PATH . '/inc/class-asset-loader.php' );

// This is where the assets actually get loaded.
require_once( POWETTV_PATH . '/inc/assets.php' );
