<?php

namespace Mangocube\extensions\tools\core;
use Mangocube\base\Runner;

final class Enqueue extends Runner
{
	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 */
	public function register() 
	{

		add_action( 'admin_enqueue_scripts', [$this,'enqueue_admin_script'] );
      
	}

	public function enqueue_admin_script($hook)
	{
		
		if ( 'tools-admin.php' != basename($hook) ) {
			return;
		 }
		
		 if(!file_exists(WP_SETTINGS_FR_DIR_PATH . 'build/framework/options/settings.asset.php')){
			return;
		 }
	 
		 $assets = include_once( WP_SETTINGS_FR_DIR_PATH . 'build/framework/options/settings.asset.php' );
		 
		 wp_enqueue_script( 'minitools-settings-script', WP_SETTINGS_FR_BUILD_JS . 'framework/options/settings.js', $assets['dependencies'], $assets['version'], true );
		
		 foreach($assets['dependencies'] as $style){
			 wp_enqueue_style($style);
		 }
	}
	
}

?>




