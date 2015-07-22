<?php
/*
function autoload( $class, $dir = null ) {

    if ( is_null( $dir ) ) {
        $directory = pathinfo(dirname(__FILE__), PATHINFO_DIRNAME);
        $dir = $directory . DIRECTORY_SEPARATOR . 'modules/';
    }

    foreach ( scandir( $dir ) as $file ) {

        // directory?
        if ( is_dir( $dir.$file ) && substr( $file, 0, 1 ) !== '.' ) {
            autoload($class, $dir . $file . '/');
        }

        // php file?
        if ( substr( $file, 0, 2 ) !== '._' && preg_match( "/.php$/i" , $file ) ) {

            // filename matches class?
            if ( str_replace( '.php', '', $file ) == $class || str_replace( '.class.php', '', $file ) == $class ) {

                include_once $dir . $file;
            }
        }
    }
}

spl_autoload_register('autoload');
*/

// INCLUDE CORE CLASS
include_once(dirname(__FILE__).'/../modules/blockstrap.php');

// INCLUDE ADDITIONAL COMPONENTS
include_once(dirname(__FILE__).'/../modules/api.php');
include_once(dirname(__FILE__).'/../modules/cache.php');
include_once(dirname(__FILE__).'/../modules/dnkey.php');
include_once(dirname(__FILE__).'/../modules/blockauth.php');