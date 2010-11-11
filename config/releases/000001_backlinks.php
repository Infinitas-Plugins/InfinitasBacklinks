<?php
class R4cdc20b209d84d49979b235e6318cd70 extends CakeRelease {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = 'Migration for Backlinks version 0.1';

/**
 * Plugin name
 *
 * @var string
 * @access public
 */
	public $plugin = 'Backlinks';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
		),
	);

	
/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
?>