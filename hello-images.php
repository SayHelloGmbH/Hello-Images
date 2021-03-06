<?php

/*
Plugin Name: Hello Images
Plugin URI: https://github.com/SayHelloGmbH/Hello-Images
Description: Image resize proxy for WordPress
Author: Nico Martin
Author URI: https://nicomartin.ch
Version: 0.1.5
Text Domain: hello-images
Domain Path: /languages
 */

include_once 'includes/class-plugin.php';
include_once 'includes/libs/class-htaccess.php';
register_activation_hook( __FILE__, [ 'SayHello\HelloImages\Plugin', 'add' ] );
register_deactivation_hook( __FILE__, [ 'SayHello\HelloImages\Plugin', 'remove' ] );

require_once 'includes/class-imageproxy.php';
add_action( 'init', [ 'SayHello\HelloImages\ImageProxy', 'get_image' ] );
