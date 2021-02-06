<?php 
/**
 * Basic Wordpress Theme
 * @version     2.0.0
 * @author      
 * @link        
 * @copyright   2021 Basic Wordpress Theme
 * @license     
 */

if (!defined('ABSPATH')) { die(); }
?>

<?php get_header(); ?>
    
    <div class="row">

    <section class="col-md-8">  
    <?php while(have_posts()) : the_post(); ?>
    <article class="col-md-12">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </article>
    <?php endwhile; ?>      
    </section>  
    
    <?php get_sidebar(); ?> 

    </div>

<?php

get_footer();