<?php


add_action( 'init', function(){
  register_post_type('advertisement', [
    'labels' => [
      'name'               => 'Реклама', // Основное название типа записи
      'singular_name'      => 'Реклама', // отдельное название записи типа Book
      'add_new'            => 'Добавить новую',
      'add_new_item'       => 'Добавить новую рекламу',
      'edit_item'          => 'Редактировать рекламу',
      'new_item'           => 'Новая реклама',
      'view_item'          => 'Посмотреть рекламу',
      'search_items'       => 'Найти рекламу',
      'not_found'          => 'Рекламы не найдено',
      'not_found_in_trash' => 'В корзине рекламы не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Реклама'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor'],
  ]);
});


function wpland_get_new_posts($post_type = 'post', $n = 3) {
  $articles = get_posts([
    'numberposts' => $n,
    'post_type' => $post_type
  ]);
  $res = [];

  foreach($articles as $article){
    $res[] = [
      'id' => $article->ID,
      'title' => get_the_title($article),
      'content' => get_the_content('','', $article),
      'link' => get_permalink($article)
    ];
  }
  return $res;
}