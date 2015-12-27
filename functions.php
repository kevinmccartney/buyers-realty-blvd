<?php
/**
 * Sets our SCSS constant for the improved build process
 *
 * @since Blvd 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}

if ( !function_exists( 'hji_buyers_realty_widgets_init' ) ) {
    function hji_buyers_realty_widgets_init() {
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
        unregister_sidebar( 'blvd-topbar-sidebarwidgets');
    }
    add_action('widgets_init', 'hji_buyers_realty_widgets_init', 11);
}

if ( !function_exists('hji_buyers_realty_load_fonts') ) {
    function hji_buyers_realty_load_fonts() {
        wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600');
        wp_enqueue_style( 'googleFonts');
    }
    add_action('wp_enquque_scripts', 'hji_buyers_realty_load_fonts', 11);
}
