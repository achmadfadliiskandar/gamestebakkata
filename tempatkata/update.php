<?php 
include '../koneksi.php';
if (isset($_POST['updatekata'])) {
    $id = $_POST['id'];
    $kata = $_POST['kata'];

    $sql = "UPDATE kata set kata='$kata' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
        echo "<script>alert('data berhasil di ubah',window.location.assign('/tebakkata/tempatkata/'))</script>";
    } else {
        echo "<script>alert('data gagal di ubah',window.location.assign(''))</script>";
    }
}
?>