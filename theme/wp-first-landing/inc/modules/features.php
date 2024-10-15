<?php


add_action( 'init', function(){
  register_post_type('features', [
    'labels' => [
      'name'               => 'Возможности', // Основное название типа записи
      'singular_name'      => 'Возможность', // отдельное название записи типа Book
      'add_new'            => 'Добавить новую',
      'add_new_item'       => 'Добавить новую возможность',
      'edit_item'          => 'Редактировать возможность',
      'new_item'           => 'Новая возможность',
      'view_item'          => 'Посмотреть возможность',
      'search_items'       => 'Найти возможность',
      'not_found'          => 'Возможностей не найдено',
      'not_found_in_trash' => 'В корзине возможностей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Возможности'

    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => [
      'with_front' => false
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
});
