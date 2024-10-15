<?php

  define('WPLAND_DIR_CSS', get_template_directory_uri() . '/assets/css/');
  define('WPLAND_DIR_JS', get_template_directory_uri() . '/assets/js/');
  define('WPLAND_DIR_IMG', get_template_directory_uri() . '/assets/img/');
  define('WPLAND_DIR_FONTS', get_template_directory_uri() . '/assets/fonts/');


  include_once('inc/css-js.php');
  include_once('inc/modules/advertisement.php');
  include_once('inc/modules/presents.php');
  include_once('inc/modules/features.php');


   

  add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
  //  add_theme_support( 'post-formats', ['aside', 'video'] );

    register_nav_menu('header', 'Меню в шапке');

  });

  // add_action('widgets_init', function(){
  //   register_sidebar([
  //     'name'          => 'Боковая колонка для блога',
  //     'id'            => 'sidebar-blog',
  //     'description'   => 'Выводится в блоге',
  //     'before_widget' => '<div class="aside-box %2$s">',
  //     'after_widget'  => "</div>\n",
  //     'before_title'  => '<div class="h2">',
  //     'after_title'   => "</div>\n",
  //   ]);

  //   register_sidebar([
  //     'name'          => 'Текст для главной страницы',
  //     'id'            => 'sidebar-home',
  //     'description'   => 'Выводится на главной',
  //     'before_widget' => '<div class="header-bottom">',
  //     'after_widget'  => "</div>\n",
  //   ]);
  // });

  // function hasNew(){
  //   $newPost = '';

  //   if(has_post_format( 'video' ) && get_field('video_new')) {
  //     $newPost = '<div class="post-label post-label-video">New Video</div>';
  //   }

  //   if(has_post_format( 'aside' ) && get_field('project_new')) {
  //     $newPost = '<div class="post-label post-label-project">New Project</div>';
  //   }

  //   echo $newPost;
  // }


  // function getPagination(){
  //   $pages = paginate_links([
  //     'prev_next'    => false,
  //     'mid_size'     => 1,
  //   ]);

  //   $pages = str_replace('page-numbers', 'pagination-item', $pages);
  //   $pages = str_replace('current', 'pagination-item-current', $pages);
  //   // the_posts_pagination( [
  //   //   'show_all'     => false, // показаны все страницы участвующие в пагинации
  //   //   'end_size'     => 1,     // количество страниц на концах
  //   //   'mid_size'     => 1,     // количество страниц вокруг текущей
  //   //   'class'        => 'pagination-item',
  //   //   'prev_next'    => false,
  //   // ]);
  //   return $pages;
  // }
