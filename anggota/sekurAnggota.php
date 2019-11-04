<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']=="ketua"|$_SESSION['level']=="sekret"|$_SESSION['level']==""){
		header("location:../login.php?pesan=403");
	}

	?>