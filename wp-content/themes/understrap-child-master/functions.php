<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
 // add custom menuMRB
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

if ( ! function_exists( 'understrap_widgets_init' ) ) {
    /**
     * Initializes themes widgets.
     */
    function understrap_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Right Sidebar', 'understrap' ),
            'id'            => 'right-sidebar',
            'description'   => 'Right sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Left Sidebar', 'understrap' ),
            'id'            => 'left-sidebar',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );


        register_sidebar( array(
            'name'          => __( 'Footer Full', 'understrap' ),
            'id'            => 'footerfull',
            'description'   => 'Widget area below main content and above footer',
            'before_widget'  => '<div id="%1$s" class="footer-widget %2$s '. understrap_slbd_count_widgets( 'footerfull' ) .'">', 
            'after_widget'   => '</div><!-- .footer-widget -->', 
            'before_title'   => '<h3 class="widget-title">', 
            'after_title'    => '</h3>', 
        ) );

        register_sidebar( array(
            'name'          => __( 'CF Sidebar', 'understrap' ),
            'id'            => 'cf',
            'description'   => 'Left sidebar for centennial farms widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title cf">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'MOTR Sidebar', 'understrap' ),
            'id'            => 'motr',
            'description'   => 'right sidebar for motr widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title cf">',
            'after_title'   => '</h3>',
        ) );

    }
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'understrap_widgets_init' );

