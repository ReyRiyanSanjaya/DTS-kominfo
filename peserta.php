<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
</head>
<body>

<?php include "header.php" ?>
<div class="jumbotron" style="height: 200px; margin: 0px;">
  <h1 class="display-4" >Halaman  Peserta</h1>
  <p class="lead">Halaman Peserta</p> 


</div>
<h2><center>Unek Unek Kucing</center></h2>
<p><center>Saya kucing yang tinggal bersama manusia ingin menyampaikan keluh kesah kami sebagai kucing,wahai para hooman jangan menyiksa kami,Kami para kucing cuman ingin makan dari sisa makan mu</center> </p>


<div class="container">
  <img src="../../dts/gambar/kucing.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">JANGAN SIKSA KAMI</div>
  </div>
</div>

</body>
</html>

<?php include "footer.php" ?>