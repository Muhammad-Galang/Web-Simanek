<?php  
/**
 * 
 */
class Ekstrakurikuler extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Ekstrakurikuler";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/esktrakurikuler');
		$this->view('data-view/templates/Footer-Index');
	}
}	