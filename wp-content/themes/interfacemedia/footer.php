<footer id="footer">
	<?php if(function_exists('the_custom_logo')){
				the_custom_logo();
			} else { ?>
				<a href="/" class="custom-logo-link"><img class="custom-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
			<?php } ?>
			
		<?php if ( is_active_sidebar( 'footer_sidebar' ) ) : ?>
			<div class="footer_sidebar">
				<?php dynamic_sidebar( 'footer_sidebar' ); ?>
			</div>
		<?php endif; ?>
	<?php do_action('wp_footer'); ?>	
</footer>
</div>
</body>
</html>