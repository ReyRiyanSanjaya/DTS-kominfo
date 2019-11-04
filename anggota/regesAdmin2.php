<?php
echo "<body style='background-image: url(../assets/img/ai.jpg);' >";
	echo "<br><br><br>";
	echo "<Center><form action='tambahPortofolio.php' method='POST' name='frmPenggunaAdmin'>";
    echo "<div class='container' style='width: 530px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
      box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 20px; background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);'><br>
      <!--konten dari halaman login-->
      <div><center><h1 class='display-4' style='font-size: 30px; font-weight: bold;'>Daftar <a  href='index.php'>Digital Talent</a><i> 2019</i></h1></center></div>
      <center><small>Silahkan isi Portofolio anda</p></small></center>
		<br/>
		
    		<div class='form-group'>
    			<div class='form-group'>
    				<input type='text' class='form-control' id='bidang_keahlihan' name='bidang_keahlihan' placeholder='Masukkan Bidang Keahlihan Lengkap Anda' style='width:500px;'>
				</div>
				<div class='form-group'>
    				<input type='text' class='form-control' id='riwayat_pelatihan' name='riwayat_pelatihan' placeholder='Masukkan Riwayat pelatihan Anda' style='width:500px;'>
				</div>

				<div class='form-group'>
    				<input type='text' class='form-control' id='sertifikat_dimiliki' name='sertifikat_dimiliki' placeholder='Masukkan Sertifikat Dimiliki Anda' style='width:500px;'>
				</div>

				<div class='form-group'>
    				<input type='text' class='form-control' id='riwayat_project' name='riwayat_project' placeholder='Masukkan Riwayat Project Anda' style='width:500px;'>
				</div>

				<hr/>
				<div style='float:left'>
				<button type='reset' class='btn btn-danger' name='btnReset' id='btnReset'>Reset Data&nbsp;<i class='fas fa-trash' ></i></button>

				<button type='submit' class='btn btn-info' name='btnDaftar' id='btnDaftar'>Daftar Portofolio&nbsp;<i class='fas fa-check'></i></button>
				</div>
				<br/>
				<br/>



    		</div>
    		</form>
    		</center> ";