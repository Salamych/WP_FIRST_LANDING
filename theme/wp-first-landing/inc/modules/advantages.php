<?php


add_action( 'init', function(){
  register_post_type('advantages', [
    'labels' => [
      'name'               => 'Преимущества', // Основное название типа записи
      'singular_name'      => 'Преимущество', // отдельное название записи типа Book
      'add_new'            => 'Добавить новое',
      'add_new_item'       => 'Добавить новое преимущество',
      'edit_item'          => 'Редактировать преимущество',
      'new_item'           => 'Новое преимущество',
      'view_item'          => 'Посмотреть преимущество',
      'search_items'       => 'Найти преимущество',
      'not_found'          => 'Преимуществ не найдено',
      'not_found_in_trash' => 'В корзине преимуществ не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Преимущества'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
});
