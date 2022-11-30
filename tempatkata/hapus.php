<?php 
include "../koneksi.php";
if (isset($_POST["hapus"])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM kata WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
        echo "<script>alert('data berhasil di hapus',window.location.assign('/tebakkata/tempatkata/'))</script>";
    } else {
        echo "<script>alert('data gagal di hapus',window.location.assign(''))</script>";
    } 
}
?>