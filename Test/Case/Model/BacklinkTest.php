<?php
App::uses('Backlink', 'Backlinks.Model');

class BacklinkTestCase extends CakeTestCase {
	public function startUp() {
		parent::setUp();
		$this->Backlink = ClassRegistry::init(array(
			'class' => 'Backlinks.Backlink',
			'ds' => 'test'
		));
	}

	public function tearDown() {
		parent::tearDown();
		unset($this->Backlink);
	}

	public function testSomething() {

	}

}