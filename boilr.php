<?php

/**
* Plugin Name: Boilr
* description: Boilr
* Version: 1.0.0
* Author: Web Systems
* Text Domain: boilr
*/

/* Avoid direct file execution  */
defined('ABSPATH') || exit;

/* Autoload files */
require __DIR__ . '/vendor/autoload.php';

/* Wordpress texdomain for translations */
load_plugin_textdomain('boilr', false, dirname(plugin_basename(__FILE__)) . '/languages');

new Websystems\BoilrCore\Bootstrap(__DIR__);
