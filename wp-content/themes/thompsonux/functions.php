<?php
/*-------------------------------------------------------
 * Divi Cake Child Theme Functions.php
------------------ ADD YOUR PHP HERE ------------------*/

function divichild_enqueue_scripts() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divichild_enqueue_scripts' );


/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function cptui_register_my_cpts()
{


       /**
        * Post Type: Clients.
        */

       $labels = array(
           "name" => __( "Clients", "" ),
           "singular_name" => __( "Client", "" ),
       );

       $args = array(
           "label" => __( "Clients", "" ),
           "labels" => $labels,
           "description" => "",
           "public" => true,
           "publicly_queryable" => true,
           "show_ui" => true,
           "show_in_rest" => false,
           "rest_base" => "",
           "has_archive" => "clients",
           "show_in_menu" => true,
           "show_in_nav_menus" => true,
           "exclude_from_search" => false,
           "capability_type" => "post",
           "map_meta_cap" => true,
           "hierarchical" => false,
           "rewrite" => array( "slug" => "clients", "with_front" => true ),
           "query_var" => true,
           "supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
           "taxonomies" => array( "category", "post_tag" ),
       );

       register_post_type( "clients", $args );

       /**
        * Post Type: Clients.
        */

       $labels = array(
           "name" => __( "Experiments", "" ),
           "singular_name" => __( "Experiment", "" ),
       );

       $args = array(
           "label" => __( "Experiments", "" ),
           "labels" => $labels,
           "description" => "",
           "public" => true,
           "publicly_queryable" => true,
           "show_ui" => true,
           "show_in_rest" => false,
           "rest_base" => "",
           "has_archive" => "experiments",
           "show_in_menu" => true,
           "show_in_nav_menus" => true,
           "exclude_from_search" => false,
           "capability_type" => "post",
           "map_meta_cap" => true,
           "hierarchical" => false,
           "rewrite" => array( "slug" => "experiments", "with_front" => true ),
           "query_var" => true,
           "supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
           "taxonomies" => array( "category", "post_tag" ),
       );

       register_post_type( "experiments", $args );

       
}

add_action( 'init', 'cptui_register_my_cpts' );

?>