<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});

function get_eyecatch_with_default() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/blog__first.jpg');
  
  endif;

  return $img;
}

function widgetsidebar_init() {
  register_sidebar(array(
  'name'=>'サイドバー',
  'id' => 'side-widget',
  ));
  }
  add_action( 'widgets_init', 'widgetsidebar_init' );