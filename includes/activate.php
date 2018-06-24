<?php

function r_activate_plugin(){
    if( version_compare( get_bloginfo( 'version' ), '4.2', '<')){
        wp_die(__('Please update Wordpress to 4.2 to higher to use this plugin','recipt'));
    }

    recipe_init();
	flush_rewrite_rules();

}