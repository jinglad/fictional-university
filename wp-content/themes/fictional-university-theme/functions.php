<?php

function university_resources(){
  wp_enqueue_script("main_js",get_theme_file_uri("/js/scripts-bundled.js"),NULL,1.0,true);
  wp_enqueue_style("google-fonts","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
  wp_enqueue_style("fontawesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  wp_enqueue_style("main_style",get_stylesheet_uri());
}

add_action("wp_enqueue_scripts","university_resources");

function university_features(){
  // register_nav_menu('headerMenuLocation','Header Menu Location');
  // register_nav_menu('footerLocationOne','Footer Location One');
  // register_nav_menu('footerLocationTwo','Footer Location Two');
  add_theme_support('title-tag');
}

add_action("after_setup_theme","university_features");

function university_adjust_queries($query){
  if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    $today = date('Ymd');
    $query->set('meta_key','event_date');
    $query->set('orderby','meta_value_num');
    $query->set('order','ASC');
    $query->set('meta_query',[
      [
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      ]
    ]);
  }
}

add_action('pre_get_posts','university_adjust_queries');