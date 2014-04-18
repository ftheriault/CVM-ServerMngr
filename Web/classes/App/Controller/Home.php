<?php

namespace App\Controller;

class Home extends \App\Common {

	public function isPrivate() {
		return true;
	}

	public function action_index() {
		$this->view->subview = 'home/index';

		if ($this->request->param('id') != null) {
			if ($this->request->param('id') == "restart") {
				$this->view->infoMessage = exec("whoami");
			}
		}
	}
}
