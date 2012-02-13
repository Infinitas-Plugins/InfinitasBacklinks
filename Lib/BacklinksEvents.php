<?php
	final class BacklinksEvents extends AppEvents{
		public function onPluginRollCall(){
			return array(
				'name' => 'Backlinks',
				'description' => 'See who is linking back to your site',
				'icon' => '/Backlinks/img/icon.png',
				'author' => 'Infinitas'
			);
		}
		
		public function onSetupConfig(){
		}

		public function onSetupCache(){
		}

		public function onAdminMenu($event){
			$menu['main'] = array(
				'Backlinks' => array('controller' => false, 'action' => false)
			);

			return $menu;
		}

		public function onRequireDatabaseConfigs($event){
			return array(
				'backlink' => array(
					'datasource' => 'Backlinks.Xml'
				)
			);
		}
	}