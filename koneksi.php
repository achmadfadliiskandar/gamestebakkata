<?php 
$host = "localhost";
$user = "root";
$password = ""; #karena pakai xampp nggak usah pakai password kecuali punya hak akses
$database = "tebakkata";
$connect = mysqli_connect($host,$user,$password,$database) or die("nggak bisa terhubung");
?>