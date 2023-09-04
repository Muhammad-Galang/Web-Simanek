<?php  
/**
 * 
 */
class Pembimbing extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pembimbing";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/pembimbing');
		$this->view('data-view/templates/Footer-Index');
	}
}	