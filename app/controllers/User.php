<?php  
/**
 * 
 */
class User extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pengguna";
		// $data['usr'] = $this->model('UserModel')->getAllUser();
		$this->view('data-view/templates/Header-Index');
		$this->view('data-view/index');
		$this->view('data-view/templates/Footer-Index');
	}
}	