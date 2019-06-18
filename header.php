<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="site-header" id="section1">
      <div class="logo-plus-nav">

        <h1 class="logo">
          <a href="<?php echo home_url(); ?>"> WKS </a>
        </h1>

        <nav class="top-nav">
          <div class="dropdown">
            <a id="hamburger">&#9776;</a>
            <?php $args = array('theme_location' => 'header'); ?>
            <div class="dropdown-content">
              <?php wp_nav_menu( $args ); ?>
            </div>
          </div>
          <div class="desktop-menu">
            <?php wp_nav_menu( $args ); ?>
          </div>
        </nav>

      </div>
      <a class="scroll-arrow" href="#section2">
        <span></span>
      </a>


      <div class="main-background">
      </div>

    </div>
