<?php
	$slider_id = uniqid();
	
	// WPML filter
	$suppress_filters = get_option('suppress_filters');

	$args = array(
		'post_type'        => 'slider',
		'posts_per_page'   => -1,
		'post_status'      => 'publish',
		'suppress_filters' => $suppress_filters
		);
	$slides = get_posts($args);
	if (empty($slides)) return;
?>

<?php // http://jquery.malsup.com/cycle2/api/ ?>
<?php /*
<div class="wrapper">
    <div class="<?php echo jm_get_container_class(); ?>">
        <div class="row">
            <div class="col-lg-12">
*/ ?>			
<?php if (count($slides) == 1) { ?>
<div id="cycle_<?php echo $slider_id; ?>" class="cycle-slider">                
<?php } else { ?>
<div id="cycle_<?php echo $slider_id; ?>" class="cycle-slider cycle-slideshow"
	data-cycle-swipe=true
	data-cycle-swipe-fx="scrollHorz" 
    data-cycle-fx="fade"
    data-cycle-timeout="5000"
    data-cycle-slides="> div.cycle-slide"
>

    <div class="cycle-pager"></div>   
<?php } ?>                
	<?php foreach( $slides as $k => $slide ) {
            setup_postdata( $slide->ID );
		    $attachment_id = get_post_thumbnail_id($slide->ID);
            $sl_src = wp_get_attachment_image_url( $attachment_id, 'slider-image' );
            $sl_srcset = wp_get_attachment_image_srcset( $attachment_id, 'slider-image' );

			if ($sl_src) { ?>
				<div class="cycle-slide">
                    <img src="<?php echo esc_url( $sl_src ); ?>"
                     srcset="<?php echo esc_attr( $sl_srcset ); ?>"
                     sizes="100vw"
                     alt="">
                    <div class="slider-caption">
                        <?php echo get_the_content(); ?>
                    </div>
				</div>
			 <?php }
		}

		wp_reset_postdata();
	?>
</div>
<?php /*                
            </div>
        </div>
    </div>
</div>
*/ ?>