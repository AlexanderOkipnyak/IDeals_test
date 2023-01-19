<?php
	function get_clients_shc( $atts, $content ) {
		$clients = get_posts( array(
			'numberposts' => -1,
			'order'       => 'ASC',
			'post_type'   => 'clients',
			'suppress_filters' => true
		));
		$str='<ul class="clients_list">';
		foreach( $clients as $client ){
			setup_postdata( $client );
			$str.='<li><a href="'.get_the_permalink($client->ID).'">'.get_the_post_thumbnail( $client->ID, 'home_clients').'</a></li>';
			//$str.=get_the_title($client->ID);
		}
		$str.='</ul>';
		wp_reset_postdata();
        return $str;
    }
    add_shortcode( 'get_clients', 'get_clients_shc' );
?>