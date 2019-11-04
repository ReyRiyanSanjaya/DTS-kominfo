<?php 
      include "../conn.php";
?>

<html>
<title>Digital Talent 2019</title>

<head>
  <!-- Our project just needs Font Awesome Solid + Brands -->
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <link href="../fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <!--Masukan css customize navbar kita sendiri-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
  body {
    height: 1100px;
  }
	.tales {
		width: 100%;
		height: 40%;
	}

</style>

</head>
<body>

<?php include "sekurAnggota.php";?>
<!---security untuk admin-->

<nav class="navbar navbar-expand-lg navbar- bg-" style="background: linear-gradient(to bottom, #33ccff 0%, #ffffff 100%);">
  <a class="navbar-brand" href="index.php">Selamat Datang <?php echo $_SESSION['nik']; ?> || <b> A<i>w</i>P</b> ||</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search
   	  	</button>
   	  	<ul class="navbar-nav">
	    	<li class="nav-item ml-3 pr-0">
			    <a class="nav-link" href="profile/profile.php" ><i class="far fa-user-circle mr-3" data-toggle="tooltip" title="profile" href="profile.php"></i>
			    </a>
			</li>
			<li class="nav-item pl-0">
			    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="profile" href="logout.php"></i>
			    </a>
			</li>
		</ul>
    </form>
</nav>

<!--isi konten dari jumbotron-->

<?php include "panggil2.php"; ?>

</body>
</html>