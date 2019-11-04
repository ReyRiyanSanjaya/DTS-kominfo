<?php 

session_start();

include "config.php";
	
$nik = $_POST['nik'];
$password = $_POST['password'];

//query database untuk mengecek data credential user

$query = mysqli_query($koneksi,"select * from tb_user WHERE nik='$nik' and password='$password'");
$cek = mysqli_num_rows($query);

//checking apakah nik dan password ada didalama database

if ($cek > 0){



	$data = mysqli_fetch_assoc($query);

	//cek jika login sebagai admin
	if($data['level']=='admin'){

			$_SESSION['nik']= $nik;
			$_SESSION['password']= $password;

			$_SESSION['email']=$email;
			$_SESSION['level']="admin";
			//kirim ke halaman dashbord admin
			header('location:admin/index.php');

		}else if ($data['level']=='anggota'){
			$_SESSION['nik']= $nik;
			$_SESSION['password']= $password;
			
			$_SESSION['level']="anggota";

			//kirim ke halaman dashboard Anggota
			header('location:anggota/index.php');

		}else if ($data['level']=='ketua'){
			$_SESSION['nik']= $nik;
			$_SESSION['password']= $password;
			
			$_SESSION['level']="ketua";

			//kirim ke halaman dashboard Ketua
			header('location:ketuaA/index.php');
		}else if ( $data['level']=='sekre'){
			$_SESSION['nik']=$nik;
			$_SESSION['password']=$password;
			$_SESSION['level']="sekre";

			//kirim ke halaman sekretaris
			header('location:sekretaris/index.php');

		}else if($data['level']=='tidakAktif'){
			header('location:login.php?pesan=belumAktif');
	
		}else{
			header('location:login.php?pesan=gagalLogin');
		}
	}else{
			header('location:login.php?pesan=gagalLogin');
	}

?>