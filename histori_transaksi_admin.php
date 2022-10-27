<?php 
    include "header_user.php";
?>
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
    
<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 align = "center">HISTORI TRANSAKSI</h2>
        <form method="POST" action="histori_transaksi_admin.php" class="d-flex">
        </form>  
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Batas Waktu</th>
                <th scope="col">Tanggal Bayar</th>
                <th scope="col">Status</th>
                <th scope="col">Dibayar</th>
                <th colspan="4">Aksi</th>
            </thead>
            <tbody style="text-align:center;">
                <?php 
                    include "koneksi.php";
                    $qry_histori=mysqli_query($conn,"select * from transaksi join member on transaksi.id_member = member.id_member order by transaksi.id_transaksi desc");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_histori)){
                        $no++;
                        $button_proses="<a href='update_transaksi.php?id_transaksi=".$dt_histori['id_transaksi']."' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses</a>";
                        $button_selesai="<a href='update_transaksi.php?id_transaksi=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai</a>";
                        $button_diambil="<a href='update_transaksi.php?id_transaksi=".$dt_histori['id_transaksi']."' class='btn btn-success' onclick='return confirm(\"Apakah anda yakin?\")'>Diambil</a>";
                        
                    ?>
                <tr>
                    <td><?=$no?></td><td><?=$dt_histori['nama_member']?></td><td><?=$dt_histori['tgl']?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$dt_histori['tgl_bayar']?></td><td><?=$dt_histori['status']?></td><td><?=$dt_histori['pembayaran']?></td>
                    <?php if($dt_histori['pembayaran']=='belum_dibayar'){ ?>
                            <td><?=$button_lunas?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status']=='baru'){ ?>
                            <td><?=$button_proses?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status']=='proses'){ ?>
                            <td><?=$button_selesai?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status']=='selesai'){ ?>
                            <td><?=$button_diambil?></td>
                    <?php        
                        }
                    ?>
                    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>