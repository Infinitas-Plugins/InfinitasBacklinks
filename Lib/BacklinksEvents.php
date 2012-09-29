<?php
class BacklinksEvents extends AppEvents {
/**
 * @brief get the plugins details
 */
	public function onPluginRollCall() {
		return array(
			'name' => 'Backlinks',
			'description' => 'See who is linking back to your site',
			'icon' => '/Backlinks/img/icon.png',
			'author' => 'Infinitas'
		);
	}

/**
 * @brief set up plugin cache
 */
	public function onSetupCache() {
	}

/**
 * @brief build the admin menu
 */
	public function onAdminMenu($event) {
		$menu = array(
			'main' => array(
				'Backlinks' => array('controller' => false, 'action' => false)
			)
		);

		return $menu;
	}

/**
 * @brief load additional db configs
 */
	public function onRequireDatabaseConfigs($event) {
		return array(
			'backlink' => array(
				'datasource' => 'Libs.XmlSource'
			)
		);
	}
}