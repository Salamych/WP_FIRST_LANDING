<?php

add_filter('intermediate_image_sizes', function($sizes){
  if(isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'post') {
    $sizes = array_filter($sizes, function($size){
      return $size !== 'wpland-presents-flow';
    });
  }
  return $sizes;
});