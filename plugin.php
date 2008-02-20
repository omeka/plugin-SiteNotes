<?php 

define('SITENOTES_PLUGIN_VERSION', '0.9.0');

add_plugin_hook('install', 'sitenotes_install');
add_controllers('controllers');
add_theme_pages('admin', 'admin');
add_navigation('Sitenotes', 'sitenotes', 'main');

function sitenotes_install()
{		
	set_option('sitenotes_plugin_version', SITENOTES_PLUGIN_VERSION);
}

?>
