<?php

get_header(); 
?>
<div class="news-page-main">
    <h1>Search results for "<?php the_search_query() ?>"</h1>
    
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="search-result">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt() ?></p>
        </div>
    <?php
        endwhile;
    ?>
    <div class="previous-posts"/><?php previous_posts_link(); ?></div>
    <div class="next-posts"/><?php next_posts_link();?></div>
    <div class="clearfix"></div>
    
    <?php else : ?>
    <p>No results found!</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>