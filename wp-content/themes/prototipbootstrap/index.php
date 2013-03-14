<?php get_header();?>
<div class='container'>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>