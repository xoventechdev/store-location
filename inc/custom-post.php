<?php

function store_location_custom_post() {
    register_post_type( 'store-location',
        array(
            'labels' => array(
                'name' => __( 'Store Location' )
            ),
            'public' => true,
            'show_ui' => true,
		    'menu_icon' => 'dashicons-location',
            'supports' => ['title'],
            'public' => false,
  
        )
    );
}
add_action( 'init', 'store_location_custom_post' );

