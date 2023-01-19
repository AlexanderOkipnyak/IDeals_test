<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head> 
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			<title>
	    	<?php
				global $page, $paged;
				wp_title( '|', true, 'right' );
				bloginfo( 'name' );
				$site_description = get_bloginfo( 'description', 'display' );
				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
			?>
			</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />  	
		<?php wp_head(); ?>			
	</head>
<body <?php body_class(); ?>>
	<div class="main">
	<nav class="mobile_navigation">
		<?php wp_nav_menu( [
			'theme_location'  => 'navigation',
			'container'       => 'div', 
			'menu_class'      => 'menu', 
		] ); ?>
		<a href="#" class="close_menu">X Close</a>
	</nav>
	<header id="header">
		<a href="#" class="mobile_menu_btn"></a>
		<?php if(function_exists('the_custom_logo')){
			the_custom_logo();
		} else { ?>
			<a href="/" class="custom-logo-link"><img class="custom-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
		<?php } ?>
		<div class="search_container">
			<a href="#" class="search_btn"></a>
			<div class="search_form">
				<?php get_search_form(); ?>
			</div>
		</div>
		<nav class="navigation">
			<?php wp_nav_menu( [
				'theme_location'  => 'navigation',
				'container'       => 'div', 
				'menu_class'      => 'menu', 
			] ); ?>
		</nav>
		
	</header>