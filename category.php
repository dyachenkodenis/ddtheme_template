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
<?php get_header(); ?>
<div class="row">
    <section class="col-md-8">

        <header>
           <h1>Category name</h1>
        </header>
        <?php while(have_posts()) : the_post(); ?>
        <article class="col-md-12">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </article>
        <?php endwhile; ?>

        <footer>
             <?php echo theme_pagination_posts_nav(); ?>
        </footer>
       
    </section>
  
    
    <?php get_sidebar(); ?>
</div>
<?php
get_footer();