<?php 

class Home extends Controller {

	public function index(){
		$this->view('landing-page/templates/Header-home');
		$this->view('landing-page/index');
		$this->view('landing-page/templates/Footer-home');
	}
}

