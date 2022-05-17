<?php
/*
 * Plugin Name: Digitally Cultured - Advanced Notifications
 * Plugin URI: https://digitallycultured.com/
 * Description: SMS notifications for Ninja Forms
 * Version: 1.0.0
 * Author: Digitally Cultured
 * Author URI: https://digitallycultured.com
 * Text Domain: ninja-forms-conditionals
 * Domain Path: /lang/
 */

define( 'DC_SMS_PATH', plugin_dir_path( __FILE__ ) );

include( 'includes/sms.php' );


register_activation_hook( __FILE__, 'dc_send_activation_sms' );

add_action( 'wp_head', 'dc_send_form_notification' );

function dc_send_form_notification( $data ) {

    $number = '';



}