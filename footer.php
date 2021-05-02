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
<div class="row">
    <section class="col-md-12">
        <header class=row>
            <aside class="col-md-4">
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 1')):
                ?>
                <?php endif; ?>
            </aside>
            <aside class="col-md-4">
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 2')):
                ?>
                <?php endif; ?>
            </aside>
            <aside class="col-md-4">
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 3')):
                ?>
                <?php endif; ?>
            </aside>
        </header>
        <footer class="row">
            <p>&copycopyright<?php echo (!date('Y'))? "2021 - ". date(' Y ') : date(' Y '); ?></p>
        </footer>
    </section>
</div>

</div>
</div>
<?php wp_footer(); ?>
</div>
</body>
</html>