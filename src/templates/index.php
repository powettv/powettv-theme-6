<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package powettv
 */

get_header();
?>
			<div class="grid">
				<div class="grid__row">
					<div class="grid__8">
						<?php get_template_part( 'partials/post', 'loop' ); ?>
					</div>
					<div class="grid__4"
						<?php get_template_part( 'partials/sidebar', 'right' ); ?>
					</div>
				</div>
			</div>
<?php
get_footer();
