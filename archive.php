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


<div>
    <section>
        
            <div>
                <?php if(is_month()) { ?>
            <div>
                <h2><?php _e('Просмотр статей за')?> "<strong><?php the_time('F, Y') ?></strong>"</h2>
            </div>
                <?php } ?>
                <?php if(is_category()) { ?>
            <div>
                <h2><?php _e('Категория'); ?> "<strong><?php $current_category = single_cat_title("", true); ?></strong>"</h2>
            </div>
                <?php } ?>
                <?php if(is_tag()) { ?>
            <div>
                <h2><span><?php _e('Метка'); ?> "<strong><?php wp_title('',true,''); ?></strong>"</h2>
                </div>
                    <?php } ?>
                    <?php if(is_author()) { ?>
                <div>
                    <h2><?php _e('Статьи');?> "<strong><?php wp_title('',true,''); ?></strong>"</h2>
                </div>
                    <?php } ?>
            </div>
            
            <?php while(have_posts()) : the_post(); ?>
                <article class="col-md-12">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </article>            
            <?php endwhile; ?>

        </section>
        
        <?php get_sidebar(); ?>
    </div>

    <?php get_footer();