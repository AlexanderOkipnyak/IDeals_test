<?php

/***************************
 * Register menus
 ***************************/
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'navigation' => 'Main Menu',
		)
	);		
}

/***************************
 * Gerister other js script
 ***************************/

	function my_scripts_method(){		
		wp_register_script('custom_script',
			get_template_directory_uri() . '/dist/main.js',
			array('jquery'),
			'1.0' );  				 	
		wp_enqueue_script('custom_script');	

		wp_enqueue_style( 'jm-owlcarousel2-css', get_template_directory_uri().'/js/owlcarousel2/assets/owl.carousel.min.css', false, '2.3.4', 'all' );
		wp_enqueue_style( 'style', get_template_directory_uri().'/src/style.css', false, '2.3.4', 'all' );
	}
	
	add_action('wp_enqueue_scripts', 'my_scripts_method');

/***************************
 * Add new image size
 ***************************/	
 
	add_image_size( "home_news", 302, 302, true ); 
	add_image_size( "home_clients", 210, 135, true ); 
	add_image_size( "archive_img", 810, 454, true ); 

/***************************
 * Add post thumbnails
 ***************************/

	add_theme_support( 'post-thumbnails' );	

/***************************
 * Add custom logo
 ***************************/
add_theme_support( 'custom-logo', array(
	'height'      => 37,
	'width'       => 63
) );

/***************************
 * Excerpt last chars
 ***************************/

function new_excerpt_more( $more ) {
	
	return '...';
	
}

add_filter('excerpt_more', 'new_excerpt_more');


add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

    $form = '
    <form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <input type="text" value="' . get_search_query() . '" class="search-field" name="s" id="s" placeholder="Search here..."/>
        <button class="search-submit" type="submit"></button>
    </form>';

    return $form;
}

add_filter( 'paginate_links_output', 'my_paginate_links_output', 10, 2 );


function my_paginate_links_output( $output, $args )
{
    if( $args['current'] == 1 )
    {
        $prev = '<span class="prev page-numbers inactive">'.$args['prev_text'].'</span>';
        $output = $prev . "\n" . $output;
    }

    if( $args['total'] == $args['current'] )
    {
        $next = '<span class="next page-numbers inactive">'.$args['next_text'].'</span>';
        $output .= "\n" . $next;
    }

    return $output;
}
add_action('template_redirect', 'redirect_post_type_clients');
function redirect_post_type_clients(){
	if(!is_singular('clients')){
		return;
	}
	wp_redirect(esc_url(get_home_url()));
	exit();
}
?>