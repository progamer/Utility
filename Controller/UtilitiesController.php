<?php
App::uses('UtilityAppController', 'Utility.Controller');
App::uses('Utility', 'Utility.Model');

/**
 * @name UtilitiesController
 * @version  1.0
 * @author   Issa Khalil<issa.mh.khalil@gmail.com>< http://www.linkedin.com/in/issakhalil>
 * @license 
 * @link
 */
class UtilitiesController extends UtilityAppController {

	/**
	 * Controller name
	 *
	 * @var string
	 * @access public
	 */
	public $name = 'Utilities';

	/**
	 * admin_clear_cach
	 * delete all cache file under cache directory
	 */
	public function admin_clear_cache() {	
		
		$this->Utility->deleteFiles();
		$this->Session->setFlash( 'Cache cleared successfully' , 'default', array('class' => 'success'));	
		$this->redirect("/admin");
	}

}
