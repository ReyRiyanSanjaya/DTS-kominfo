<html>
<title>Digital Talent 2019</title>

<head>
  <!-- Our project just needs Font Awesome Solid + Brands -->
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <!--Masukan css customize navbar kita sendiri-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>

<body style="background-image: url(assets/img/ai.jpg);">
  <br/>
  <br/>

<?php include "config.php"; ?>
<!--konek database-->

<?php
	echo "<body style='background-image: url(../assets/img/ai.jpg);' >";
	echo "<br>";
	echo "<Center><form action='tambahA.php' method='POST' name='frmPenggunaAdmin'>";
    echo "<div class='container' style='width: 530px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 20px; background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);'><br>
      <!--konten dari halaman login-->
      <div><center><h1 class='display-4' style='font-size: 30px; font-weight: bold;'>Daftar <a  href='index.php'>Digital Talent</a><i> 2019</i></h1></center></div>
      <center><small>Silahkan daftarkan identitas anda</p></small></center>
		<br/>
		
        <div class='form-group'>
            <input type='text' class='form-control' id='nik' name='nik' placeholder='Masukkan nik Lengkap Anda' style='width:500px;'>
            $nik
          </div>
    			<div class='form-group'>
    				<input type='text' class='form-control' id='nama' name='nama' placeholder='Masukkan Nama Lengkap Anda' style='width:500px;'>
				  </div>
				<div class='form-group'>
    				<input type='date' class='form-control' id='ttl' name='ttl' placeholder='Masukkan Tanggal Lahir Anda' style='width:500px;'>
				</div>

				<div class='form-group'>
    				<input type='text' class='form-control' id='provinsi' name='provinsi' placeholder='Masukkan Provinsi Anda' style='width:500px;'>
				</div>
				<div class='form-group align-left'>
    				<textarea name='alamat' id='alamat' class='form-control' style='width:500px;'>
    				</textarea>
				</div>
				<div class='form-group'>
    				<input type='text' class='form-control' id='email' name='email' placeholder='Masukkan Email Anda' style='width:500px;'>
				</div>

				<hr/>
				<div style='text-align:center;'>
				<button type='reset' class='btn btn-danger' name='btnReset' id='btnReset'>Reset Data&nbsp;<i class='fas fa-trash' ></i></button>

				<button type='submit' class='btn btn-info' name='btnDaftar' id='btnDaftar'>Daftar Anggota&nbsp;<i class='fas fa-check'></i></button>
				</div>
				<br/>
				<br/>



    		</div>
    		</form>
    		</center> ";