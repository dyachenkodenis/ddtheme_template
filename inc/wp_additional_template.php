<?php if (!defined('ABSPATH')) { die(); }
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

/* WIDGET START*/
function theme_widgets_init() {

    // Register default sidebar
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'simpledwptemplate' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );    
 }
add_action( 'widgets_init', 'theme_widgets_init' );
/* WIDGET STOP*/

/* PAGINATION START */
function theme_pagination_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link('Назад') );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li></li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li></li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link('Далее') );

    echo '</ul></div>' . "\n";

}
/* PAGINATION STOP */

/* SLIDER START */
/*add_action('init', 'create_post_type');
function create_post_type(){
    register_post_type('slide',
        array(
            'labels' => array(
                'name'=> __('Sliders'),
                'singular_name'=>__('Slide')                
            ),            
            'public'=> true,
            'has_archive'=> true, 
            'rewrite' => array('slug' => 'slide'),           
            'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
            'show_in_rest' => true,
        )
    );     
}
add_post_type_support('slide', array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ));*/
/* SLIDER STOP */


