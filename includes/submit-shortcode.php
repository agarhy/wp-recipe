<?php

function r_recipe_submit_shortcode(){
    $submitHTML = file_get_contents('submit-template.php', true);

    $editorHTML =   r_generate_content_editor();
	$submitHTML  =   str_replace(
		"CONTENT_EDITOR",
		$editorHTML,
		$submitHTML
	);
    return $submitHTML;
}


function r_generate_content_editor(){
	ob_start();
	wp_editor( '', 'recipecontenteditor' );
	$editor_contents            =   ob_get_clean();
	return $editor_contents;
}