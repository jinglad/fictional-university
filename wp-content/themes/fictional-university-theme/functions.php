 <?php

 function pageBanner($args = NULL){
   if(!$args['title']) {
     $args['title'] = get_the_title();
   }

   if(!$args['subtitle']){
     $args['subtitle'] = get_field('page_banner_subtitle');
   }

   if(!$args['photo']){
     if(get_field('page_banner_background_image')){
       $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
     } else {
       $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
     }
   }
   ?>
   <div class="page-banner">
     <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>);"></div>
     <div class="page-banner__content container container--narrow">
       <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
       <div class="page-banner__intro">
         <p><?php echo $args['subtitle'] ?></p>
       </div>
     </div>
   </div>
 <?php }

function university_resources(){
  // wp_enqueue_script("jquery","//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js",NULL,microtime(),true);
  wp_enqueue_script("main_js",get_theme_file_uri("/js/scripts-bundled.js"),array('jquery'),microtime(),true);
  wp_enqueue_script("search_js",get_theme_file_uri("/js/modules/Search.js"),NULL,microtime(),true);
  wp_enqueue_style("google-fonts","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
  wp_enqueue_style("fontawesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  wp_enqueue_style("main_style",get_stylesheet_uri(),NULL,microtime());
}

add_action("wp_enqueue_scripts","university_resources");

function university_features(){
  // register_nav_menu('headerMenuLocation','Header Menu Location');
  // register_nav_menu('footerLocationOne','Footer Location One');
  // register_nav_menu('footerLocationTwo','Footer Location Two');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape',400,260,true);
  add_image_size('professorPortrait',480,650,true);
  add_image_size('pageBanner',1500,350,true);
}

add_action("after_setup_theme","university_features");

function university_adjust_queries($query){
  if(!is_admin() and is_post_type_archive('program') and $query->is_main_query()){
    $query->set('orderby','title');
    $query->set('order','ASC');
    $query->set('posts_per_page',-1);
  }

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


// function universityMapKey($api){
//   $api['key'] = 'AIzaSyDPuKZSo3gbgJaP_iD0TVuywIh9H7H7kL4';
//   return $api;
// }

// add_filter('acf/fields/google_map/api','universityMapKey');
