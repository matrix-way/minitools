<?php

namespace Mangocube\extensions\tools;
use Mangocube\base\Extension;


define( 'WP_SETTINGS_FR_ROOT', dirname(__FILE__) );

define( 'WP_SETTINGS_FR_URL', plugins_url( '/', __FILE__ ) );
define( 'WP_SETTINGS_FR_ROOT_JS', plugins_url( '/assets/js/', __FILE__ ) );
define( 'WP_SETTINGS_FR_BUILD_JS', plugins_url( '/build/', __FILE__ ) );
define( 'WP_SETTINGS_FR_ROOT_CSS', plugins_url( '/assets/css/', __FILE__ ) );
define( 'WP_SETTINGS_FR_BUILD_CSS', plugins_url( '/build/', __FILE__ ) );
define( 'WP_SETTINGS_FR_ROOT_ICON', plugins_url( '/assets/icons/', __FILE__ ) );
define( 'WP_SETTINGS_FR_ROOT_IMG', plugins_url( '/assets/img/', __FILE__ ) );
define( 'WP_SETTINGS_FR_BUILD_IMG', plugins_url( '/build/img/', __FILE__ ) );

define( 'WP_SETTINGS_FR_DIR_URL', plugin_dir_url( __FILE__ ));
define( 'WP_SETTINGS_FR_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_SETTINGS_FR_BASE', plugin_basename( WP_SETTINGS_FR_ROOT ) );
define( 'WP_SETTINGS_FR_PLUGIN_BASE', plugin_basename(__FILE__) );


final class Init extends Extension
{
	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 * @desc all class should implement runner class
	 */
	public static function get_services() 
	{
      
		return [
			core\Enqueue::class,		
			core\Page::class,		
			core\Block::class,		
	 	];
        
	}
	
}

?>




