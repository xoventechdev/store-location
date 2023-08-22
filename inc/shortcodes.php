<?php

function store_location_map_shortcode($atts) {
    $maps = get_post_meta($atts['id'], 'maps', true);
    // $map_type = get_post_meta($atts['id'], 'map_type', true);

    $html = '';
    $html .='
    
    <div style="height: 500px;width: 100%"  id="map">
    <script>
    var markers = []; 
    var map = L.map("map").setView([51.505, -0.09], 13);

    L.tileLayer(\'https://tile.openstreetmap.org/{z}/{x}/{y}.png\', {
    }).addTo(map);';


    if(!empty($maps)){
        foreach($maps as $map){
            $html .= 'var marker = L.marker(['.$map['latitude'].', '.$map['longitude'].']).addTo(map)
            .bindPopup("<h4>'.$map['title'].'</h4><br>Address : '.$map['address'].'<br>Phone : '.$map['phone'].'<br>Hours : '.$map['hours'].'<br>Website : '.$map['website'].'")
            .openPopup();
            markers.push(marker);';
        }
    }

    

    $html .='
    var bounds = L.latLngBounds([]);
    markers.forEach(function(marker) {
        bounds.extend(marker.getLatLng());
    });

    map.fitBounds(bounds);

    </script></div>';


    return $html;
}
add_shortcode( 'store_location', 'store_location_map_shortcode' );