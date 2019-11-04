<?php 
//mengambil koneksi dari database
session_start();
include "config.php";
//tarik dari form pendaftaran
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = "INSERT INTO tb_pengguna (nik, nama, ttl, provinsi, alamat, email)values('$nik','$nama','$ttl','$provinsi','$alamat','$email')";
	
	if(mysqli_query($koneksi,$query))
	{
		// alihkan ke halaman tambah pengguna
		header('location:login.php?pesan=sukses');
		
	}else
	{
		header("location:login.php?pesan=adminGagalDaftar");
	}
mysqli_close($koneksi);
?>