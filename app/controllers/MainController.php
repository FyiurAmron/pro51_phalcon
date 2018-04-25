<?php

class MainController extends ControllerBase
{

    public function indexAction()
    {
	$req = $this->request;
	$tag = $this->tag;
	if ($req->isPost()) {
            $login = $req->getPost('login');
            $password = $req->getPost('password');
	    if ( $login === 'user' && $password === 'pass' ) { // TODO PDO users etc.
		$this->session->set('user-login', $login);
	    } else {
		echo 'Invalid credentials.';
		return;
	    }
        } else if ($this->session->get('user-login') === null) {
	    echo 'Restricted.';
	    return;
	}
    }

}

