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
 * JS Scripts
 * Admin and Front-End
 * Load after enqueue jQuery
 */

add_action('wp_enqueue_scripts', 'shifter_wp_admin_redirect_js' );

function shifter_wp_admin_redirect_js() {

  $js = plugins_url( 'main/main.js', __FILE__ );

  wp_register_script('shifter-wp-admin-redirect-js', $js, array( 'jquery' ));
  wp_localize_script('shifter-wp-admin-redirect-js', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

  if (is_user_logged_in()) {
    wp_enqueue_script('shifter-wp-admin-redirect-js');;
  }
}