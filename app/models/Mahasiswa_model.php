<?php 

class Mahasiswa_model{
private $table ='mahasiswa';
private $db;

public function __construct(){
	$this->db = new Database;
}

// private $mhs =[
// ["nama"=>"Yoga Baskara",
// "nrp"=>"067878",
// "email"=>"yogabaskara30@yahoo.com",
// "jurusan"=>"Teknik Industri"],
// ["nama"=>"Doddy Ferdiansyah",
// "nrp"=>"067879",
// "email"=>"doddy@yahoo.com",
// "jurusan"=>"Teknik Mesin"],
// ["nama"=>"Agung Purnama",
// "nrp"=>"067880",
// "email"=>"agung@yahoo.com",
// "jurusan"=>"Teknik Dirgantara"]];



public function getAllMahasiswa()
{
	$this->db->query('SELECT * FROM  mahasiswa');
	return $this->db->resultSet();
}
public function getMahasiswaById($id)
{
	$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
	$this->db->bind('id', $id);
	return $this->db->single();
}

public function tambahDataMahasiswa($data){
	$query = "INSERT INTO mahasiswa
	 VALUES
	  ('', :nama, :nrp, :email, :jurusan)";
	$this->db->query($query);
	$this->db->bind('nama', $data['nama']);
	$this->db->bind('nrp', $data['nrp']);
	$this->db->bind('email', $data['email']);
	$this->db->bind('jurusan', $data['jurusan']);

	$this->db->execute();

	return $this->db->rowCount();
}
}

 ?>