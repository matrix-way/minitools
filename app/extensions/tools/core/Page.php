<?php

namespace Mangocube\extensions\tools\core;
use Mangocube\base\Runner;

final class Page extends Runner
{
	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 */
	public function register() 
	{

		add_action( 'admin_menu', [$this,'custom_menu_page'] );     
	}
	
	/**
	 * Register a custom menu page.
	 */
	function custom_menu_page() {

		add_menu_page(
			__( 'WPSettings', 'wp-settings' ),
			'WP Settings',
			'manage_options',
			__DIR__.'/tools-admin.php',
			'',
			'',
			6
		);
    }
}

?>




