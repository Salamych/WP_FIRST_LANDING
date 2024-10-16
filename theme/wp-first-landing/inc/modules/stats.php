<?php


add_action( 'init', function(){
  register_post_type('stats', [
    'labels' => [
      'name'               => 'Статистика', // Основное название типа записи
      'singular_name'      => 'Статистика', // отдельное название записи типа Book
      'add_new'            => 'Добавить новую',
      'add_new_item'       => 'Добавить новую статистику',
      'edit_item'          => 'Редактировать статистику',
      'new_item'           => 'Новая статистика',
      'view_item'          => 'Посмотреть статистику',
      'search_items'       => 'Найти статистику',
      'not_found'          => 'Статистики не найдено',
      'not_found_in_trash' => 'В корзине статистики не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Статистика'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
});
