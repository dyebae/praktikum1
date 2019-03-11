<?php
include "Person.php";
$Admin = new Person();

$Admin->setID(1);
$Admin->setNama("Mohamad Andi");
$Admin->setNim("1705015");
$Admin->setTempat_Lahir("Indramayu");
$Admin->setTgl_Lahir("08 Oktober 1998");
$Admin->setAlamat("Tukdana");
$Admin->setJk("Laki - Laki");
$Admin->setUsername("dyebae");
$Admin->setPassword("1234567");

if($Admin->cekLogin("dyebae", "1234567")){
	echo "ID : ".$Admin->getID()."<br>";
	echo "Nama : ".$Admin->getNama()."<br>";
	echo "Nim : ".$Admin->getNim()."<br>";
	echo "Tempat Tanggal Lahir :".$Admin->getTempat_Lahir().", ".$Admin->getTgl_Lahir()."<br>";
	echo "Alamat :".$Admin->getAlamat()."<br>";
	echo "Jenis Kelamin :".$Admin->getJk()."<br>";
}else{
	echo "Username atau Password Salah"; 
}
?>