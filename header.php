<?php
/**
* Wordpress Theme
* @version     3.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
*/
if (!defined('ABSPATH')) { die(); }
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" >
    <meta name="HandheldFriendly" content="true"/> 
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-16x16.png"/>
    <link rel="manifest" href="/site.webmanifest">

    <meta property="og:type" content="website"/>
    <meta property="og:image:width" content=""/>
    <meta property="og:image:height" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>

    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"> 

  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">MENU</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
                                wp_nav_menu(
                                    array(
                                        'items_wrap'    => '%3$s',
                                        'container'     => ''
                                    )
                                );
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container wp-container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-12">
          
          <header>
            <!-- Slider -->
          </header>