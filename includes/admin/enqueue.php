<?php

function r_admin_enqueue(){

    global $typenow;
    if($typenow !='recipe'){
        return;
    }

    wp_register_style( 
        'r_bootstrap', 
        plugins_url( '/assets/styles/bootstrap.css', PLUGIN_ROOT_DIR )        
    );

    wp_enqueue_style( 'r_bootstrap' );
}