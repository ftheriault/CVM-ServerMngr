<?php

namespace App\Controller;

class Index extends \App\Common {

	public function isPrivate() {
		return false;
	}

	public function action_index() {
		$this->view->subview = 'index/index';

		 if ($this->request->method == 'POST') { 
            $username = $this->request->post('username');
            $password = $this->request->post('password');
 
			if ($username == $this->pixie->config->get("general.authentication.username") && 
				$password == $this->pixie->config->get("general.authentication.password")) {
 				$this->pixie->session->set("loggedIn", true);
				$this->redirect('/home/index');
 			}
 			else {
				$this->view->errorMessage = "Invalid username password";

 			}
        }
	}

	public function action_about() {
		$this->view->subview = 'index/about';
	}

	public function action_logout() {
		$this->pixie->session->reset();
		$this->redirect('/');
	}
}
