<?php
/*
* Plugin name: Recipe
* Plugin URI: http://github
* Description: Simple Recipes book
* Version: 0.1.0
* Author: Ahmed Garhy
*/

if ( !function_exists('add_action')){
    die('Plugins can not be called directly...!');
}

 //Setup
define('PLUGIN_ROOT_DIR', __FILE__);

 //Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/init.php');
include('includes/save-post.php');
include('includes/filter-content.php');
include('includes/submit-shortcode.php');
include( 'includes/front-enqueue.php' );
include( 'includes/submit-user-recipe.php' );
include( dirname(PLUGIN_ROOT_DIR).'/includes/widgets.php' );
include( 'includes/widgets/recipe.php' );

 //Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init', 2);
add_action( 'admin_init', 'recipe_admin_init');
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 );
add_filter( 'the_content', 'r_filter_recipe_content');
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 100 );

add_action( 'widgets_init', 'r_widgets_init' );

add_action( 'wp_ajax_r_submit_user_recipe', 'r_submit_user_recipe' );
add_action( 'wp_ajax_nopriv_r_submit_user_recipe', 'r_submit_user_recipe' );


 //Shortcodes

add_shortcode( 'recipe_submit', 'r_recipe_submit_shortcode');