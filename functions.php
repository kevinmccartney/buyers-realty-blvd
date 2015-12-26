<?php
/**
 * Sets our SCSS constant for the improved build process
 *
 * @since Blvd 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}

if ( !function_exists( 'hji_bradford_widgets_init' ) ) {
    function hji_bradford_widgets_init() {
        register_sidebar( array(
            'id'            => 'fullwidth_qs',
            'name'          => 'Full Width Quick Search Area',
            'description'   => __( 'Place a quicksearch widget here & it will appear in the full-width area below the slideshow.' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s"><div class="widget-inner">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title"><h3>',
            'after_title'   => '</div></h3>',
        ));

        unregister_sidebar( 'idx-horizontal-search');
        unregister_sidebar( 'blvd-main-sidebarwidgets');
    }
    add_action('widgets_init', 'hji_bradford_widgets_init', 11);
}

?>
