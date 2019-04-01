<?php
/*
Plugin Name: Shifter WP Admin Redirect
Plugin URI: https://github.com/getshifter/shifter-wp-admin-redirect
Description: Redirect WordPress Admin requests to the Shifter Dashboard
Version: 0.1.0
Author: DigitalCube
Author URI: https://getshifter.io
License: GPL2
*/

/*
 * Shifter WP API
 * Check if Shifter WordPress Plugin API Plugin Exists
 */


if (!class_exists('Shifter_API')) {
  return;
}


// define('SERVICE_TYPE', env('SERVICE_TYPE') ?: 'false');

// function wp_login_page() {
//   $ABSPATH = str_replace(array('\\','/'), DIRECTORY_SEPARATOR, ABSPATH);
//   return ((in_array($ABSPATH.'wp-login.php', get_included_files()) || in_array($ABSPATH.'wp-register.php', get_included_files()) ) || (isset($_GLOBALS['pagenow']) && $GLOBALS['pagenow'] === 'wp-login.php') || $_SERVER['PHP_SELF']== '/wp-login.php');
// }

// function shifter_wp_dashboard_redirect() {
//   include( ABSPATH . 'wp-includes/pluggable.php'); 
//   include( ABSPATH . 'wp-load.php');
//   $api = new Shifter_API;
//   if ( wp_login_page() ) {
//     wp_redirect( $api->shifter_dashboard_url, 301 ); exit;
//   }
// }

// // if ( SERVICE_TYPE === 'generator' ) {
//   shifter_wp_dashboard_redirect();
// // }

function my_custom_js() {
  echo '<script type="text/javascript">
  jQuery(document).ready(function () {
    if(window.location.href.indexOf("wp-admin") > -1) {
       alert("hello, there");
    }
  });
  </script>';
}