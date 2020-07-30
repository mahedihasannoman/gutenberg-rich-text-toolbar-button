<?php
/**
 * Plugin Name: highlight — CGB Gutenberg Block Plugin
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: highlight — is a Gutenberg plugin created via create-guten-block.
 * Author: mrahmadawais, maedahbatool
 * Author URI: https://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
//require_once plugin_dir_path( __FILE__ ) . 'src/init.php';

function my_custom_format_script_register() {
    wp_register_script(
        'my-custom-format-js',
        plugins_url( 'my-custom-format.js', __FILE__ ),
        array( 'wp-rich-text' )
	);
	wp_enqueue_script( 'my-custom-format-js' );
}
add_action( 'init', 'my_custom_format_script_register' );
 
