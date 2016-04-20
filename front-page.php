<?php

get_header();

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>

<div>
    <div class="carousel-box">
        <div class="cycle-slideshow"
             data-cycle-slides="> div">
            <?php
                query_posts(array('category_name' => 'featured', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => DESC));
            
                while(have_posts()) : the_post();?>
                    <div class="featured-slide">
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('carousel-image'); ?></a>
                        <?php if(get_the_title()){?>
                            <div class="featured-slide-text">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php } ?>

                    </div>
                
            <?php 
                endwhile;
            ?>
        </div>

    </div>
    
   <div class="news-box">
       <?php 
            query_posts( array('category_name' => 'news', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => DESC));
            
            while(have_posts()) : the_post();
        ?>
       
       <div class="sub-news-box">
            <?php if(has_post_thumbnail()){ the_post_thumbnail('small-thumbnail'); } ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo substr(strip_tags($post->post_content), 0, 300);/*echo excerpt(45);*/ ?>...</p>
            <div class="clearfix"></div> 
       </div>
       
       
        <?php
            endwhile;
       ?>
   </div>
   <div class="info-box">
        <div class="facebook-box">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSligo-County-Childcare-Committee%2F186497501408322&amp;width=288&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" 
                scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:290px; height:350px;" allowTransparency="true"></iframe>
        </div>
       <div class="search-box">
           <?php get_search_form() ?>
       </div>
   </div>

   <div class="clearfix"></div>
   <div class="contact-box">
       <?php 
            query_posts( array('category_name' => 'contactbox', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => DESC));
            
            while(have_posts()) : the_post();
        ?>
       <h3><a href="<?php the_permalink(); ?>">Contact Us</a></h3>
       <p><?php the_content(); ?></p>
       <?php
            endwhile;
       ?>
   </div> 
   <div class="newsletter-box">
       <h3>Newsletters</h3>
       <ul>
       <?php 
            query_posts( array('category_name' => 'newsletter', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => DESC));
            
            while(have_posts()) : the_post();
        ?>
           <li>
               <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
               <p><?php the_content(); ?></p>
           </li>
       
       <?php
            endwhile;
       ?>
           <div class="clearfix"></div>
       </ul>
   </div>
   <div class="clearfix"></div>
</div>

<?php

get_footer();

?>