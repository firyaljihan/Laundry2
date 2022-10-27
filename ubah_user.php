<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
      background-color:rgb(232, 245, 246);
      margin-top: 60px;
      }
  </style>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Ubah user</div>
    <div class="card-body">
    <form action="proses_ubah_user.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value= "<?=$dt_user['id_user']?>">
        <div class="form-group">
          <label>Nama user</label>
          <input type="text" name="nama_user" value= "<?=$dt_user['nama_user']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" value= "<?=$dt_user['username']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" value= "" class="form-control">
        </div>
        <div class="form-group">
          <label>Level</label>
          <?php 
        $arr_user=array('Admin'=>'Admin','Kasir'=>'Kasir','Owner'=>'Owner');
        ?>
        <select name="role" class="form-control">
            <option></option>
            <?php foreach ($arr_user as $key_user => $val_user):
                if($key_user==$dt_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
             <option value="<?=$key_user?>" <?=$selek?>><?=$val_user?></option>
            <?php endforeach ?>
        </select>
        </div>
        <a href="tampil_user.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Ubah user" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>