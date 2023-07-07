<?php
/*
 * Plugin Name: fyff_testplugin
 * Plugin URI: https://fyff.net
 * Description: FYFF Testplugin
 * Author: Markus Jäger
 * Author URI: https://markus-jaeger.de
 * License: GPL
 * Version: 1.0.0
 * Update URI: https://wprepository.semiweb.eu/json.json
 */

defined( 'ABSPATH' ) || exit;


add_filter('update_plugins_wprepository.semiweb.eu', function ( $update, $plugin_data, $plugin_file ) {

    print_r( $plugin_data );


    
    static $response = false;
    
    if( empty( $plugin_data['UpdateURI'] ) || ! empty( $update ) )
        return $update;
    
    if( $response === false )
        $response = wp_remote_get( $plugin_data['UpdateURI'] );
    
    if( empty( $response['body'] ) )
        return $update;
    
    $custom_plugins_data = json_decode( $response['body'], true );



    print_r( $custom_plugins_data );
    

    
    if( ! empty( $custom_plugins_data[ $plugin_file ] ) )
        return $custom_plugins_data[ $plugin_file ];
    else
        return $update;
    
}, 10, 3);
    














add_action( 'wp_footer', function () {

    echo 'TEST';

}, 10, 0 );



?>