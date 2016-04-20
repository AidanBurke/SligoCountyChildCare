<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="mobile.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <title><?php bloginfo('name'); ?></title>

        <script type="text/javascript">
           function toggle_visibility() {
                 var e = document.getElementsByClassName('site-nav')[0];
                 if(e.style.display == 'block')
                    e.style.display = 'none';
                 else
                    e.style.display = 'block';
           }
        </script>

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <div class="container">
        <header class="site-header">
            <div class="main-header-block">
                <a href="<?php home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" /></a>
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4><?php bloginfo('description'); ?></h4>
            </div>
            <div class="cci-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/CCI Logo.PNG" />
            </div>
            <div style="clear:both"></div>
        </header>
        <div class="handle" onclick="toggle_visibility()">Menu</div>
        <nav class="site-nav">

            <?php

                $args = array(
                    'theme_location' => 'primary'
                );

            ?>

            <?php wp_nav_menu( $args); ?>
        </nav>
        <div style="clear:both"></div>
