<?php
    // bookmarks custom output
    add_filter( 'wp_list_bookmarks', 'DE_new_classes', 10, 1 );
    function DE_new_classes( $html )
    {
        return str_replace( "class='xoxo blogroll'", "class='designers-columns'", $html );
    }
    
    //add support for thumbnail images
    add_theme_support( 'post-thumbnails' );

    //special layout classes applied to body
    function DE_body_classes($classes) {
        global $wp_query;

        if( is_front_page() ) {
            $classes[] = 'l-home cover-all' ;
        };

         if( is_singular('post') || is_page() ) {
            $classes[] = 'l-article' ;
        };
        
   return array_unique($classes);
    };
    add_filter('body_class','DE_body_classes');

    //Designers CPT

    add_action( 'init', 'register_cpt_designer' );
    function register_cpt_designer() {
    $labels = array(
    'name' => _x( 'Designers', 'designer' ),
    'singular_name' => _x( 'Designer', 'designer' ),
    'add_new' => _x( 'Add New', 'designer' ),
    'add_new_item' => _x( 'Add New Designer', 'designer' ),
    'edit_item' => _x( 'Edit Designer', 'designer' ),
    'new_item' => _x( 'New Designer', 'designer' ),
    'view_item' => _x( 'View Designer', 'designer' ),
    'search_items' => _x( 'Search Designers', 'designer' ),
    'not_found' => _x( 'No designers found', 'designer' ),
    'not_found_in_trash' => _x( 'No designers found in Trash', 'designer' ),
    'parent_item_colon' => _x( 'Parent Designer:', 'designer' ),
    'menu_name' => _x( 'Designers', 'designer' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'capability_type' => 'page',
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'designer', $args );
    flush_rewrite_rules();
    } 

    add_action('init', 'remove_header_info');
    function remove_header_info() {
        remove_action('wp_head', 'qtrans_header');
    }

?>