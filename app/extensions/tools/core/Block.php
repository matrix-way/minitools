<?php

namespace Mangocube\extensions\tools\core;
use Mangocube\base\Runner;

final class Block extends Runner
{
	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 */
	public function register() 
	{

		add_action( 'init', [$this,'register_block_first'] );     
	}
	function moption_ready_get_dir_list($path = 'blocks'){

		$widgets_modules = [];
		$dir_path        = WP_SETTINGS_FR_DIR_PATH."build/".$path;
		$dir             = new \DirectoryIterator($dir_path);
		 
		 foreach ($dir as $fileinfo) {
			 if ($fileinfo->isDir() && !$fileinfo->isDot()) {
				 $widgets_modules[$fileinfo->getFilename()] = $fileinfo->getFilename();
				
			 }
		 }
	
		 return $widgets_modules;
	}
	
	function register_block_first() {

		if ( ! function_exists( 'register_block_type' ) ) {
			// Block editor is not available.
			return;
		}
	
		if(!file_exists(WP_SETTINGS_FR_DIR_PATH . 'build/blocks')){
		   return;
		}
		$blocks = $this->moption_ready_get_dir_list('blocks');
		if(is_array($blocks)){
			foreach($blocks as $item){
				register_block_type( WP_SETTINGS_FR_DIR_PATH . 'build/blocks/'.$item );
			}
		}
		
		// register_block_type( WP_SETTINGS_FR_DIR_PATH . 'build/blocks/block-1' );
		// register_block_type( WP_SETTINGS_FR_DIR_PATH . 'build/blocks/block-2' );
		// //register_block_type( WP_SETTINGS_FR_DIR_PATH . 'build/blocks/block-3' );
	}
}

?>




