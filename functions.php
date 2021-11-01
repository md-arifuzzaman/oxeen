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
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i');
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome-all.css', array(), '1.0', 'all' );
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri().'/assets/css/styles.css', array(), '1.0', 'all' );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/css/swiper.css', array(), '1.0', 'all' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all' );
    
    

    // JS Load
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('popper-min', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('swiper-min', get_template_directory_uri().'/assets/js/swiper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.js', array('jquery'), '1.0', true);
    wp_enqueue_script('morphext-min', get_template_directory_uri().'/assets/js/morphext.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('validator-min', get_template_directory_uri().'/assets/js/validator.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('scripts-js', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), '1.0', true);
    
}
add_action('wp_enqueue_scripts','oxeen_css_js_enqueue');