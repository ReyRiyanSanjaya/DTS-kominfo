<?php 
//mengambil koneksi dari database
session_start();
include "../config.php";
//tarik dari form pendaftaran
$nik = $_SESSION['nik'];
$bidang_keahlihan = $_POST['bidang_keahlihan'];
$riwayat_pelatihan = $_POST['riwayat_pelatihan'];
$sertifikat_dimiliki = $_POST['sertifikat_dimiliki'];
$riwayat_project = $_POST['riwayat_project'];

$query = "INSERT INTO tb_portofolio (nik, bidang_keahlihan, riwayat_pelatihan, sertifikat_dimiliki, riwayat_project)values('$nik','$bidang_keahlihan','$riwayat_pelatihan','$sertifikat_dimiliki','$riwayat_project')";
	
	if(mysqli_query($koneksi,$query))
	{
		// alihkan ke halaman index
		header('location:index.php?pesan=sukses');
		
	}else
	{
		header("location:index.php?pesan=adminGagalDaftar");
	}
mysqli_close($koneksi);
?>