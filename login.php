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
  <br>
  <br>
  <br>
  <section>

    <div class="container" style="width: 500px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 80px; background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);"><br>
      <!--konten dari halaman login-->
      <div><center><h1 class="display-4" style="font-size: 30px; font-weight: bold;">Login <a  href="index.php">Digital Talent</a><i> 2019</i></h1></center></div>
      <center><small>Untuk dapat Login silahkan gunakan akun yang telah dibuat</p></small></center>
      <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == 'gagalLogin'){
                    echo "<div class='alert alert-danger' style='border-radius:20px;' role='alert'>Username atau Password Salah</div>";
                }
            }

        ?>
        <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan']=='403'){
              echo "<div class='alert alert-warning' style='border-radius:20px;' role='alert'>Maaf, Halaman yang anda tuju tidak ditemukan.</div>";
            }
          }

        ?>
        <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan']=='belumAktif'){
              echo "<div class='alert alert-primary' style='border-radius:20px;' role='alert'>Perhatian !!! User anda Belum di Aktivasi oleh Sekretaris, Jika Belum Aktif dalam 1 x 24 Jam silahkan segera hubungi sekretaris di <a style=font-weight:bold;>sekretarisn@awp.id</a></div>";
            }
          }

        ?>
        <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan']=='keluar'){
              echo "<div class='alert alert-danger' style='border-radius:20px;' role='alert'>Anda Baru saja Keluar</div>";
            }
          }

        ?>
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == 'sukses'){
                    echo "<div class='alert alert-success' role='alert'>Akun Baru telah Dibuat,<a href='login.php' style='font-weight:bold;color:green;text-decoration:none;'>&nbsp;Silahkan Login</a> </div>";

                }
            }

        ?>
  		<form name="formLog" action="prosesLogin.php" method="POST" >
  			<div class="form-group">
  				  Masukan nik anda :
  				<input type="text" class="form-control" name="nik" style="border-radius: 100px;" required placeholder="Masukkan NIK Anda disini ">
  			</div>
  			<div class="form-group"> Masukan Password anda:
  				<input type="password" class="form-control" name="password" style="border-radius: 100px;" required placeholder="Masukkan Password  Anda disini">
  			</div>
        <a href="index.php" class="btn btn-secondary" name="login" style="border-radius: 100px;"><i class="fas fa-home"></i>Kembali Ke Beranda</a>
  			<button type="submit" class="btn btn-info" name="login" style="border-radius: 100px;">Login Disini&nbsp;<i class="fas fa-arrow-right"></i></button>
  			
  			<hr/>
       
        <div><h4 class="display-4" style="font-size: 15px; ">Klik Tombol disamping untuk melakukan pendaftaran&nbsp;<a href="registrasi.php" class="btn btn-danger" name="login" style="border-radius: 100px;"></i><img src="assets/img/dt.png" style="height: 20px;">&nbsp;Registrasi</i></a></h4></div>

        <br/>
  			</div>
  			</form>

  	</div>
  </section>
 
</div>
</body>