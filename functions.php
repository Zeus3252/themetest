<?php

add_theme_support('menus');
add_theme_support('custom-logo');

function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary' ),
        
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   function files() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  } 
    add_action( 'wp_enqueue_scripts', 'files' );
  
  //themetest customizer
require_once get_template_directory() . '/inc/themetest-customizer.php';
require_once get_template_directory() . '/dynamic-styles.php';


  ?>