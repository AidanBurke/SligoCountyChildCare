<?php

function importCss() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'importCSS');

// Navigation menus

register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu')
));

$args = array(
	'width'         => 80,
	'height'        => 80,
	'default-image' => get_template_directory_uri() . '/images/Sligo CCC Logo.jpg',
);
add_theme_support( 'custom-header', $args );

function theme_Setup(){
    
    // Featured Image support
    add_theme_support( 'post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('carousel-image', 960, 300, array('left', 'top'));
    add_image_size('banner-image', 960, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'theme_Setup');

function excerpt_count_js(){
if ('page' != get_post_type()) {
echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:12px;right:34px;color:#666;\"><small>Excerpt length: </small><span id=\"excerpt_counter\"></span><span style=\"font-weight:bold; padding-left:7px;\">/ 500</span><small><span style=\"font-weight:bold; padding-left:7px;\">character(s).</span></small></div>");
jQuery("span#excerpt_counter").text(jQuery("#excerpt").val().length);
jQuery("#excerpt").keyup( function() {
if(jQuery(this).val().length > 500){
jQuery(this).val(jQuery(this).val().substr(0, 500));
}
jQuery("span#excerpt_counter").text(jQuery("#excerpt").val().length);
});
});</script>';
}
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');

?>