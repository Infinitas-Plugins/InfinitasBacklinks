<?php
/**
 * @brief tests for backlinks
 *
 * This class extends from the InfinitasEventTestCase which does a lot of
 * automated testing of events to reduce the amount of repetition.
 *
 * @see InfinitasEventTestCase
 */
App::uses('InfinitasEventTestCase', 'Events.Test/Lib');

class BacklinksEventsTest extends InfinitasEventTestCase {
/**
 * @brief test admin menu is correct
 */
	public function testAdminMenu() {
		$expected = $this->_manualCall('adminMenu', $this->ObjectEvent);
		$this->assertTrue(isset($expected['adminMenu']['Backlinks']['main']['Backlinks']));
		$this->assertTrue(count($expected['adminMenu']['Backlinks']['main']) == 1);

		parent::testAdminMenu();
	}
}