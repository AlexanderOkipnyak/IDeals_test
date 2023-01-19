<nav class="nav-social">
<?php if (has_nav_menu('social')) {
    wp_nav_menu( array(
        'container'      => 'ul',
        'menu_class'     => 'social-menu',
        'menu_id'        => 'socialmenu',
        'depth'          => 1,
        'theme_location' => 'social',
    ));
} ?>
</nav>