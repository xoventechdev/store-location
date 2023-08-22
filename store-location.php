<?php
/*
Plugin Name: Store Location
Version: 1.0
Author: XovenTech
Author URI: www.xoventechdev.xyz
Text Domain: store-location
Description: Store Location plugin for WSE
*/

require_once plugin_dir_path(__FILE__). 'libs\codestar-framework\codestar-framework.php';
require_once plugin_dir_path(__FILE__). 'inc\index.php';
require_once plugin_dir_path(__FILE__). 'inc\custom-post.php';


function store_location_assets() {
    wp_enqueue_style( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.css', null, '1.0.0' );
    wp_enqueue_script( 'leaflet', plugin_dir_url( __FILE__ ) . 'libs/leaflet-js/leaflet.js', [], '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'store_location_assets' );



require_once plugin_dir_path( __FILE__ ) . 'inc/shortcodes.php';


