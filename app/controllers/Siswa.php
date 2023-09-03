<?php  
/**
 * 
 */
class Siswa extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pembimbing";
		
		$this->view('data-view/templates/Header-Index');
		$this->view('data-view/siswa');
		$this->view('data-view/templates/Footer-Index');
	}
}	