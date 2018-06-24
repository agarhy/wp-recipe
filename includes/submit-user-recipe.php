<?php

function r_submit_user_recipe(){
	$output                         =   [ 'status' => 1 ];

	if(empty( $_POST['ingredients'] ) ||  empty( $_POST['time'] ) ){
		wp_send_json($output);
	}

	$title                          =   sanitize_text_field( $_POST['title'] );
	$content                        =   wp_kses_post( $_POST['content'] );
	$recipe_data                    =   [];
	$recipe_data['ingredients']     =   sanitize_text_field( $_POST['ingredients'] );
	$recipe_data['time']            =   sanitize_text_field( $_POST['time'] );
	

	$post_id                        =   wp_insert_post([
		'post_content'              =>  $content,
		'post_name'                 =>  $title,
		'post_title'                =>  $title,
		'post_status'               =>  'pending',
		'post_type'                 =>  'recipe'
	]);

	update_post_meta( $post_id, 'recipe_data', $recipe_data );

	$output['status']               =   2;
	wp_send_json( $output );
}