<?php
/**
 * Plugin Name: Custom Post Type Plugin
 * Plugin URI: http://www.diviplugins.com/plugins/custom-post-types
 * Description: Creates new custom post type RECIPES and recipe taxonomy TYPES and TAGS.
 * Version: 1.0
 * Author: Brad Crawford
 * Author URI: http://www.diviplugins.com
 **/

// Create a new category called 'Type' for our recipes.
if( ! function_exists('dp_define_recipe_type_taxonomy')) :
    function dp_define_recipe_type_taxonomy()
    {
        $labels = array( // these labels change the text in the WordPress dashboard to match your taxonomy name
            'name' => 'Types',
            'singular_name' => 'Type',
            'search_items'  => 'Search Types',
            'all_items'     => 'All Types',
            'parent_item'   => 'Parent Type:',
            'edit_item'     => 'Edit Type:',
            'update_item'   => 'Update Type',
            'add_new_item'  => 'Add New Type',
            'new_item_name' => 'New Type Name',
            'menu_name'     => 'Types',
            'view_item'     => 'View Types'
        );

        $args = array(
            'labels'       => $labels, //reference to the labels array above
            'hierarchical' => true, // whether a new instance of this taxonomy can have a parent
            'query_var'    => true // whether you can use query variables in the URL to access the new post types
        );

        // Tell WordPress about our new taxonomy and assign it to a post type
        register_taxonomy( 'type', 'recipes', $args );
    }
endif;

// Call our new taxonomy function
add_action('init', 'dp_define_recipe_type_taxonomy');

// Add tags to our recipes
if( ! function_exists('dp_define_recipe_tag_taxonomy')) :
    function dp_define_recipe_tag_taxonomy()
    {
        $labels = array( // these labels change the text in the WordPress dashboard to match your taxonomy name
            'name'          => 'Tags',
            'singular_name' => 'Tag',
            'search_items'  => 'Search Tags',
            'popular_items' => ( 'Popular Tags' ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'all_items'     => 'All Tags',
            'edit_item'     => 'Edit Tag:',
            'update_item'   => 'Update Tag',
            'add_new_item'  => 'Add New Tag',
            'new_item_name' => 'New Tag Name',
            'menu_name'     => 'Tags',
            'view_item'     => 'View Tags'
        );

        $args = array(
            'labels'       => $labels, //reference to the labels array above
            'hierarchical' => false, // whether a new instance of this taxonomy can have a parent
            'query_var'    => true // whether you can use query variables in the URL to access the new post types
        );

        // Tell WordPress about our new taxonomy and assign it to a post type
        register_taxonomy( 'tag', 'recipes', $args );

}
endif;

// Call our new taxonomy function
add_action('init', 'dp_define_recipe_tag_taxonomy');

// Create our new post type
if( ! function_exists('dp_register_recipes')) :
    function dp_register_recipes()
    {
        $labels = array( // these labels change the text in the WordPress dashboard and other places to match your custom post type name
            'name'               => 'Recipes',
            'singular_name'      => 'Recipe',
            'add_new'            => 'Add New Recipe',
            'add_new_item'       => 'Add New Recipe',
            'edit_item'          => 'Edit Recipe',
            'new item'           => 'New Recipe',
            'all_items'          => 'All Recipes',
            'view_item'          => 'View Recipe',
            'search_items'       => 'Search Recipes',
            'not_found'          => 'No recipes found',
            'not_found_in_trash' => 'No recipes found in Trash',
            'menu_name'          => 'Recipes'
        );

        $args = array(
            'labels'      => $labels, // reference to the labels array above
            'public'      => true, // whether the post type is available in the admin dashboard or front-end of site
            'taxonomies'  => array( 'Type', 'Tag'), // currently set to the Type taxonomy we created in the function above. You could leave blank for none or
            'rewrite'     => array( 'slug' => 'recipe'), // base URL to use for your post type
            'hierarchical'=> false, // whether a new instance of this post type can have a parent. 'page-attributes' must be added to the supports array below for this to work.
            'has_archive' => true, // enables archive page for post type. Copy page template from theme and rename archive-recipes.php
            'supports'    => array( // this array defines what meta boxes appear when adding/editing the post type
                'title',
                'editor',
                'thumbnail',
                'custom-fields',
                'comments',
                'excerpt',
                'revisions'
            ),
            'menu_icon' => 'dashicons-edit', // sets the icon to display in the menu
            'menu_position' => 5, // position in the menu; the higher the number, the lower the position
        );

        // Tell WordPress about our new post type
        register_post_type( 'recipes', $args );

    }

endif;

// Call our new posty type function
add_action( 'init', 'dp_register_recipes' );

// This is required for pretty links to custom post types to work
function dp_recipe_cpt_install() {

    dp_define_recipe_type_taxonomy();
    dp_define_recipe_tag_taxonomy();
    dp_register_recipes();
    flush_rewrite_rules();

}

// When the plugin is deactivated/activated, run the pretty link function above
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'dp_recipe_cpt_install' );