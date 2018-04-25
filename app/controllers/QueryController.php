<?php

class QueryController extends ControllerBase
{

    public function indexAction()
    {
	$req = $this->request;
	$tag = $this->tag;
	$view = $this->view;
	$user = $this->session->get('user-login');
	if ($req->isPost() && $user !== null) {
	    $q = $req->getPost('query');
	    $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?key=AIzaSyDyIR6nVkPnGLUrb4A9-eDKNQSaZ9aE3OI&query='.urlencode( $q );
	    $data = file_get_contents( $url );
	    if ( $data === null ) {
		$data = '{}';
	    }
	    // $dataPhp = json_decode( $data, true );

            $view->q = $q;
	    $view->user = $user;
	    $view->data = $data;
        }
    }

    public function showAction()
    {
    }
}

