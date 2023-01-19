<nav class="nav-primary">
<?php if (has_nav_menu('primary')) {
	wp_nav_menu( array(
		'container'      => 'ul',
		'menu_class'     => 'primary-menu',
		'menu_id'        => 'primarymenu',
		'depth'          => 0,
		'theme_location' => 'primary',
	));
} ?>
</nav>