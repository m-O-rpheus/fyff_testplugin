<?php
/*
 * Plugin Name: fyff_testplugin
 * Plugin URI: https://fyff.net
 * Description: FYFF Testplugin
 * Author: Markus Jäger
 * Author URI: https://markus-jaeger.de
 * License: GPL
 * Version: 1.0.0
 * Update URI: https://raw.githubusercontent.com/m-O-rpheus/fyff_testplugin/main/plugins-info.json
 */

defined( 'ABSPATH' ) || exit;



add_filter('update_plugins_github.com', function( $update, $plugin_data, $plugin_file, $locales ) {

    // Überprüfen, ob ein neues Update verfügbar ist
    //if (version_compare($plugin_data['Version'], '1.0.0', '<')) {
        $update = true;
    //}

    return $update;
    
}, 10, 4);









add_action( 'wp_footer', function () {

    echo 'TEST';

}, 10, 0 );



?>