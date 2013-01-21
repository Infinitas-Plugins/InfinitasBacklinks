<?php
App::uses('AllTestsBase', 'Test/Lib');

class AllBacklinksTestsTest extends AllTestsBase {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Backlinks test');

		$path = CakePlugin::path('Backlinks') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}
}
