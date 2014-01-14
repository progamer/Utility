<?php
App::uses ( 'UtilityAppModel', 'Utility.Model' );

/**
 * @name Utility
 * @version 1.0
 * @author Issa Khalil<issa.mh.khalil@gmail.com>< http://www.linkedin.com/in/issakhalil>
 * @license
 * @link
 */
class Utility extends UtilityAppModel {
	public $name = 'Utility';
	public $useTable = false;
	
	/**
	 * @name deleteFiles
	 * @author Issa Khalil
	 * @param
	 * @param string $path
	 */
	public function deleteFiles($path = null) {
		
		// set path to cache folder if not set
		if (! $path) {
			$path = TMP . 'cache' . DS;
		}
		
		$dir = new Folder ( $path );
		
		// find all files prefixed by croogo_ ( cache files )
		$files = $dir->findRecursive ();
		
		// loop and delete all cache file
		foreach ( $files as $file ) {
			$file = new File ( $file );
			if (! $file->delete ()) {
			}
		}
	}
}
