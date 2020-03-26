<?php get_header(); ?>

<div class="container news-post">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_title( '<h1>','</h1>' ); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>