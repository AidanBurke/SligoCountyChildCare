<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><?php the_title(); ?></h2>
                <h6><?php the_time('jS F, Y') ?></h6>
                <?php the_post_thumbnail('banner-image'); ?>
		<p><?php the_content(); ?></p>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>