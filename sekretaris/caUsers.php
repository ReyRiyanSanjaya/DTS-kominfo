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
  <a class="navbar-brand" href="index.php">Selamat Datang Sektretaris || <b> A<i>w</i>P</b></a>
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
  <div class="col-md-2 bg-dark pr-3" style="background: linear-gradient(to bottom, #ffffff 0%, #00ffff 88%); height: 600px;">
    <ul class="nav flex-column ml-0 mb-0 pr-0 pl-0 pt-0 pb-0 mt-0"><br>
      <a class="nav-link active mt-0 mb-0" href="#"><center><?php echo$_SESSION['nik'];?></center></a>
      <a class="navlink">
        <div class="text-center">
          <img src="../assets/img/profile.png" class="rounded-circle" alt="profile" style="height: 150px; width: 150px;">
        </div>  
          <a class="nav-link" href="index.php"><i class="fab fa-accusoft 2x"></i> Dashbord<hr class="bg-secondary"></a>
          <a class="nav-link" href="caUsers.php"><i class="fas fa-archive 2x"></i> Daftar Pendaftar<hr class="bg-secondary"></a>
          <a class="nav-link" href="users.php"><i class="fas fa-archway 2x"></i> Portofolio Anggota<hr class="bg-secondary"></a>
    </ul>
  </div>


  <div class="col-md-10">
 
<h1 class="display-4" style="padding: 20px 10px 10px 10px; text-align: center;">Tabel Calon User</h1>
<?php
include '../config.php';
?>
<center>
  <div class="table-responsive" style="width: 97%;-webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 10px;">
<table class="table" >
<thead class="thead-dark">
  <tr>
    <th scope="col">No</th>
    <th scope="col">NIK</th>   
    <th scope="col">Password</th>
    <th scope="col">Tanggal Daftar</th>
    <th scope="col">Level</th>   
    <th scope="col">Control</th>

  </tr>
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE level='tidakAktif' ");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi, "select * from tb_user where level='tidakAktif' LIMIT $mulai, $halaman");
  $no =$mulai+1;


  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td scope="col"><?php echo $no++; ?></td>                  
      <td scope="col"><?php echo $data['nik']; ?></td>              
       <td scope="col"><?php echo $data['password']; ?></td>   
       <td scope="col"><?php echo $data['tglDaftar']; ?></td>  
       <?php if($data['level'] == 'tidakAktif'){
          
          echo '<td> Belum Aktif</td>';
       }else{
          echo '<td style="color:green;">'.$data['level'].'</td>';
       } ?>
        <td><?php echo "<a  class='btn btn-primary' name='btnAnggota' href='prosesUpdateAnggota.php?nik=$data[nik]'>Aktifkan (Anggota) </a>";?>
        </td>    
    </tr>


    <?php               
  } 
  ?>
  
</thead>
</table>    
</div>
</center>      
<br/>
<center>
  <div style="width: 800px;height: 20px;">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>

<a href="?halaman=<?php echo $i; ?>" style="color:white;background-color: black;text-decoration: none; font-size: 20px; padding-left: 5px;margin-right: 10px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 5px; height: 20px;"><?php echo $i; ?></a>
    
  <?php } ?>
</div>
</center>

</div>
</body>
</html>