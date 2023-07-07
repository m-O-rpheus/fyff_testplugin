<?php
/*
 * Plugin Name: fyff_testplugin
 * Plugin URI: https://fyff.net
 * Description: FYFF Testplugin
 * Author: Markus Jäger
 * Author URI: https://markus-jaeger.de
 * License: GPL
 * Version: 1.0.0
 */

defined( 'ABSPATH' ) || exit;








 
add_filter( 'update_plugins_wprepository.semiweb.eu', function( $update, array $plugin_data, string $plugin_file, $locales ) {

    print_r( $plugin_data );


    /*if ( $plugin_file !== 'whatever-plugin/whatever-plugin.php' ) {
        
        return $update;   
    }*/

    /*if ( !empty( $update ) ) {

        return $update;
    }*/
    
    
    $changelog = bbloomer_whatever_plugin_request();

    if ( !version_compare( $plugin_data['Version'], $changelog->latest_version, '<' ) ) {

        return $update;
    }


    print_r( $plugin_data );



    print_r( array(
        'slug' => 'fyff_testplugin-main',
        'version' => $changelog->latest_version,
        'url' => $plugin_data['PluginURI'],
        'package' => $changelog->download_url,
    ) );

    return array(
        'slug' => 'fyff_testplugin-main',
        'version' => $changelog->latest_version,
        'url' => $plugin_data['PluginURI'],
        'package' => $changelog->download_url,
    );

}, 9999, 4 );
 

 
function bbloomer_whatever_plugin_request() {
    $access = wp_remote_get( 'https://wprepository.semiweb.eu/json.json', array( 'timeout' => 10, 'headers' => array( 'Accept' => 'application/json' ) ) );

    if ( !is_wp_error( $access ) && 200 === wp_remote_retrieve_response_code( $access ) ) {

        $result = json_decode( wp_remote_retrieve_body( $access ) );
        return $result;      
    }
}











add_action( 'wp_footer', function () {

    echo 'TEST';

}, 10, 0 );



?>