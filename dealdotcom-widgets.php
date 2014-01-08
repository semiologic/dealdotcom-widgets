<?php
/*
xPlugin Name: Dealdotcom Widgets
Plugin URI: http://www.semiologic.com/software/dealdotcom/
Description: This plugin is no longer in development.
Version: 2.0.1
Author: Denis de Bernardy
Author URI: http://www.getsemiologic.com

*/

// obsolete file

$active_plugins = get_option('active_plugins');

if ( !is_array($active_plugins) )
{
	$active_plugins = array();
}

foreach ( (array) $active_plugins as $key => $plugin )
{
	if ( $plugin == 'dealdotcom-widgets/dealdotcom-widgets.php' )
	{
		unset($active_plugins[$key]);
		break;
	}
}

sort($active_plugins);

update_option('active_plugins', $active_plugins);
?>