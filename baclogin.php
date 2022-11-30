<?php 
session_start();
$name = $_POST['name'];
$hash = $_POST['password'];

if ($name == "admin" && $hash == "a1A1") {
    $_SESSION['name'] = $name;
    header("Location:dashboard.php");
}else {
    echo "<script>alert('masih ada yang salah',window.location.assign('tampilan.php'))</script>";
}
?>