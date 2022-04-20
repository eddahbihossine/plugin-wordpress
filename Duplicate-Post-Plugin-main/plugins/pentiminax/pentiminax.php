<?php

/*
Plugin Name: Duplicate Post Rania
Plugin URI: https://wordpress.com
Author: Rania Elbalq
Author URI: https://wordpress.com
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);