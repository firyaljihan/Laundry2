<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['status_login_user'] == true) {
        header('location: home_user.php');
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE-edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1,0">
    <title>Login Laundry F2M</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body style=" background:rgb(232, 245, 246)">
    <div class="container" >
        <div class="login">
            <form action="proses_login2.php" method="post">
                <h1 align="center" style="color:#628E90">LOGIN</h1>
                <hr>
                <p>Laundry F2M</p>
                <label for="">Username</label>
                <input type="text" name="username" value="" class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
                <label for="">Role</label>
                <select name="role" class="form-select" aria-label="Default select example">
                    <option value="kosong" style="text-align:center ;">-----Login Sebagai-----</option>
                    <option value="Admin">Admin</option>
                    <option value="Kasir">Kasir</option>
                    <option value="Owner">Owner</option>
                </select>
                <button style="color: black;">Login</button>
                <p>Sudah punya akun? <a href="akun_baru.php">Buat akun</a></p>
            </form>
        </div>
        <div class="right">
            <img src="/laundry_ukl/foto/login.png" alt="">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
<?php
}
?>