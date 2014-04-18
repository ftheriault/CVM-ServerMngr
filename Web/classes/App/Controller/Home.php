<?php

namespace App\Controller;

class Home extends \App\Common {

	public function action_index() {
		$this->view->subview = 'home/index';
	}
}
