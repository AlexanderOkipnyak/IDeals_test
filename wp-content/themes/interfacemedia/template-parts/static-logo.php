<div class="logo">
	<?php
	$header_logo_url = CHILD_URL.'/assets/images/logo.png';
	$header_logo_url_x2 = get_theme_mod('header_logo_url_x2', jm_customizer()->get_default('header_logo_url_x2'));

	if ( $header_logo_url != '') { ?>
		<a href="<?php echo home_url(); ?>/">
			<img
				src="<?php echo esc_url($header_logo_url); ?>" 
				alt="<?php bloginfo('name'); ?>"
				title="<?php bloginfo('description'); ?>" 
			>
		</a>
	<?php } elseif ( has_custom_logo() ) {
		the_custom_logo();
	} else { ?>
		<a href="<?php echo home_url(); ?>/"><?php echo load_inline_svg ('logo.svg')?></a>
	<?php } ?>
</div> 