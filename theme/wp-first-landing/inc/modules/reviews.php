<?php


add_action( 'init', function(){
  register_post_type('reviews', [
    'labels' => [
      'name'               => 'Отзывы', // Основное название типа записи
      'singular_name'      => 'Отзыв', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый отзыв',
      'edit_item'          => 'Редактировать отзыв',
      'new_item'           => 'Новый отзыв',
      'view_item'          => 'Посмотреть отзыв',
      'search_items'       => 'Найти отзыв',
      'not_found'          => 'Отзыва не найдено',
      'not_found_in_trash' => 'В корзине отзывов не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Отзывы'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
  ]);
});
