<?php
/*
Plugin Name: Wpcms Custom Plugin
Plugin URI:
Description:
Author:
Version:
Author URI:
*/

register_activation_hook(__FILE__, 'wpcms_custom_plugin_activate');
register_deactivation_hook(__FILE__, 'wpcms_custom_plugin_deactivate');

function wpcms_custom_plugin_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/wpcms_custom_plugin_loader.php';
    $loader = new WpcmsCustomPluginLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function wpcms_custom_plugin_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/wpcms_custom_plugin_loader.php';
    $loader = new WpcmsCustomPluginLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
