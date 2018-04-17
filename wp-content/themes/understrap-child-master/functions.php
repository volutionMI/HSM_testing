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
            'before_widget'  => '<div id="%1$s" class="text-flow-columns footer-widget %2$s '. understrap_slbd_count_widgets( 'footerfull' ) .'">', 
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
            'before_title'  => '<h3 class="widget-title motr">',
            'after_title'   => '</h3>',
        ) );
        register_sidebar( array(
            'name'          => __( 'mhm Sidebar', 'understrap' ),
            'id'            => 'mhm',
            'description'   => 'right sidebar for mhm widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title mhm">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'workshop Sidebar', 'understrap' ),
            'id'            => 'workshop',
            'description'   => 'right sidebar for workshop widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title Workshop lisitng">',
            'after_title'   => '</h3>',
        ) );
    }
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'understrap_widgets_init' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function cptui_register_my_cpts() {

    /**
     * Post Type: History Skills Workshop.
     */

    $labels = array(
        "name" => __( "History Skills Workshop", "understrap-child" ),
        "singular_name" => __( "History Skills Workshops", "understrap-child" ),
        "all_items" => __( "HS_workshops", "understrap-child" ),
        "add_new" => __( "Add HS_workshops", "understrap-child" ),
        "add_new_item" => __( "Add New HSWorkshop", "understrap-child" ),
        "edit_item" => __( "Edit New HSWorkshop", "understrap-child" ),
        "new_item" => __( "HSWorkshop", "understrap-child" ),
        "view_item" => __( "View HSWorkshop", "understrap-child" ),
        "view_items" => __( "View HSWorkshops", "understrap-child" ),
        "search_items" => __( "History Skills Workshop", "understrap-child" ),
        "featured_image" => __( "Featured Image", "understrap-child" ),
        "set_featured_image" => __( "Set Featured Image", "understrap-child" ),
        "remove_featured_image" => __( "Remove Featured Image", "understrap-child" ),
        "use_featured_image" => __( "Remove Featured Image", "understrap-child" ),
        "insert_into_item" => __( "Insert into Page", "understrap-child" ),
        "items_list" => __( "History Skills Workshops", "understrap-child" ),
        "attributes" => __( "HSWorkshops", "understrap-child" ),
    );

    $args = array(
        "label" => __( "History Skills Workshop", "understrap-child" ),
        "labels" => $labels,
        "description" => "Collect Date, Time, Location, Title, Speakers, Discriptions for History Skills  Workshops",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "hs_workshop", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions", "post-formats", "Date", " Location", " Speaker", " Description" ),
        "taxonomies" => array( "category", "post_tag", "conference_topics" ),
    );

    register_post_type( "hs_workshop", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_cpts_hs_workshop() {

    /**
     * Post Type: History Skills Workshop.
     */

    $labels = array(
        "name" => __( "History Skills Workshop", "understrap-child" ),
        "singular_name" => __( "History Skills Workshops", "understrap-child" ),
        "all_items" => __( "HS_workshops", "understrap-child" ),
        "add_new" => __( "Add HS_workshops", "understrap-child" ),
        "add_new_item" => __( "Add New HSWorkshop", "understrap-child" ),
        "edit_item" => __( "Edit New HSWorkshop", "understrap-child" ),
        "new_item" => __( "HSWorkshop", "understrap-child" ),
        "view_item" => __( "View HSWorkshop", "understrap-child" ),
        "view_items" => __( "View HSWorkshops", "understrap-child" ),
        "search_items" => __( "History Skills Workshop", "understrap-child" ),
        "featured_image" => __( "Featured Image", "understrap-child" ),
        "set_featured_image" => __( "Set Featured Image", "understrap-child" ),
        "remove_featured_image" => __( "Remove Featured Image", "understrap-child" ),
        "use_featured_image" => __( "Remove Featured Image", "understrap-child" ),
        "insert_into_item" => __( "Insert into Page", "understrap-child" ),
        "items_list" => __( "History Skills Workshops", "understrap-child" ),
        "attributes" => __( "HSWorkshops", "understrap-child" ),
    );

    $args = array(
        "label" => __( "History Skills Workshop", "understrap-child" ),
        "labels" => $labels,
        "description" => "Collect Date, Time, Location, Title, Speakers, Discriptions for History Skills  Workshops",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "hs_workshop", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions", "post-formats", "Date", " Location", " Speaker", " Description" ),
        "taxonomies" => array( "category", "post_tag", "conference_topics" ),
    );

    register_post_type( "hs_workshop", $args );
}

add_action( 'init', 'cptui_register_my_cpts_hs_workshop' );
