<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($role)){
            echo "<script>alert('Role tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."'"); //mengambil isi dari database (full)
            if(mysqli_num_rows($qry_login)>0){ //menyeleksi/mengetahui berapa banyak jumlah baris atau isi
                $dt_login=mysqli_fetch_array($qry_login); //mengambil isi dari database yang sudah diseleksi
                if($role == $dt_login['role']){
                session_start();
                $_SESSION['id_user']=$dt_login['id_user'];
                $_SESSION['nama_user']=$dt_login['nama_user'];
                $_SESSION['role']= $dt_login['role']; 
                $_SESSION['status_login_user']=true;
                header("location: home_user.php");
                }
                else {
                    echo "<script>alert('role tidak benar');location.href='login.php';</script>";

                }
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>