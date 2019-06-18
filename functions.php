<?php

  // Link style.css
  function attach_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style('nunito-baby','//fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('nunito-baby');
  }
  add_action('wp_enqueue_scripts', 'attach_resources');

  // Navigation Menus
  register_nav_menus(array(
    'header' => __('Header Menu'),
    'footer' => __('Footer Menu'),
  ));

  // Remove html top margin
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');

  // jQuery
  function add_custom_script() {
    wp_register_script('custom_script', home_url() . '/wp-content/themes/ProfessionalWebsite/scripts.js', array( 'jquery' ));
    wp_enqueue_script('custom_script');
  }
  add_action( 'wp_enqueue_scripts', 'add_custom_script' );

?>
