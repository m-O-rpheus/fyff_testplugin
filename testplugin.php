<?php
/*
 * Plugin Name: FYFF TESTPLUGIN
 * Plugin URI: https://fyff.net
 * Description: 
 * Author: Markus Jäger
 * Author URI: https://markus-jaeger.de
 * License: GPL
 * Version: 1.0.0
 * Update URI:  https://my-domain.com/custom-plugins/plugins-info.json
 */

defined( 'ABSPATH' ) || exit;





add_action( 'wp_footer', function () {

    echo 'TEST';

}, 10, 0 );



?>