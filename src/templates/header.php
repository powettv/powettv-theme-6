<?php
/**
 * Header for the theme.
 * Displays the entire <head> element and everything after til page content begins.
 *
 * @package powettv
 */

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php
		get_template_part( 'partials/page', 'head' );
	?>

</head>
<body <?php body_class(); ?> >
	<div class="site-container">

		<?php get_template_part( 'partials/page', 'header' ); ?>

		<div class="content-container">
