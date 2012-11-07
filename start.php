<?php
/**
 * ThemeAiry
 * 
 * @package ThemeAiry
 */

function theme_airy_init () {
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// Remove "more" menu item
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
}

elgg_register_event_handler('init', 'system', 'theme_airy_init');
