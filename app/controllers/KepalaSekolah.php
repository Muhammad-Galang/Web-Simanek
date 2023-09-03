<?php  
/**
 * 
 */
class KepalaSekolah extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Kepala Sekolah";
		
		$this->view('data-view/templates/Header-Index');
		$this->view('data-view/kepala-sekolah');
		$this->view('data-view/templates/Footer-Index');
	}
}	