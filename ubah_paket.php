<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
      background-color: rgb(232, 245, 246);
      margin-top: 60px;
      }
  </style>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Ubah Paket</div>
    <div class="card-body">
    <form action="proses_ubah_paket.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        <div class="form-group">
          <label>Jenis Paket</label>
          <?php 
          $arr_paket=array('kiloan'=>'kiloan','selimut'=>'selimut','bed_cover'=>'bed cover','kaos'=>'kaos');
          ?>
          <select name="jenis_paket" class="form-control">
              <option></option>
              <?php foreach ($arr_paket as $key_paket => $val_paket):
                  if($key_paket==$dt_paket['jenis_paket']){
                      $selek="selected";
                  } else {
                      $selek="";
                  }
              ?>
              <option value="<?=$key_paket?>" <?=$selek?>><?=$val_paket?></option>
              <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="harga" value= "<?=$dt_paket['harga']?>" class="form-control">
        </div>
        <a href="tampil_paket.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Ubah paket" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>