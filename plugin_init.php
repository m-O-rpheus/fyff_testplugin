<?php
/*
 * Plugin Name: fyff_testplugin
 * Plugin URI: https://fyff.net
 * Description: FYFF Testplugin
 * Author: Markus Jäger
 * Author URI: https://markus-jaeger.de
 * License: GPL
 * Version: 1.0.0
 * Update URI: https://raw.githubusercontent.com/m-O-rpheus/fyff_testplugin/main/plugin_info.json
 */

defined( 'ABSPATH' ) || exit;





/* #INCLUDE "functions" DIR */
/* ========================================================================================================================================================== */
    $functions_dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR;

    foreach ( scandir( $functions_dir ) as $file ) {

        if ( pathinfo( $file, PATHINFO_EXTENSION ) === 'php' && file_exists( $functions_dir.$file ) ) {

            require_once ( $functions_dir.$file );
        }
    }


?>