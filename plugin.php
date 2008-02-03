<?php 

define('SITENOTES_PLUGIN_VERSION', 0.1);

add_plugin_hook('install', 'sitenotes_install');
add_controllers('controllers');
add_theme_pages('admin', 'admin');
add_navigation('Sitenotes', 'sitenotes', 'main');

/******** THIS IS A HACK ************/
add_plugin_hook('add_routes', 'sitenotes_routes');

function sitenotes_routes($router)
{	
	$router->addRoute('sitenotes_actions', new Zend_Controller_Router_Route('sitenotes/:action', array('controller'=>'index', 'module'=>'sitenotes', 'action'=>'index')));
}

/********* END HACK *****************/

function sitenotes_install()
{		
	set_option('sitenotes_plugin_version', SITENOTES_PLUGIN_VERSION);
}

?>