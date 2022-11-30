<?php
if (isset($_POST['sublogout'])) {
    session_start();
    session_destroy();
    header("Location:tampilan.php");
}
?>