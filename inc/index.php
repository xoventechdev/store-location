<?php


   //
    // Set a unique slug-like ID
    $prefix = 'store_location_options';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Store Location',
        'menu_slug'  => 'store-location',
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'fields' => array(
            array(
                'id'    => 'api_key',
                'type'  => 'text',
                'title' => 'Google Map API Key',
            ),

        )
    ) );