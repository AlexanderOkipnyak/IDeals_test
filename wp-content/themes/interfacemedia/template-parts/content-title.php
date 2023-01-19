<section class="title-section">
    <div class="row">
    	<h1>
        <?php if(is_category()) : ?>
            <?php echo single_cat_title(); ?>
        <?php else : ?>
        	<?php the_title(); ?>
        <?php endif; ?>
        </h1>
    </div>
</section><!-- .title-section -->