<?php
/**
 * Theme breadcrumbs.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include_once (TEMPLATEPATH .'/includes/modules/class-breadcrumbs.php');

/**
 * Display the breadcrumbs.
 *
 * @since  1.0.0
 * @return void
 */
function alt_site_breadcrumbs( $args = array() ) {
	$breadcrumbs_visibillity  = true;
	
	$defaults = array(
		//'wrapper_format'    => '<div class="breadcrumbs"><div class="row">%1$s<div class="breadcrumbs__items">%2$s</div></div></div>',
		'page_title_format' => '',
		'separator'         => '—',
		'show_title'        => true,
		'show_items'        => true,
		'path_type'         => 'full', //minified
		'labels'            => array(
			'browse'         => '',
			'error_404'      => esc_html__( '404 Not Found', 'alt' ),
			'archives'       => esc_html__( 'Archives', 'alt' ),
			/* Translators: %s is the search query. The HTML entities are opening and closing curly quotes. */
			'search'         => esc_html__( 'Search results for &#8220;%s&#8221;', 'alt' ),
			/* Translators: %s is the page number. */
			'paged'          => esc_html__( 'Page %s', 'alt' ),
			/* Translators: Minute archive title. %s is the minute time format. */
			'archive_minute' => esc_html__( 'Minute %s', 'alt' ),
			/* Translators: Weekly archive title. %s is the week date format. */
			'archive_week'   => esc_html__( 'Week %s', 'alt' ),
		),
		'date_labels' => array(
			'archive_minute_hour' => esc_html_x( 'g:i a', 'minute and hour archives time format', 'alt' ),
			'archive_minute'      => esc_html_x( 'i', 'minute archives time format', 'alt' ),
			'archive_hour'        => esc_html_x( 'g a', 'hour archives time format', 'alt' ),
			'archive_year'        => esc_html_x( 'Y', 'yearly archives date format', 'alt' ),
			'archive_month'       => esc_html_x( 'F', 'monthly archives date format', 'alt' ),
			'archive_day'         => esc_html_x( 'j', 'daily archives date format', 'alt' ),
			'archive_week'        => esc_html_x( 'W', 'weekly archives date format', 'alt' ),
		),
	);		
	
	$breadcrumbs_settings = apply_filters( 'alt_breadcrumbs_settings', wp_parse_args( $args, $defaults ) );
	
	if ( $breadcrumbs_visibillity ) {
		new ALT_Breadcrumbs ( $breadcrumbs_settings );
		do_action( 'alt_breadcrumbs_render' );
	}
}