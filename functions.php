<?php

// Halsey Design Functions
// =============================================================================

/*  Remove Admin Bar
/* ------------------------------------ */ 
add_filter('show_admin_bar', '__return_false');



/*  Enqueue scripts
/* ------------------------------------ */ 

  function jquery_enqueue() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, null);
      wp_enqueue_script('jquery');
  }
  if (!is_admin()) add_action('wp_enqueue_scripts', 'jquery_enqueue', 11);


  function wpb_adding_scripts() {

    $vars = "value";
    wp_register_script('cannablze', get_stylesheet_directory_uri() . '/js/custom.js');
    wp_register_script('aos', get_stylesheet_directory_uri() . '/js/aos.js');
    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script('metisMenu', get_stylesheet_directory_uri() . '/js/jquery.metisMenu.js');

    wp_enqueue_script('aos');
    wp_enqueue_script('cannablze');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('metisMenu');

  }
  add_action( 'wp_footer', 'wpb_adding_scripts' ); 


?>