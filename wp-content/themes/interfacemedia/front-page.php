<?php get_header(); ?>
	<div class="home_container">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );
                    endwhile; // End of the loop ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
<?php get_footer(); ?>