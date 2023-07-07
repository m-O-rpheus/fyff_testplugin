<?php


/* #GIT UPDATER */
/* ========================================================================================================================================================== */
    add_filter('update_plugins_raw.githubusercontent.com', function ( $update, $plugin_data, $plugin_file ) {
        
        static $response = false;
        
        if( empty( $plugin_data['UpdateURI'] ) || !empty( $update ) ) {

            return $update;
        }

        if( $response === false ) {

            $response = wp_remote_get( $plugin_data['UpdateURI'] );
        }

        if( empty( $response['body'] ) ) {

            return $update;
        }

        $my_plugin_data = json_decode( $response['body'], true );

        if( ! empty( $my_plugin_data[ $plugin_file ] ) ) {

            return $my_plugin_data[ $plugin_file ];
        }
        else {

            return $update;
        }
        
    }, 10, 3 );


?>