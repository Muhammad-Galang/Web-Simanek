<?php  
/**
 * 
 */
class Siswa extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Siswa";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/siswa');
		$this->view('data-view/templates/Footer-Index');
	}
}	