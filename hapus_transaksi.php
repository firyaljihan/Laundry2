<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus_transaksi=mysqli_query($conn,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
        if($qry_hapus_transaksi){
            echo "<script>alert('Sukses hapus transaksi');location.href='histori_transaksi_admin.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus transaksi');location.href='histori_transaksi_admin.php';</script>";
        }
    }
?>