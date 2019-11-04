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

<?php include "header.php"; ?>
<!--- Header dari admin-->

  <div class="col-md-10">
  <h1 class="display-4" style="padding: 20px 10px 10px 10px; text-align: center;">Edit Level User</h1>
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
      <th scope="col"><center>Control</center></th>

    </tr>
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi, "SELECT * FROM tb_user ");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi, "select * from tb_user  LIMIT $mulai, $halaman");
  $no =$mulai+1;


    while ($data = mysqli_fetch_assoc($query)) {
      ?>
      <tr>
        <td scope="col"><?php echo $no++; ?></td>                  
        <td scope="col"><?php echo $data['nik']; ?></td>              
         <td scope="col"><?php echo $data['password']; ?></td>   
         <td scope="col"><?php echo $data['tglDaftar']; ?></td>  
         <td scope="col"><?php echo $data['level']; ?></td> 
         <td>
            <?php echo "<a  class='btn btn-primary' name='btnAnggota' href='prosesUpdateAnggota.php?nik=$data[nik]'>Aktifkan (Anggota) </a>";?>
            <?php echo "<a  class='btn btn-warning' name='btnSekretaris' href='prosesUpdateSekret.php?nik=$data[nik]'>Aktifkan (Sekretaris)</a>";?>
            <?php echo "<a  class='btn btn-danger' name='btnKetua' href='prosesUpdateKetua.php?nik=$data[nik]'>Aktifkan (Ketua) </a>";?>    
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