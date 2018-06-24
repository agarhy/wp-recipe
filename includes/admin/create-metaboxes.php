<?php

function r_crate_metaboxes(){
    add_meta_box(
		'r_recipe_options_mb',
		__( 'Recipe Options', 'recipe' ),
		'r_recipe_options_mb',
		'recipe',
		'normal',
		'high'
	);
}