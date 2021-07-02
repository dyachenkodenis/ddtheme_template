<?php
/**
* Wordpress Theme
* @version     1.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
* @package WordPress
* @subpackage Wordpress Theme
* @since Wordpress Theme 1.0
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

    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_site_icon(); ?>

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

          <?php 
            if( has_custom_logo() ){             
              echo get_custom_logo();
            }else{            
             ?><a class="navbar-brand" href="/"><?php bloginfo('name'); ?> </a><?php           
            }
          ?>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
         
            <?php
                               wp_nav_menu(
                                    array(                                       
                                        //'theme_location'  => '',
                                        'menu'            => 'Primary',
                                        'container'       => '',
                                        //'container_class' => '',
                                        //'container_id'    => '',
                                        //'menu_class'      => '',
                                        //'menu_id'         => '',
                                        //'echo'            => true,
                                        //'fallback_cb'     => 'wp_page_menu',
                                        //'before'          => '',
                                        //'after'           => '',
                                        //'link_before'     => '',
                                        //'link_after'      => '',
                                        'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',

                                        //'depth'           => 0,
                                        'walker'          => new WalkerWordpressTheme(),                                                                                                          
                                    )
                                );

                               
            ?>
         
        </div>
      </div>
    </nav>


    
    <div class="container wp-container">

      <?php get_template_part('template-parts/header/top-header'); ?>

      <?php get_template_part('template-parts/header/custom_header'); ?>


      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-12">
          
          <header>
            <!-- Slider -->
          </header>