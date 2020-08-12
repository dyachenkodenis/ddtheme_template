<?php 
/**
 * DDTheme Wordpress Theme
 * @version     1.0.0
 * @author      
 * @link        
 * @copyright   2020 DDTheme
 * @license     
 */
if (!defined('ABSPATH')) { die(); }
?>

<?php get_header(); ?>

	<div class="row">

	<section class="col-md-8">	
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<article>						
						<h2><?php the_title(); ?></h2>						
						<?php the_content(); ?>				
					</article>
					 <?php endwhile; else: ?>
					 <article>
      				<header>
     				   <h1><?php _e('Error post'); ?></h1>
     				</header>
    				</article>
 					 <?php endif; ?>
	</section>
				<?php get_sidebar(); ?>
</div>

<?php

get_footer();