<?php
class Person{
	private $id;
	private $nama;
	private $nim;
	private $tempat_lahir;
	private $tgl_lahir;
	private $alamat;
	private $jk;
	private $username;
	private $password;
	
	public function getID(){
		return $this->id;
	}
	public function getNama(){
		return $this->nama;
	}
	public function getNim(){
		return $this->nim;
	}
	public function getTempat_lahir(){
		return $this->tempat_lahir;
	}
	public function getTgl_Lahir(){
		return $this->tgl_lahir;
	}
	public function getAlamat(){
		return $this->alamat;
	}
	public function getJk(){
		return $this->jk;
	}
	
	public function setID($id){
		$this->id = $id;
	}
	public function setNama($nama){
		$this->nama = $nama;
	}
	public function setNim($nim){
		$this->nim = $nim;
	}
	public function setTempat_lahir($tempat_lahir){
		$this->tempat_lahir = $tempat_lahir;
	}
	public function setTgl_Lahir($tgl_lahir){
		$this->tgl_lahir = $tgl_lahir;
	}
	public function setAlamat($alamat){
		$this->alamat = $alamat;
	}
	public function setJk($jk){
		$this->jk = $jk;
	}
	public function setPassword($pass){
		$this->password = $pass;
	}
	public function setUsername($user){
		$this->username = $user;
	}
	
	public function cekLogin($user, $pass){
		if($user == $this->username && $pass == $this->password){
			return true;
		}
		return false;
	}
}
?>