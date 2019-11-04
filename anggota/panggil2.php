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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="tales" src="../assets/img/mobil2.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="tales" src="../assets/img/mobil3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="tales" src="../assets/img/mobil1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--konten dari carousel-->

<div class="jumbotron lg" style="margin-bottom: 0px; height: 60%;">
  <h1 class="display-4">Asosiasi Web Programmer Indonesia</h1>
  <p class="lead">Silahkan Daftarkan diri anda untuk mengikuti program kominfo,yaitu VSGA berupa pelatihan kepada masyarakat untuk meningkatkan SDM menuju kualitas yang bersaing</p><br>
  <p class="lead">Seperti pelatihan yang diadakan di POLMED yaitu VSGA atau Vocational Scholarship Graduate Academy,yang berupa pelatihan antara lain:</p>
  <li class="lead">Junior Web Developer</li>
  <li class="lead">Junior Mobile Developer</li>
  <li class="lead">Junior Network Administrator</li>
  <li class="lead">Junior Graphic Designer</li>
  <li class="lead">Intermidate Animator</li>
  <hr class="my-4">
  <div style=" background-color: yellow; color:blue; width: 200px; font-weight: bold; border-radius: 3px; box-shadow: grey 3px 3px 3px; ">JUNIOR WEB DEVELOPER</div>
  <br/>
</div>

<?php
        
  

    }
 
} else {
  include "regesAdmin2.php";
}

$koneksi->close();
?> 
