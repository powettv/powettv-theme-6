<?php
/**
 * Contains the WordPress Loop.
 *
 * @package powettv
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/post', 'content' );
	}
}
