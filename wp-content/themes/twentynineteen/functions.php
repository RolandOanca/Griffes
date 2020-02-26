<?php

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
    array(), false, 'all');
    wp_enqueue_style('slider');

    // wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    // wp_enqueue_style('style');

    // wp_register_style('fontello', get_template_directory_uri() . '/css/fontello.css', array(), false, 'all');
    // wp_enqueue_style('fontello');

    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');





function loadjs()
{
    wp_register_script('jquery',  'https://code.jquery.com/jquery-3.4.1.min.js', '' , 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('sliderjs',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '' , 1, true);
    wp_enqueue_script('sliderjs');

    // wp_register_script('customjs',  get_template_directory_uri() . '/js/scripts.js', '' , 1, true);
    // wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadjs');





