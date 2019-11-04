<?php
	include '../../config.php';
	$id = $_GET[nik];
	$data = mysqli_query($koneksi,"SELECT `tb_user`.`nik`, `tb_pengguna`.`nik`,`nama`,`ttl`
                             ,`provinsi`,`alamat`,`email`,`password`,`level`, `tb_portofolio`.`nik`,`bidang_keahlian`,`riwayat_pelatihan`,`sertifikat_dimiliki`,`riwayat_project`
                       FROM `tb_user`
                       INNER JOIN `tb_pengguna` 
                       ON `tb_user`.`nik` = `tb_pengguna`.`nik`
                       INNER JOIN `tb_portofolio`
                       ON `tb_pengguna`.`nik`=`tb_portofolio`.`nik`
                       WHERE `tb_portofolio`.`nik`='$_SESSION[nik]'");
	while($d = mysqli_fetch_array($data));
?>

<?php
	echo "<body style='background-image: url(../assets/img/ai.jpg);' >";
	echo "<br>";
	echo "<Center><form action='updateData.php' method='POST' name='frmPenggunaAdmin'>";
    echo "<div class='container' style='width: 530px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 20px; background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);'><br>
      <!--konten dari halaman login-->
      <div><center><h1 class='display-4' style='font-size: 30px; font-weight: bold;'>Daftar <a  href='index.php'>Digital Talent</a><i> 2019</i></h1></center></div>
      <center><small>Silahkan daftarkan identitas anda</p></small></center>
		<br/>
		
    		<div class='form-group'>
    			<div class='form-group'>
    				<input type='hidden' name='id' value='<?php echo $d[nik];?>'>
    				Nama anda
    				<input type='text' class='form-control' id='nama' name='nama' value='<?php echo $d[nama]; ?>' style='width:500px;'>
				</div>
				<div class='form-group'>Tanggal Lahir anda :
    				<input type='date' class='form-control' id='ttl' name='ttl' value='<?php echo $d[ttl]; ?>' style='width:500px;'>
				</div>

				<div class='form-group'>Provinsi anda :
    				<input type='text' class='form-control' id='provinsi' name='provinsi' value='<?php echo $d[provinsi]; ?>' style='width:500px;'>
				</div>
				<div class='form-group align-left'> alamat anda :
    				<textarea name='alamat' id='alamat' class='form-control' value='<?php echo $d[alamat]; ?>' style='width:500px;'>
    				</textarea>
				</div>
				<div class='form-group'>Email anda :
    				<input type='text' class='form-control' id='email' name='email' value='<?php echo $d[email]; ?>'>
				</div>

				<div class='form-group'>Bidang Keahliah anda :
    				<input type='text' class='form-control' id='bidang_keahlihan' name='bidang_keahlihan' value='<?php echo $d[bidang_keahlihan]; ?>' style='width:500px;'>
				</div>
				<div class='form-group'>Riwayat Pelatihan anda :
    				<input type='text' class='form-control' id='riwayat_pelatihan' name='riwayat_pelatihan' value='<?php echo $d[riwayat_pelatihan]; ?>' style='width:500px;'>
				</div>

				<div class='form-group'>Sertifikat anda :
    				<input type='text' class='form-control' id='sertifikat_dimiliki' name='sertifikat_dimiliki' value='<?php echo $d[sertifikat_dimiliki]; ?>' style='width:500px;'>
				</div>

				<div class='form-group'>Riwayat Project anda :
    				<input type='text' class='form-control' id='riwayat_project' name='riwayat_project' value='<?php echo $d[riwayat_project]; ?>' style='width:500px;'>
				</div>

				<hr/>
				<div style='text-align:center;'>
				<button type='reset' class='btn btn-danger' name='btnReset' id='btnReset'>Reset Data&nbsp;<i class='fas fa-trash' ></i></button>

				<button type='submit' class='btn btn-info' name='btnDaftar' id='btnDaftar'>Edit Data&nbsp;<i class='fas fa-check'></i></button>
				</div>
				<br/>
				<br/>



    		</div>
    		</form>
    		</center> ";
 ?>