<?php 
    include "header_user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet"  >
</head>
<body style=" background:rgb(232, 245, 246)">

<div class="row" style="margin-top:250px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:30px">
        <form action="cekdata.php" method="post">
          <h3 align="center">Laundry F2M</h3><br>
          <h6 align="center">Nama Member</h6>
          <center><select name="nama_member" style="width:350px;" class="form-control"></center>
          <option></option>
                <?php
                include "koneksi.php";
                //query menampilkan nama member ke dalam combobox
                $query=mysqli_query($conn, "select * from member");
                while ($data= mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['nama_member'];?>"><?php echo $data['nama_member'];?></option>
                <?php
                }
                ?>
            </select>
  
          <br>
        
          <center><input type="submit" name="transaksi" class="btn btn-success" value="Mulai Transaksi"></center><br>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>
