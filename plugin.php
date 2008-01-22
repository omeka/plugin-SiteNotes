<?php 

define('SITENOTES_PLUGIN_VERSION', 0.1);

add_plugin_hook('initialize', 'sitenotes_initialize');
add_plugin_hook('install', 'sitenotes_install');

//add_plugin_hook('add_routes', 'sitenotes_routes');

function sitenotes_initialize()
{
	add_controllers('controllers');
	add_theme_pages('admin', 'admin');
	add_navigation('Sitenotes', 'sitenotes', 'main');
}

function sitenotes_install()
{		
	set_option('sitenotes_plugin_version', SITENOTES_PLUGIN_VERSION);
}

?>