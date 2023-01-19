<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php do_action('jm_below_head'); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php $page_preloader = get_theme_mod( 'page_preloader', jm_customizer()->get_default( 'page_preloader' ) );
	if ( $page_preloader ) { ?>
	<script>
        jQuery(window).on('load', function() { // makes sure the whole site is loaded 
            jQuery('#status').fadeOut(); // will first fade out the loading animation 
            jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            jQuery('body').delay(350).css({'overflow':'visible'});
        })
    </script>
	<?php } ?>
</head>