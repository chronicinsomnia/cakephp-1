<?php
/**
 * AllComponentsTest file
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.tests.cases
 * @since         CakePHP(tm) v 2.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * AllComponentsTest class
 *
 * This test group will run component class tests
 *
 * @package       cake
 * @subpackage    cake.tests.cases
 */
class AllComponentsTest extends PHPUnit_Framework_TestSuite {

/**
 * suite method, defines tests for this suite.
 *
 * @return void
 */
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('All component class tests');
		
		$suite->addTestFile(CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'component.test.php');

		$iterator = new DirectoryIterator(CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'components');
		foreach ($iterator as $i => $file) {
			if (!$file->isDot()) {
				$suite->addTestfile($file->getPathname());
			}
		}
		return $suite;
	}
}