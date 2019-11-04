<!DOCTYPE html>
<html>
<head>
  <title>ADMINISTRATOR</title>

<!-- Our project just needs Font Awesome Solid + Brands -->
<link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="../fontawesome/css/brands.css" rel="stylesheet">
<link href="../fontawesome/css/solid.css" rel="stylesheet">
<link href="../fontawesome/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<?php include "security.php";?>
<!---security untuk admin-->

<nav class="navbar navbar-expand-lg navbar- bg-" style="background: linear-gradient(to bottom, #33ccff 0%, #ffffff 100%);">
  <a class="navbar-brand" href="index.php">Selamat Datang Admin || <b> A<i>w</i>P</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search
        </button>
        <ul class="navbar-nav">
        <li class="nav-item ml-3 pr-0">
          <a class="nav-link" href="profile.php"><i class="far fa-user-circle mr-3" data-toggle="tooltip" title="profile" href="profile.php"></i>
          </a>
      </li>
      <li class="nav-item pl-0">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="profile" href="profile.php"></i>
          </a>
      </li>
    </ul>
    </form>
</nav>
  
<div class="row no-gutters">
  <div class="col-md-2 bg-dark pr-3" style="background: linear-gradient(to bottom, #ffffff 0%, #00ffff 88%);">
    <ul class="nav flex-column ml-0 mb-5 pr-0 pl-0"><br>
      <a class="nav-link active mt-3" href="#"><center><?php echo$_SESSION['nik'];?></center></a>
      <a class="navlink">
        <div class="text-center">
        <img src="../assets/img/profile.png" class="rounded-circle" alt="profile" style="height: 150px; width: 150px;">
      </div><br>
        <a class="nav-link" href="index.php"><i class="fab fa-accusoft 2x"></i> Dashbord<hr class="bg-secondary"></a>
        <a class="nav-link" href="users.php"><i class="fas fa-archway 2x"></i> Daftar semua Users<hr class="bg-secondary"></a>
    </ul>
  </div>

  <div class="col-md-10">
    <h1 class="display-4" style="padding-left: 100px;">Tabel User</h1>
<center>
          <div class="card shadow mb-4" style="width: 100%;">
            
            <div class="card-body">
              <div class="table-responsive" style="width: 100%;-webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 10px;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">NIK(Nomor Induk Kependudukan)</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                      <th scope="col">Level</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php include "../config.php"; 
                    $users = mysqli_query($koneksi, 
                      "SELECT `tb_user`.`nik`, `tb_pengguna`.`nik`,`nama`,`ttl`
                             ,`provinsi`,`alamat`,`email`,`password`,`level`, `tb_portofolio`.`nik`,`bidang_keahlian`,`riwayat_pelatihan`,`sertifikat_dimiliki`,`riwayat_project`
                       FROM `tb_user`
                       INNER JOIN `tb_pengguna` 
                       ON `tb_user`.`nik` = `tb_pengguna`.`nik`
                       INNER JOIN `tb_portofolio`
                       ON `tb_pengguna`.`nik`=`tb_portofolio`.`nik`
                       WHERE `tb_portofolio`.`nik`='$_SESSION[nik]' ");
                    $no = 1;

                     foreach ($users as $row){
                      
                      echo"
                    <tr>
                    <td>$no</td>
                      <td>".$row['nik']."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['bidang_keahlian']."</td>
                      <td>".$row['riwayat_pelatihan']."</td>
                      <td>".$row['sertifikat_dimiliki']."</td>
                      <td>".$row['riwayat_project']."</td>
                      
                    </tr>";
                    $no++;
              else{
                
                echo "<div class='alert alert-danger' role='alert' style='font-weight:bold;'>Tidak Terdapat Riwayat Portofolio anda silahkan isi Data Anda</div>";
              }
                  
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </center>

  </div>

</div>
</body>
</html>