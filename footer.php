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
<div>
    <section>
        <header>
            <aside>
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 1')):
                ?>
                <?php endif; ?>
            </aside>
            <aside>
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 2')):
                ?>
                <?php endif; ?>
            </aside>
            <aside>
                <?php
                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area 3')):
                ?>
                <?php endif; ?>
            </aside>
        </header>
        <footer>
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