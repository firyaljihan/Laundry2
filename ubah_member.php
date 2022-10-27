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
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Ubah Member</div>
    <div class="card-body">
    <form action="proses_ubah_member.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        <div class="form-group">
          <label>Nama Member</label>
          <input type="text" name="nama_member" value= "<?=$dt_member['nama_member']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" value= "<?=$dt_member['alamat']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <?php 
        $arr_member=array('Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_member as $key_member => $val_member):
                if($key_member==$dt_member['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
             <option value="<?=$key_member?>" <?=$selek?>><?=$val_member?></option>
            <?php endforeach ?>
        </select>
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="text" name="tlp" value= "<?=$dt_member['tlp']?>" class="form-control">
        </div>
        <a href="tampil_member.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Ubah member" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>