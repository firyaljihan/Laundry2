<?php
include "header_user.php";
if($_POST){
    $nama=$_POST['nama_user'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='akun_baru.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='akun_baru.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='akun_baru.php';</script>";
    } elseif(empty($role)){
        echo "<script>alert('role tidak boleh kosong');location.href='akun_baru.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama_user, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='login.php';</script>";
        }
    }
}
?>