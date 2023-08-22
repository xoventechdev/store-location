<?php


if( class_exists( 'CSF' ) ) {

    $prefix = 'store_location_options';


    
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Store Location',
        'menu_slug'  => 'store-location',
    ) );

    CSF::createSection( $prefix, array(
        'fields' => array(
            array(
                'id'    => 'api_key',
                'type'  => 'text',
                'title' => 'Google Map API Key',
            ),

        )
    ) );




    $prefix = 'store_locator_meta';

    CSF::createMetabox( $prefix, [
        'title'     => 'Options',
        'post_type' => 'store-location',
        'data_type' => 'unserialize',
    ] );

    CSF::createSection( $prefix, [
        'fields' => [
            [
                'id'    => 'map_type',
                'type'  => 'select',
                'title' => 'Map Type',
                'options' => [
                    'google_map' => 'Google Map',
                    'openstreet_map' => 'OpenStreet Map',
                ],
            ],
            [
                'id' => 'maps',
                'type' => 'group',
                'title' => 'Maps',
                'fields' => [
                    [
                        'id' => 'title',
                        'type' => 'text',
                        'title' => 'Title',
                    ],

                    [
                        'id' => 'latitude',
                        'type' => 'text',
                        'title' => 'Latitude',
                    ],
                    [
                        'id' => 'longitude',
                        'type' => 'text',
                        'title' => 'Longitude',
                    ],
                    [
                        'id' => 'address',
                        'type' => 'text',
                        'title' => 'Address',
                    ],
                    [
                        'id' => 'phone',
                        'type' => 'text',
                        'title' => 'Phone',
                    ],
                    [
                        'id' => 'hours',
                        'type' => 'text',
                        'title' => 'Hours',
                    ],
                    [
                        'id' => 'website',
                        'type' => 'text',
                        'title' => 'Website',
                    ],
                ]
            ]
        ]
    ] );
}

