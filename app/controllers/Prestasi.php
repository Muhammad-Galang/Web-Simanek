<?php  
/**
 * 
 */
class Prestasi extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Prestasi";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/prestasi');
		$this->view('data-view/templates/Footer-Index');
	}
}	