<?php

function ds_theme_assets() {
    wp_enqueue_style(
        'ds-style',
         get_stylesheet_uri(),
         array(),
         '1.0',
         'all'
        );

     wp_enqueue_style(
        'slider-style',
         get_template_directory_uri() . '/css/slider.css',
         array(),
         '1.0',
         'all'
        );


 wp_enqueue_style(
        'ds-script',
         get_template_directory_uri() . '/js/script.js',
         array(),
         '1.0',
         'all'
        );

        if(is_singular()&& comments_open() && get_option('theme_comments')){
            wp_enqueue_scripts('comment-replay');
        }
}

add_action('wp_enqueue_scripts', 'ds_theme_assets');

function ds_theme_set(){
    add_theme_supprot('post-thumbnails');


    add_theme_support('post-formats',array('aside','image','video'));


    add_theme_support('title-tag');
}


add_action('after_setup_theme','ds_theme_set');
?>