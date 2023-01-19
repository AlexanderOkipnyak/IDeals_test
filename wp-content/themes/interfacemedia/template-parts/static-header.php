<?php $header_sticky = get_theme_mod( 'header_sticky', jm_customizer()->get_default( 'header_sticky' ) );
$header_invert_color_scheme = get_theme_mod( 'header_invert_color_scheme', jm_customizer()->get_default( 'header_invert_color_scheme' ) );

if ( $header_invert_color_scheme ) {
    $header_invert_color_scheme_class = 'inverted';
}
if ( $header_sticky ) { ?>
    <div class="sticky-header">
<?php } ?>
    <header id="mobilesiteheader" class="mobile-site-header">
        <div class="mobile-header-wrapper">
            <button class="menu-primary-trigger" aria-expanded="false" aria-controls="menu-primary-items">Menu</button>
            <div class="mobile-header-nav">
                <div class="top_bar">
                <nav class="nav-secondary">
                    <?php if (has_nav_menu('secondary')) {
                        wp_nav_menu( array(
                            'container'      => 'ul',
                            'menu_class'     => 'secondary-menu',
                            'menu_id'        => 'secondarymenu',
                            'depth'          => 0,
                            'theme_location' => 'secondary',
                        ));
                    } ?>
                </nav>
                <!--<div class="search_wrap">
                    <a href="#" class="search_btn"></a>
                    <?php get_search_form( $args ); ?>
                </div>-->
            </div>
            </div>
        </div>
    </header><!-- #mobilesiteheader -->
    <header id="siteheader" class="site-header <?php echo $header_invert_color_scheme_class; ?>" role="banner">
        <div class="wrapper">
            <div class="header_container">
                <?php get_template_part("template-parts/static-logo"); ?>
                <div class="header-sidebar-wrapper">
                    <div class="top_bar">
                        <nav class="nav-secondary">
                            <?php if (has_nav_menu('secondary')) {
                                wp_nav_menu( array(
                                    'container'      => 'ul',
                                    'menu_class'     => 'secondary-menu',
                                    'menu_id'        => 'secondarymenu',
                                    'depth'          => 0,
                                    'theme_location' => 'secondary',
                                ));
                            } ?>
                        </nav>
                        <!--<div class="search_wrap">
                            <a href="#" class="search_btn"></a>
                            <?php get_search_form( $args ); ?>
                        </div>-->
                    </div>
                    <div class="header-nav">
                        <?php get_template_part("template-parts/static-nav"); ?>
                    </div>
                </div>
            </div>
        </div><!-- .wrapper -->
    </header><!-- #siteheader -->
<?php if ( $header_sticky ) { ?></div><?php } ?>