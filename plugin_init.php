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



add_filter('update_plugins_raw.githubusercontent.com', function( $update, $plugin_data, $plugin_file, $locales ) {

    print_r( $plugin_data );

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