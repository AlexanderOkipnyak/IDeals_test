<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jmwebdesigns
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} 
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'jm_post_open' ); ?>
	<div class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
            if ( !is_single() ) {
                //jm_posted_on_short();
            } else {
                //jm_posted_on();
            }    
			echo '</div><!-- .entry-meta -->';
		};
		?>
	</div><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'archive_img' ); ?>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>
	<?php 
		if ( !is_single() ) {
            the_title( '<h2 class="entry-title">', '</h2>' );
		} 	 
	?>
	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jmwebdesigns' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'jmwebdesigns' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
		<a href="<?php the_permalink(); ?>" class="more_btn"><?php _e('Read More') ?></a>
	</div><!-- .entry-content -->
	<?php do_action( 'jm_post_close' ); ?>
</article><!-- #post-## -->
