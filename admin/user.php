<?php include "security.php"; ?>
<?php include "header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col">
      <center>
        <h1 class="leadS">USER</h1>
      </center>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <div class="table-responsive" style="width: 100%;-webkit-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
        -moz-box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);
        box-shadow: 0px 4px 30px -1px rgba(0,0,0,0.56);border-radius: 10px;">
        <table class="table" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th>NIK(Nomor Induk Kependudukan)</th>
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
                            'SELECT `tb_user`.`nik`, `tb_pengguna`.`nik`,`nama`,`ttl`
                                   ,`provinsi`,`alamat`,`email`,`password`,`level`
                             FROM `tb_user`
                             INNER JOIN `tb_pengguna` 
                             ON `tb_user`.`nik` = `tb_pengguna`.`nik` ');
                          $no = 1;
                          foreach ($users as $row){

                            echo"
                          <tr>
                          <td>$no</td>
                            <td>".$row['nik']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['ttl']."</td>
                            <td>".$row['provinsi']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['password']."</td>
                            <td>".$row['level']."</td>
                          </tr>";
                          $no++;
                        }
                        ?>
              </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>