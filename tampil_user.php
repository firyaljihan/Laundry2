<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS ONLY -->
  <link href="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body style=" background:rgb(232, 245, 246)">
  <?php
    include "header_user.php";
  ?>
  <img src= "/laundry_ukl/foto/paket-bisnis-laundry-kiloan.png" width="300px" height="200px" align= right style="margin-top:600px;">
  <br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>DATA USER</h1>
        <form method="POST" action="tampil_user.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA USER</th>
              <th scope="col">USERNAME</th>
              <th scope="col">LEVEL</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
           
            $query_user = mysqli_query($conn, "select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($query_user)){
            $no++;
            ?>
            
            <tr>
              <td><?=$no?></td>
              <td><?=$data_user['nama_user']?></td>
              <td><?=$data_user['username']?></td>
              <td><?=$data_user['role']?></td>
              <td>
                <a href="ubah_user.php?id_user=
                <?=$data_user['id_user']?>" class="btn btn-success">Ubah</a>
                <a href="hapus_user.php?id_user=
                <?=$data_user['id_user']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?'")>Hapus</a>
              </td>
            </tr>
            <?php 
            } 
            ?>
          </tbody>
        </table>
        <a href="tambah_user.php" type="button" class="btn btn-primary">Tambah
      
  
</body>
</html>