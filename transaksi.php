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
    include "koneksi.php";
?>
<br></br>
  <div class="container" style="width:850px;">
    <div class="card">
      <div class="card-header">
        <h1>TRANSAKSI</h1>
    <div class="row">
    <div class="col-md-8">
        <form action="masukkan_keranjang.php" method="post">
            <table class="table table-hover table-striped">
            
                <thead>
                    <tr>
                        <td>Paket</td><td>
                        <select name="jenis_paket" style="width:250px;" class="form-control" required>
                        <option></option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed-cover</option>
                        <option value="kaos">Kaos</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Paket</td><td><input type="number" name="qty" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Tambah"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
</body>
</html>