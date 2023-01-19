<?php

/*
 * Clients post type
 */

    function create_clients_post_type() {  
        register_post_type( 'clients',  
            array(  
                'labels' => array(  
                    'name' => __( 'Clients' ),  
                    'singular_name' => __( 'Clients' )  
                ),  
            'public' => true, 
            'sort' => true,
            'rewrite' => array( 'slug' => 'clients',  'with_front' => false),
            'menu_position' => 5,             
            'capability_type' => 'page', 
            'supports' => array('title', 'thumbnail', 'editor')
            )  
        );  
    }  
	
	/*
	 * Add post type
	 */
	
    add_action( 'init', 'create_clients_post_type' ); 

?>