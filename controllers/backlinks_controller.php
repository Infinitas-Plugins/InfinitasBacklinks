<?php
	/**
	 *
	 *
	 */
	class BacklinksController extends BacklinksAppController{
		var $name = 'Backlinks';

		public $helpers = array(
			'Filter.Filter'
		);

		function admin_index(){
			$address = env('SERVER_ADDR');
			if($address == '127.0.0.1' || $address == '::1'){
				$this->notice(
					__('This plugin does not work on localhost', true),
					array(
						'level' => 'warning'
					)
				);
			}

			$data = $this->Backlink->find('all');
			$this->set(compact('data'));
		}
	}