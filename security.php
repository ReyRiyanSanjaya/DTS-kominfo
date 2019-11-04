<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']=="admin"){
		header("location:admin/index.php");
	}else if($_SESSION['level']=='anggota'){
		header("location:anggota/index.php");
	}else if ($_SESSION['level']=='ketua'){
		header("location:ketua/index.php");
	}else if ($_SESSION['level']=='sekret'){
		header("location:sekret/index.ph");
	}else {
		header("location:login.php?pesan=gagalLogin");
	}


	?>