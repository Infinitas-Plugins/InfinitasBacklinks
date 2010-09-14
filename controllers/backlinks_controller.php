<?php
	/**
	 *
	 *
	 */
	class BacklinksController extends BacklinksAppController{
		var $name = 'Backlinks';

		function admin_index(){
			$data = $this->Backlink->find('all');
			$this->set(compact('data'));
		}
	}