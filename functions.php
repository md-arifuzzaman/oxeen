<?php

function oxeen_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','sliders', 'team', 'testimonials', 'portfolio'));
    load_theme_textdomain('oxeen', get_template_directory_uri().'/languages');

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'oxeen')
    ));
}
add_action('after_setup_theme', 'oxeen_setup_theme');

function oxeen_css_js_enqueue(){

    // CSS Load
    wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/css/bootstrap.css', array(), '1.0', 'all');
    

    // JS Load
    wp_enqueue_script('popper-js', get_template_directory_uri(). '/js/jquery.min.js', array('jquery'), '1.0', true);
    
}
add_action('wp_enqueue_scripts','oxeen_css_js_enqueue');