<?php 

class mahasiswa extends Controller

{
	public function index(){
		//memanggil alamat menuju view yang akan kita akses
		$data['judul']= 'Daftar mahasiswa';
		$data['mhs']= $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header',$data);
		$this->view('Mahasiswa/index', $data);
		$this->view('templates/footer');
	}
		public function detail($id){
		//memanggil alamat menuju view yang akan kita akses
		$data['judul']= 'Detail Mahasiswa';
		$data['mhs']= $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header',$data);
		$this->view('Mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0 ){
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}

 ?>