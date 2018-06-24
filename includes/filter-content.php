<?php

function r_filter_recipe_content( $content ){
	if( !is_singular( 'recipe' ) ){
		return $content;
	}
	global $post, $wpdb;
	$recipe_tpl_res             =   wp_remote_get(
		plugins_url( 'templates/recipe-template.php', PLUGIN_ROOT_DIR )
    );
    $recipe_html                =   wp_remote_retrieve_body( $recipe_tpl_res );
	$recipe_data                =   get_post_meta( $post->ID, 'recipe_data', true );
	$recipe_html                =   str_replace( 'INGREDIENTS_PH', nl2br($recipe_data['ingredients']), $recipe_html );
	$recipe_html                =   str_replace( 'COOKING_TIME_PH', $recipe_data['time'], $recipe_html );
	$recipe_html                =   str_replace( 'INSTRUCTIONS_PH', $content, $recipe_html );
	
    $recipe_html                =   str_replace( "INGREDIENTS_I18N", __("Ingredients", "recipe"), $recipe_html );
	$recipe_html                =   str_replace( "COOKING_TIME_I18N", __("Cooking Time", "recipe"), $recipe_html );
	$recipe_html                =   str_replace( "INSTRUCTIONS_I18N", __("Cooking Instructions", "recipe"), $recipe_html );

	$recipe_html                =   str_replace( "RECIPE_ID", $post->ID, $recipe_html );


    return $recipe_html;
}