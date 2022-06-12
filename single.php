<?php get_header();

    while(have_posts(  )){
        the_post(  ); ?>
        <h1>Post</h1>
        <h2>Title: <?php the_title(); ?></h2>
        <?php the_content(); ?>
        <hr>
    <?php }

    get_footer();
?>