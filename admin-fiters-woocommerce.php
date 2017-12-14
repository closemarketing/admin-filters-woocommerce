<?php
/*
Plugin Name: Admin Filters WooCommerce
Plugin URI: http://www.closemarketing.es/portafolio/plugin-woocommerce-espanol/
Description: Extends the WooCommerce plugin for Spanish needs: EU VAT included in form and order, and add-ons with the Spanish language.

Version: 0.1
Requires at least: 4.9

Author: closemarketing, davidperez
Author URI: http://www.closemarketing.es/

Text Domain: admin-filters-woocommerce
Domain Path: /languages/

License: GPL
*/


//Loads translation
load_plugin_textdomain('admin-filters-woocommerce', false, dirname(plugin_basename(__FILE__)) . '/languages/');

// Includes files
require_once dirname(__FILE__) . '/lib/class-filter.php';