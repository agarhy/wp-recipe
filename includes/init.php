<?php

function recipe_init(){
    $labels = array(
		'name'               => _x( 'Recipes', 'post type general name', 'recipe' ),
		'singular_name'      => _x( 'Recipe', 'post type singular name', 'recipe' ),
		'menu_name'          => _x( 'Recipes', 'admin menu', 'recipe' ),
		'name_admin_bar'     => _x( 'Recipe', 'add new on admin bar', 'recipe' ),
		'add_new'            => _x( 'Add New', 'recipe', 'recipe' ),
		'add_new_item'       => __( 'Add New Recipe', 'recipe' ),
		'new_item'           => __( 'New Recipe', 'recipe' ),
		'edit_item'          => __( 'Edit Recipe', 'recipe' ),
		'view_item'          => __( 'View Recipe', 'recipe' ),
		'all_items'          => __( 'All Recipes', 'recipe' ),
		'search_items'       => __( 'Search Recipes', 'recipe' ),
		'parent_item_colon'  => __( 'Parent Recipes:', 'recipe' ),
		'not_found'          => __( 'No recipes found.', 'recipe' ),
		'not_found_in_trash' => __( 'No recipes found in Trash.', 'recipe' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Custom post type for recipes.', 'recipe' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recipe' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 10,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category','post_tag' )
	);

	register_post_type( 'recipe', $args );
}