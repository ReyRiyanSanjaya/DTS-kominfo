	<?php
	include '../../config.php';
	$id = $_GET['nik'];
	$data = mysqli_query($koneksi,"select * from db_pengguna where nik='$nik'");
	while($d = mysqli_fetch_array($data)){
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
    				<input type='hidden' name='id' value='<?php echo $d['nik']; ?>'>
    				<input type='text' class='form-control' id='nama' name='nama' value='<?php echo $d['nama']; ?>' placeholder='Masukkan Nama Lengkap Anda' style='width:500px;'>
				</div>
				<div class='form-group'>
    				<input type='date' class='form-control' id='ttl' name='ttl' value='<?php echo $d['ttl']; ?>' placeholder='Masukkan Tanggal Lahir Anda' style='width:500px;'>
				</div>

				<div class='form-group'>
    				<input type='text' class='form-control' id='provinsi' name='provinsi' value='<?php echo $d['provinsi']; ?>' placeholder='Masukkan Provinsi Anda' style='width:500px;'>
				</div>
				<div class='form-group align-left'>
    				<textarea name='alamat' id='alamat' class='form-control' value='<?php echo $d['alamat']; ?>' style='width:500px;'>
    				</textarea>
				</div>
				<div class='form-group'>
    				<input type='text' class='form-control' id='email' name='email' value='<?php echo $d['email']; ?>' placeholder='Masukkan Email Anda' style='width:500px;'>
				</div>

				<hr/>
				<div style='text-align:center;'>
				<button type='reset' class='btn btn-danger' name='btnReset' id='btnReset'>Reset Data&nbsp;<i class='fas fa-trash' ></i></button>

				<button type='submit' class='btn btn-info' name='btnDaftar' id='btnDaftar'>Daftar Anggota&nbsp;<i class='fas fa-check'></i></button>
				</div>
				<br/>
				<br/>



    		</div>
    		</form>
    		</center> ";