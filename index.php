<?php

get_header(); 
?>
<div class="news-page-main">
    <h1>Latest News</h1>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts( array('category_name' => 'news', 'posts_per_page' => 6, 'paged' => $paged, 'orderby' => 'date', 'order' => DESC));

    while(have_posts()) : the_post();?>
    
    <div class="news-story-sub">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h6><?php the_time('jS F, Y') ?></h6>
        <?php if(has_post_thumbnail()){ the_post_thumbnail('banner-image'); } ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>"><div class="read-more">Read more</div></a>
    </div>
    <?php
        endwhile;
    ?>
    <div class="previous-posts"/><?php previous_posts_link(); ?></div>
    <div class="next-posts"/><?php next_posts_link();?></div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>