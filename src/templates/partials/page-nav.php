<?php
/**
 * Page Header - Contains the nav.
 * We are using a technique for a pure css accessible mobile menu.
 * SEE: http://codepen.io/jonraedeke/pen/WRwJQX?editors=1100
 *
 * @package powettv
 */

// Retrieve the markup for the standard menu navigation.
$header_nav = wp_nav_menu( array(
		'theme_location' => 'primary',
		'container' => false,
		'menu_class' => 'page-nav__list',
		'menu_id' => false,
		'depth' => 1,
		'echo' => false,
	)
);

// Retrieve the markup for the off-canvas menu navigation (mobile).
$off_canvas_nav = wp_nav_menu( array(
		'theme_location' => 'off-canvas',
		'container' => false,
		'menu_class' => 'page-nav__off-canvas-list',
		'menu_id' => false,
		'depth' => 1,
		'echo' => false,
	)
);

?>
	<div class="page-nav">
		<input type="checkbox" id="page-nav__off-canvas-list-toggle" class="page-nav__off-canvas-list-toggle" aria-hidden="true" />
		<label for="page-nav__off-canvas-list-toggle" class="page-nav__burger-button" aria-hidden="true">
			Expand the menu
			<span class="page-nav__burger-button-icon-line"></span>
			<span class="page-nav__burger-button-icon-line"></span>
			<span class="page-nav__burger-button-icon-line"></span>
		</label>
		<?php echo wp_kses_post( $off_canvas_nav ); ?>
		<?php echo wp_kses_post( $header_nav ); ?>
	</div>

