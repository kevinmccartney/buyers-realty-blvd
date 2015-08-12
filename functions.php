<?php
/**
 * Sets our SCSS constant for the improved build process
 *
 * @since Blvd 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}

register_sidebar( array(
    'id'            => 'fullwidth_qs',
    'name'          => 'Full Width Quick Search Area',
    'description'   => __( 'Place a quicksearch widget here & it will appear in the full-width area below the slideshow.' ),
    'before_widget' => '<div class="full-width-quicksearch-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
) );

?>