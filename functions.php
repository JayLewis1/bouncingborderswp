<?php 

function bouncingborders_theme_support(){
  // Adds dynamic title tag support
  add_theme_support("title-tag"); 
  // Adds dynamic log support
  add_theme_support("custom-logo");
  // Adds the post thumbnails
  add_theme_support("post-thumbnails");
  }
  // Running the function when wp runs after_setup_theme
  add_action("after_setup_theme", "bouncingborders_theme_support");

// removes admin bar  
// show_admin_bar(false);

// Function adds the menu option to wp backend
function bouncingborders_menus() {
  // Registering where the menus are
  $locations = array(
        'primary' => "Desktop header menu",
    );
    register_nav_menus($locations);
}
// Running the function when wp runs init
add_action("init", "bouncingborders_menus");

function bouncingborders_styles() {
  // Dynamic version from the style.css file
  $version = wp_get_theme()->get("version");
  // Linking stylesheets
  wp_enqueue_style("blog-style", get_template_directory_uri() . "/style.css", array(), $version ,"all");
}
 // Running the function when wp runs wp_enqueue_scripts
add_action("wp_enqueue_scripts", "bouncingborders_styles");

function bouncingborders_scripts() {
  // Dynamic version from the style.css file
  $version = wp_get_theme()->get("version");
  // Linking script file
  wp_enqueue_script("blog-script", get_template_directory_uri() . "/assets/js/script.js", array(), $version ,true);
  //  Linking JQuery
  wp_enqueue_script("blog-jquery", "https://code.jquery.com/jquery-3.5.0.min.js", array(), "3.5.0" ,true);
  wp_enqueue_script("blog-ajax", "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), "3.5.1" ,true);
  wp_enqueue_script("google-maps", "https://maps.googleapis.com/maps/api/js?key=AIzaSyDN49ZZTppC0q4fkaxp4b9eCPDIciUCr7A&callback=initMap", array(), "3.5.0" ,true);
 

}
 // Running the function when wp runs wp_enqueue_scripts
add_action("wp_enqueue_scripts", "bouncingborders_scripts");
// Defining a directory pth to assets folder so wp can handle properly
if( !defined(THEME_IMG_PATH)){
  define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets' );
 }
 if( !defined(PHP_INI_PATH)){
  define( 'PHP_INI_PATH', get_stylesheet_directory_uri() . '/ChromePhp.php' );
 }
 function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
  
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom'); 

function newtheme_widget_areas() {
  

  register_sidebar(
    array(
      "before_title" => "",
      "after_title" => "",
      "before_widget" => '',
      "after_widget" => "",
      "name" => "Footer Area",
      "id" => "footer-1",
      "description" => "Footer Widget Area"
    )
  );
  register_sidebar(
    array(
      "before_title" => "",
      "after_title" => "",
      "before_widget" => '',
      "after_widget" => "",
      "name" => "Maps Area",
      "id" => "maps-1",
      "description" => "Maps Widget Area"
    )
  );
  register_sidebar(
    array(
      "before_title" => "",
      "after_title" => "",
      "before_widget" => '',
      "after_widget" => "",
      "name" => "Where Are We Area",
      "id" => "place-1",
      "description" => "Where We Are Widget"
    )
  );

}

add_action("widgets_init", "newtheme_widget_areas");

?>