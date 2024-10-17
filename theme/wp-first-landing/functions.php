<?php

  define('WPLAND_DIR_CSS', get_template_directory_uri() . '/assets/css/');
  define('WPLAND_DIR_JS', get_template_directory_uri() . '/assets/js/');
  define('WPLAND_DIR_IMG', get_template_directory_uri() . '/assets/img/');
  define('WPLAND_DIR_FONTS', get_template_directory_uri() . '/assets/fonts/');


  include_once('inc/css-js.php');
  include_once('inc/menu.php');
  include_once('inc/modules/advertisement.php');
  include_once('inc/modules/presents.php');
  include_once('inc/modules/features.php');
  include_once('inc/modules/discover.php');
  include_once('inc/modules/advantages.php');
  include_once('inc/modules/stats.php');
  include_once('inc/modules/packages.php');
  include_once('inc/modules/reviews.php');


   

  add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
  });

  function wpland_get_new_posts($post_type = 'post', $n = 3, $order = 'DESC') {
    $articles = get_posts([
      'numberposts' => $n,
      'post_type' => $post_type,
      'order'  => $order
    ]);
    $res = [];
  
    foreach($articles as $article){
      $res[] = [
        'id' => $article->ID,
        'title' => get_the_title($article),
        'content' => get_the_content('','', $article),
        'link' => get_permalink($article),
        'author' => get_the_author_meta( 'display_name', $article->post_author ),
        'date' => get_the_time( 'j M Y', $article->ID ),
        'profession' => get_the_excerpt( $article->ID ),
        'img' => get_the_post_thumbnail_url($article)
      ];
    }
    return $res;
  }