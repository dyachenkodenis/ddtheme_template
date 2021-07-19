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

    <title><?php the_title(); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">   

    <meta name="author" content="">

    <link rel="manifest" href="<?php echo THEMEURL; ?>site.webmanifest">

    <meta property="og:locale" content="" /> 
    <meta property="og:type" content="website"/><?php /*get_post_type();*/ ?>
    <meta property="og:title" content=""/>  
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:description" content="" /> 
    <meta property="og:site-name" content="" /> 
    <meta property="og:description" content="" /> 
    <meta property="og:video" content="" /> 
    <meta property="og:audio" content="" /> 
    <meta property="fb:app_id" content="" />

    <meta name="twitter:card" content="">
    <meta property="twitter:title" content=""/>  
    <meta property="twitter:image" content=""/>     
    <meta property="twitter:description" content="" />
    <meta property="twitter:creator" content="" />
    <meta property="twitter:domain" content=""/>    
    <meta property="twitter:site" content=""/>    
    <meta property="twitter:url" content=""/>    
    <script type="application/ld+json">
        {
          "$schema": "https://json-schema.org/draft/2020-12/schema",
          "$id": "<?php echo home_url(); ?>",
          "title": "<?php bloginfo('name'); ?>",
          "description": "<?php bloginfo('description'); ?>",
          "type": "object",
          "logo": {
          "@type": "ImageObject",
          "url": "<?php 
            if( has_custom_logo() ){             
              echo get_custom_logo();
            }else{
              echo THEMEURL.'assets/img/logo.jpg';?>"
            }
          }
      </script>

<?php wp_head(); ?>

    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"> 

    <?php if(is_user_logged_in() ){ ?>
        <style>
          html { margin-top: 28px !important; }
          * html body { margin-top: 28px !important; }
        </style>  
    <?php } ?>

  </head>
  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <nav>
      <div>
        <div>
        

          <?php 
            if( has_custom_logo() ){             
              echo get_custom_logo();
            }else{            
             ?><a href="/"><?php bloginfo('name'); ?> </a><?php           
            }
          ?>
          
        </div>
        <div>
         
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
                                        'items_wrap'      => '<ul>%3$s</ul>',

                                        //'depth'           => 0,
                                        'walker'          => new WalkerWordpressTheme(),                                                                                                          
                                    )
                                );

                               
            ?>
         
        </div>
      </div>
    </nav>


    
    <div>

      <?php get_template_part('template-parts/header/custom_header'); ?>


      <div>
        <div>
          
          <header>
            <!-- Slider -->
          </header>