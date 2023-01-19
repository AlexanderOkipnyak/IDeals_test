<nav class="nav-secondary">
<?php if (has_nav_menu('secondary')) {
	wp_nav_menu( array(
		'container'      => 'ul',
		'menu_class'     => 'secondary-menu',
		'menu_id'        => 'secondarymenu',
		'depth'          => 1,
		'theme_location' => 'secondary',
	));
} ?>
</nav>