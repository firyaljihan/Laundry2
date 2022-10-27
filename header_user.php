<?php 
 session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
    <nav class="navbar  navbar-expand-lg navbar-light bg-light" style="box-shadow: 20px 20px 25px -20px; height:80px;">
      <div class="container-fluid" style="background-color:#628E90; height:97px; ">
        <a class="navbar-brand" style="font-size:30px; color:white; padding:40px;" href="#">LAUNDRY F2M</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ms-auto"  style="padding:50px;">
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="home_user.php">Home</a>
            </li>
            <?php
            if($_SESSION['role']=='Admin'){
              ?>
              <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="tampil_paket.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="tampil_user.php">Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="tampil_member_admin.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="data.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="histori_transaksi_admin.php">Laporan</a>
            </li>
              <?php
            }
            if($_SESSION['role']=='Kasir'){
              ?>
              <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="tampil_member.php">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="data.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="histori_transaksi.php">Laporan</a>
            </li>
              <?php
            }
            if($_SESSION['role']=='Owner'){
                ?>
                <li class="nav-item">
              <a class="nav-link"  style="color:white; font-size:19px;" aria-current="page" href="laporan_owner.php">Laporan</a>
            </li>
                <?php
              }
            ?>
            <li class="nav-item">
              <a class="nav-link" style="color:white; font-size:19px;" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:15px"></div>
</body>

</html>