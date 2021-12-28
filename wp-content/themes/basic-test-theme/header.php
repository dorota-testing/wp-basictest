<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description');?>">
    <title>
      <?php is_front_page() ? bloginfo('name') : wp_title(); ?>
    </title>

    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="container">
        
        <nav id="site-navigation" class="main-navigation">
          <div class="logo-wrap">
            <div class="logo">LOGO</div>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary-menu',
              'menu_id'        => 'primary-menu',
            )
          );
          ?>
        </nav><!-- #site-navigation -->
      </div>
  </header>
