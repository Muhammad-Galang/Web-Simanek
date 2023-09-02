<?php  
/**
 * 
 */
class UserController extends Controller
{
	
	public function index(){
		$this->view('data-view/templates/Header-Index');
		$this->view('data-view/index');
		$this->view('data-view/templates/Footer-Index');
	}
}