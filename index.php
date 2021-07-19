<?php
/**
* Wordpress Theme
* Template Name: Index Page
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

<?php pll_e('read_more'); ?>

<div>
    <section>
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </article>
        <?php endwhile; ?>
    </section>


    <?php get_sidebar(); ?>
</div>
<?php
get_footer();

