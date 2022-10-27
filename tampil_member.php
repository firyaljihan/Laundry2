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
        <h1>DATA MEMBER</h1>
        <form method="POST" action="tampil_member.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA MEMBER</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">TELEPON</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
           
            $query_member = mysqli_query($conn, "select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($query_member)){
            $no++;
            ?>
            
            <tr>
              <td><?=$no?></td>
              <td><?=$data_member['nama_member']?></td>
              <td><?=$data_member['alamat']?></td>
              <td><?=$data_member['jenis_kelamin']?></td>
              <td><?=$data_member['tlp']?></td>
            </tr>
            <?php 
            } 
            ?>
          </tbody>
        </table>
        <a href="tambah_member.php" type="button" class="btn btn-primary">Tambah
      
  
</body>
</html>