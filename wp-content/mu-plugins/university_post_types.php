<?php 

function university_post_types(){
  //Event Post Type
  register_post_type('event',[
    'supports' => ['title','editor','excerpt'],
    'rewrite' => [
      'slug' => 'events'
    ],
    'has_archive' => true,
    'public' => true,
    'labels' => [
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'all_items' => 'All Events',
      'edit_item' => 'Edit Event',
      'singular_name' => 'Event'
    ],
    'menu_icon' => 'dashicons-calendar'
  ]);

  //Program Post Type
  register_post_type('program',[
    'supports' => ['title','editor'],
    'rewrite' => [
      'slug' => 'programs'
    ],
    'has_archive' => true,
    'public' => true,
    'labels' => [
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'all_items' => 'All Programs',
      'edit_item' => 'Edit Program',
      'singular_name' => 'Program'
    ],
    'menu_icon' => 'dashicons-awards'
  ]);

  //Professor Post Type
  register_post_type('professor',[
    'supports' => ['title','editor','thumbnail'],
    'public' => true,
    'labels' => [
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'all_items' => 'All Professors',
      'edit_item' => 'Edit Professor',
      'singular_name' => 'Professor'
    ],
    'menu_icon' => 'dashicons-welcome-learn-more'
  ]);
}

add_action('init','university_post_types');