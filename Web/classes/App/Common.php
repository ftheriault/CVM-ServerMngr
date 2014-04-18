<?php

namespace App;

/**
 * Base controller
 *
 * @property-read \App\Pixie $pixie Pixie dependency container
 */
class Common extends \PHPixie\Controller {

	protected $view;

	public function before() {
		$this->view = $this->pixie->view('layout');
		$this->view->loggedIn = $this->pixie->session->get("loggedIn", false);

		if ($this->request->param('controller') != "index" && 
			!$this->view->loggedIn) {
			$this->redirect('/');
			$this->execute=false;
		}

	}

	public function after() {
		$this->response->body = $this->view->render();
	}

}
