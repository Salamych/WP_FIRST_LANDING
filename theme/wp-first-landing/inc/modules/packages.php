<?php


add_action( 'init', function(){
  register_post_type('packages', [
    'labels' => [
      'name'               => 'Досупные пакеты', // Основное название типа записи
      'singular_name'      => 'Пакеты', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый пакет',
      'edit_item'          => 'Редактировать пакет',
      'new_item'           => 'Новый пакет',
      'view_item'          => 'Посмотреть пакет',
      'search_items'       => 'Найти пакет',
      'not_found'          => 'Пакетов не найдено',
      'not_found_in_trash' => 'В корзине пакетов не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Досупные пакеты'

    ],
    'public' => false,
    'show_ui' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
});

function is_fa_check($is_fa){
  return $is_fa ? 'fa-check': 'fa-close';
}

function packages_list($id){
  $fields = get_field_objects($id);
  $res = [];

  foreach($fields as $name => $field){
    $res[] = '<li class="pacItem__list"><i class="fa '.is_fa_check($field['value']).'" aria-hidden="true"></i>'.$field['label'].'</li>'
    ; 
  }
  return $res;
}
