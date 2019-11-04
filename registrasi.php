<body style="background-image: url(assets/img/ai.jpg);">

<?php include "header.php";?>
<br>
<br>


<div class="container" style="width: 500px;height:auto; float: right;background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);border-radius: 50px;margin-right: 20px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56); height: 60%;
-moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);"><br>
<div><center><h1 class="display-4" style="font-size: 30px; font-weight: bold;">Registrasi <a  href="index.php">Digital Talent</a><i> 2019</i></h1></center></div>
<small>Silahkan masukkan data yang valid atau data yang sebenarnya Terima Kasih</small>

        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == 'gagaldaftar'){
                    echo "<div class='alert alert-danger' role='alert'>Gagal Membuat Akun</div>";
                }
            }

        ?>
    <form name="FormReg" action="tambahUser.php" onsubmit="return validasiForm()" method="post">  
    <div class="form-group" style="margin-top: 15px; margin-bottom: 0px;">Masukan NIK anda :
      <input type="text" name="nik" class="form-control" style="border-radius: 20px;" placeholder="Masukkan NIK Anda">
    </div> 
    
    <div class="form-group" style="padding-top: 0px;">Masukan Password anda :
      <input type="password" name="password" class="form-control" style="border-radius: 20px;" placeholder="Masukkan Password">
    </div>
          
    <small>Apabila Data yang anda masukkan sudah benar silahkan tekan tombol daftar!!!</small>
    <hr/>
    
    <p> 
        <button type="reset" class="btn btn-danger" value="Reset Data" name="Reset" style="border-radius: 20px;">Reset&nbsp;<i class="fas fa-trash"></i></button>
        <button type="submit" class="btn btn-info" value="Daftar" name="submit" style="border-radius: 20px;">Daftar&nbsp;<i class="fas fa-check"></i></button>
        <small>Sudah punya akun? klik Ikon disamping</small><a href="login.php" style="text-decoration: none;">&nbsp;<img src="assets/img/dt.png" style="height: 20px;"><small>&nbsp;Login</small></a>     
    </p> 
   

</form> 
</div>
</div>

<div class="container-fluid" style="width: 800px; height: 60%; float: right;background: linear-gradient(to bottom, #33ccff 0%, #ffccff 100%);border-radius: 50px;margin-right: 20px; -webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);">
<br/>
  <center></center>
  <div><h1 class="display-4" style="font-size: 30px; "><img src="assets/img/dt.png" style="height: 50px;">&nbsp;<u>Informasi Singkat</u></h1>
    </div>
    <div id="contentRegister" style="padding-left: 57px;text-align: justify;"> 
        <td>Digital Talent Scholarship merupakan sebuah Pelatihan untuk menambah keahlian yang disertifikasi Kominfo dengan metode <i>hands-on-Labs</i> kepada setiap siswa.Aplikasi ini merupakan aplikasi yang dibangun secara bertahap dalam Pelatihan Digital Talent Scholarship yang dilaksanakan di <a href="http://www.polmed.ac.id/" style="color: black;text-decoration: none;font-weight: bold;">Politeknik Negeri Medan</a>.</td>
    <br/><br/>

</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script> 
function validasiForm()                                    
{ 
    var nik = document.forms["FormReg"]["nik"];               
    var password = document.forms["FormReg"]["password"];  
      
   
    if (nik.value == "")                                  
    { 
        window.alert("Silahkan Masukkan NIK anda.");
        nik.focus(); 
        return false; 
    } 
     if (password.value == "")                        
    { 
        window.alert("Silahkan Masukkan Password Anda"); 
        password.focus(); 
        return false; 
    } 
    
  
  
   
   
   
   
   
    return true; 
}</script> 

</body>