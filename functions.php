<?php
/**
 * Sets our SCSS constant for the improved build process
 *
 * @since Blvd 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}

/**
 * registering the fullwidth quicksearch area & deregistering a few 
 * uneeded widget areas
 */
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

        unregister_sidebar( 'idx-horizontal-search' );
        unregister_sidebar( 'blvd-main-sidebarwidgets' );
        unregister_sidebar( 'blvd-topbar-sidebarwidgets' );
    }
    add_action( 'widgets_init', 'hji_buyers_realty_widgets_init' );
}

/**
 * Loading in extra fonts
 */
if ( !function_exists( 'hji_buyers_realty_load_fonts' ) ) {
    function hji_buyers_realty_load_fonts() {
        wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600' );
    }
    add_action( 'wp_enqueque_scripts', 'hji_buyers_realty_load_fonts' );
}

/**
 * loading in child theme js
 */
if ( !function_exists( 'hji_buyers_realty_load_scripts' ) ) {
    function hji_buyers_realty_load_scripts() {
        wp_enqueue_script( 'bodega_scripts', get_stylesheet_directory_uri() . '/assets/js/main.js' );
    }
    add_action( 'wp_enqueue_scripts', 'hji_buyers_realty_load_scripts' );
}