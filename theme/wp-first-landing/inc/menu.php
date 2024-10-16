<?php

add_action('after_setup_theme', function(){
  register_nav_menu('header', 'Меню в шапке');
});

add_filter( 'nav_menu_item_id', function( $id, $menu_item, $args, $depth ){
  return '';
}, 10, 4 );

add_filter( 'nav_menu_css_class', function( $classes, $menu_item, $args, $depth ){
  if($args->theme_location === 'header') {
    $newClasses = ['navMenu__list'];
  }
  if(in_array('current_page_item', $classes)){
    $newClasses[] = 'active'; 
  }
  return $newClasses;
}, 10, 4 );

add_filter('nav_menu_link_attributes', function( $attrs, $menu_item, $args, $depth ){
  if($args->theme_location === 'header') {
    if(!isset($attrs['class'])) {
      $attrs['class'] = '';
    }
    $attrs['class'] = 'navMenu__link';
    // if($attrs['aria-current'] === 'page'){
    //   $attrs['class'] .= ' text-danger';
    // }
    // $attrs['class'] = trim($attrs['class']);
}
  return $attrs;
}, 10, 4 );