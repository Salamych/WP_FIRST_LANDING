<?php


add_action( 'init', function(){
  register_post_type('discover', [
    'labels' => [
      'name'               => 'Discover', // Основное название типа записи
      'menu_name'          => 'Discover'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'thumbnail'],
  ]);
});
