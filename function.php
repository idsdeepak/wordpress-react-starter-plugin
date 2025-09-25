<?php
/**
 * Plugin Name: react app
 * Description: A simple react app.
 * Version: 1.0
 * Author: IDS
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register shortcode
function my_shortcode_output() {
    return '<div id="shop-root">Hello from shortcode!</div>';
}
add_shortcode( 'my_shortcode', 'my_shortcode_output' );

// Enqueue JavaScript
function my_shortcode_enqueue_scripts() {
    if ( ! is_admin() ) {
        $deps = [ 'wp-element', 'react', 'react-dom', 'wp-escape-html' ];
        wp_enqueue_script(
            'react-form',
            plugin_dir_url( __FILE__ ) . 'build/index.js',
            $deps,
            filemtime( plugin_dir_url( __FILE__ ) . 'build/index.js' ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'my_shortcode_enqueue_scripts' );
