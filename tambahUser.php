<?php 
//mengambil koneksi dari database
include "config.php";
//tarik dari form pendaftaran
$nik = $_POST['nik'];
$password = $_POST['password'];
$tglDaftar = date("Y-m-d");
$level = $_POST['level'];

$query = "INSERT INTO tb_user (nik, password,tglDaftar, level)values('$nik','$password','$tglDaftar','tidakAktif') Where=1";
	
	if(mysqli_query($koneksi,$query))
	{
		// alihkan ke halaman login kembali
		header("location:regesA.php");
	}else
	{
		header("location:registrasi.php?pesan=gagaldaftar");
	}
mysqli_close($koneksi);
?>