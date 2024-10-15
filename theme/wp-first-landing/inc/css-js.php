<?php

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('font-awesome', WPLAND_DIR_CSS . 'font-awesome.min.css');
  wp_enqueue_style('slick', WPLAND_DIR_CSS . 'slick.css');
  wp_enqueue_style('slicktheme', WPLAND_DIR_CSS . 'slick-theme.css');
  wp_enqueue_style('googlfonts', 'https://fonts.googleapis.com/css?family=Ubuntu:300');
  wp_enqueue_style('styles', WPLAND_DIR_CSS . 'style.css');

  
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', WPLAND_DIR_JS . 'jquery.min.js', [], false, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick', WPLAND_DIR_JS . 'slick.min.js', ['jquery'], false, true);
  wp_enqueue_script('main', WPLAND_DIR_JS . 'main.js', ['jquery', 'slick'], false, true);
 });