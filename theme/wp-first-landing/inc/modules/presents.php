<?php


add_action( 'init', function(){
  register_post_type('presents', [
    'labels' => [
      'name'               => 'Презентация', // Основное название типа записи
      'singular_name'      => 'Презентация', // отдельное название записи типа Book
      'add_new'            => 'Добавить новую',
      'add_new_item'       => 'Добавить новую презентацию',
      'edit_item'          => 'Редактировать презентацию',
      'new_item'           => 'Новая презентация',
      'view_item'          => 'Посмотреть презентацию',
      'search_items'       => 'Найти презентацию',
      'not_found'          => 'Презентации не найдено',
      'not_found_in_trash' => 'В корзине презентаций не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Презентация'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
});


add_action('after_setup_theme', function(){
  add_image_size('wpland-presents-flow', 370, 240, true);
});

add_filter('intermediate_image_sizes', function($sizes){
  if(isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'presents') {
    $sizes = ['wpland-presents-flow'];
  }
  return $sizes;
});