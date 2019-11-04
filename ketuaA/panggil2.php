<?php

include "../config.php";

$sql = "SELECT * FROM tb_portofolio WHERE nik='$_SESSION[nik]' ORDER BY nik DESC LIMIT 1";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) { 
  
    while($row = $result->fetch_assoc()) {

        $_SESSION['nik'] = $row['nik'];
        $_SESSION['bidang_keahlihan'] = $row['bidang_keahlihan'];
        $_SESSION['riwayat_pelatihan'] = $row['riwayat_pelatihan'];
        $_SESSION['sertifikat_dimiliki'] = $row['sertifikat_dimiliki'];
        $_SESSION['riwayat_project'] = $row['riwayat_project'];
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hallo,<b><?php echo$_SESSION['nama'];?></b></h1>
    <p class="lead">Selamat datang di dashbord Ketua</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col md-4 ml-4">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);height: 270px;">
        <div class="card-header">Jumlah Anggota</div>
          <div class="card-body">
            <h5 class="card-title">161</h5>
            <p class="card-text">Card ini untuk menunjukan Total dari Keseluruhan users terdaftar pada aplikasi</p>
            <a href="#" class="btn btn-dark" style="color:white;font-weight: bold;"><i class="fas fa-table"></i>&nbsp;Tabel</a>
            <a href="#" class="btn btn-warning" style="color:white;font-weight: bold;"><i class="fas fa-plus"></i>&nbsp;Konten</a>
        </div>
      </div>
    </div> <!--Penutup col--> 


    <div class="col md-4">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);height: 270px;">
        <div class="card-header">Statistik Jumlah user</div>
          <div class="card-body">
            <h5 class="card-title">100</h5>
            <p class="card-text">Card ini untuk menunjukan statistik jumlah user dalam setahun.</p><br>
            <a href="users.php" class="btn btn-dark" style="color:white;font-weight: bold;"><i class="fas fa-table"></i>&nbsp;Tabel</a>
            <a href="#" class="btn btn-warning" style="color:white;font-weight: bold;"><i class="fas fa-plus"></i>&nbsp;Konten</a>
        </div>
      </div>
    </div> <!--Penutup col-->

    <div class="col md-4">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);height: 270px;">
        <div class="card-header">Anggota perprovinsi</div>
          <div class="card-body">
            <h5 class="card-title">211</h5>
            <p class="card-text">Card ini untuk menunjukan Jumlah anggota di masing-masing provinsi.</p><br>
            <a href="#" class="btn btn-dark" style="color:white;font-weight: bold;"><i class="fas fa-table"></i>&nbsp;Tabel</a>
            <a href="#" class="btn btn-warning" style="color:white;font-weight: bold;"><i class="fas fa-plus"></i>&nbsp;Konten</a>
        </div>
      </div>
    </div> <!--Penutup col-->
  </div> <!--penutup row-->
</div> <!--penutup container-->
<hr>

<?php
       	
	

    }
 
} else {
	include "regesAdmin2.php";
}

$koneksi->close();
?> 


<?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == 'adminBerhasilDaftar'){
                    echo "<div class='alert alert-success' role='alert'>Berhasil Membuat Akun</div>";
                }
            }

        ?>