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
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article itemscope itemtype="http://schema.org/Article">
            <h2 itemprop="name"><?php the_title(); ?></h2>
            <span><?php the_time('j F Y'); ?></span>
            <span><?php the_author(); ?></span>            
             <div itemprop="articleBody"><?php the_content(); ?></div>
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