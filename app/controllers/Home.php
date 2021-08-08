<?php 

class Home extends Controller

{
	public function index(){
		//memanggil alamat menuju view yang akan kita akses
		$data['judul']= 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header',$data);
		$this->view('home/index',$data);
		$this->view('templates/footer');
	}
}


 ?>