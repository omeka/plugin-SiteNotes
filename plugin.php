<?php 
// Add plugin hooks
add_plugin_hook('install', 'site_notes_install');
add_plugin_hook('uninstall', 'site_notes_uninstall');
add_plugin_hook('upgrade', 'site_notes_upgrade');
add_plugin_hook('define_routes', 'site_notes_define_routes');
add_plugin_hook('admin_theme_header', 'site_notes_admin_theme_header');
add_plugin_hook('define_acl', 'site_notes_define_acl');

// Add filters.
add_filter('admin_navigation_main', 'site_notes_admin_navigation_main');

function site_notes_install()
{		
	set_option('site_notes_content', 'Enter text for your site notes here.');
}

function site_notes_uninstall()
{
	delete_option('site_notes_content');
}

function site_notes_upgrade()
{   
    delete_option('site_notes_plugin_version');
}

function site_notes_define_routes($router)
{	
    $router->addRoute(
        'site_notes_edit_route', 
        new Zend_Controller_Router_Route(
            'site-notes/:action', 
            array(
                'module'       => 'site-notes', 
                'controller'   => 'index'
            )
        )
	);
}

function site_notes_admin_theme_header($request)
{
	if ($request->getModuleName() == 'site-notes') {
		echo js('tiny_mce/tiny_mce');
		echo js('sitenotes');
	}
}

function site_notes_define_acl($acl)
{
	$acl->loadResourceList(array('SiteNotes_Index' => array('edit')));
}

function site_notes_admin_navigation_main($nav)
{
    $nav['Site Notes'] = uri('site-notes');
    return $nav;
}