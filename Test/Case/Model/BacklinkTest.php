<?php
/* Backlink Test cases generated on: 2010-03-13 11:03:57 : 1268471097*/
App::uses('Backlink', 'Backlinks.Model');

class BacklinkTestCase extends CakeTestCase {
	function startTest() {
		$this->Backlink =& ClassRegistry::init(array(
			'class' => 'Backlinks.Backlink',
			'ds' => 'test'
		));
	}

	function testDummy() {}

	function endTest() {
		unset($this->Backlink);
		ClassRegistry::flush();
	}

}
?>