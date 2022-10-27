<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>
<body style=" background:rgb(232, 245, 246)">
<?php 
    include "header_user.php";
?>
<img src= "/laundry_ukl/foto/home.png" width="1000px" height="800px" align= right >

<div class="sambutan" style="margin-top:300px;">
<ul class="sambutan" style="margin-left:50px;">

<h1 align = left style="color: #FFB200; font-size:70px; font-weight:bold; font-family: arial;"  > Selamat Datang!</h1><br>
<h2 align = left style="font-family: calibri; font-weight:bolder;">Sebagai <?=$_SESSION['role']?> <?=$_SESSION['nama_user']?> di Website F2M Laundry </h2>
<h5 align = left style="font-family: times;">"Sukses bukanlah kunci dari kebahagiaan. Sebaliknya, kebahagiaan adalah kunci kesuksesan. Jika kamu mencintai apa yang kamu lakukan, kamu akan sukses." -Albert Schweitzer</h5>


<?php
    include "footer.php";
    ?>
    </body>
</html>