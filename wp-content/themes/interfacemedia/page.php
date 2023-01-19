<?php get_header(); ?>
    <div class="page_container">
        <div class="row">
                <?php get_template_part( 'template-parts/content','title'); ?>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main with_sidebar" role="main">
                    <?php if ( function_exists( 'alt_site_breadcrumbs' ) ) alt_site_breadcrumbs(); ?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/post/content');
                    endwhile; // End of the loop. ?>
                    <?php the_posts_pagination(array(
                        'prev_text'=>'',
                        'next_text'=>''
                        )); ?>
                    </main><!-- #main -->
                    <?php get_sidebar(); ?>
                </div><!-- #primary -->   
        </div>
    </div>

<?php get_footer();