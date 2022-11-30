<!DOCTYPE html>
<html>
<head>
<title>Tebak Kata</title>
</head>
<body onkeydown="if(!event.target.matches('input')&&!event.target.matches('textarea'))return!1" oncontextmenu="return!1" onselectstart="return!1" ondragstart="return!1">
<h1>Tebak Kata By Achmad Fadli Iskandar</h1>
<div class="kotak_login">
<p class="tulisan_login">Silahkan Menebak</p>
<form method="POST" action="/tebakkata/index.php">
<?php 
error_reporting(0);
include 'koneksi.php';
if (isset($_POST['tombol_login'])) {
    $jawaban  = strtolower($_POST['jawaban']);
    $jawabanbenar = $_POST['jawabanbenar'];
    // echo $jawabanbenar;
    if ($jawaban == $jawabanbenar) {
        echo "<p style='color:green;text-align:center;'>jawabanya benar &#128525;<p>";
    }else{
        echo "<p style='color:red;text-align:center;'>jawabanya salah &#128514;<p>";
    }
}
$sql = "SELECT * FROM kata GROUP BY rand() LIMIT 1";
$query = mysqli_query($connect,$sql);
foreach ($query as $value) {
    echo "<h3 class='soal' id='soal'>".str_shuffle($value["kata"])."</h3>";
    echo "<input type='hidden' name='jawabanbenar' value=".$value['kata'].">";
}
?>
    <label>Jawaban</label>
    <input type="text" name="jawaban" class="form_login" required placeholder="jawab">
    <input type="submit" class="tombol_login" name="tombol_login" value="Jawab">
    <input type="button" onclick="random()" name="acak" value="Acak" id="acak" class="acak"> 
    <br/>
    <br/>
</form>
</div>
</body>
<style>
body{
font-family: sans-serif;
background: #896e91;
}

h1{
text-align: center;
/*ketebalan font*/
font-weight: 300;
}

.tulisan_login{
text-align: center;
/*membuat semua huruf menjadi kapital*/
text-transform: uppercase;
}

.kotak_login{
width: 350px;
background: white;
/*meletakkan form ke tengah*/
margin: 80px auto;
padding: 30px 20px;
}

label{
font-size: 11pt;
}

.form_login{
/*membuat lebar form penuh*/
box-sizing : border-box;
width: 100%;
padding: 10px;
font-size: 11pt;
margin-bottom: 20px;
}

.tombol_login{
background: #46de4b;
color: white;
font-size: 11pt;
width: 78%;
cursor: pointer;
border: none;
border-radius: 3px;
padding: 10px 20px;
}
.acak{
background: #f5428d;
color: white;
font-size: 11pt;
width: 20%;
cursor: pointer;
border: none;
border-radius: 3px;
padding: 10px 20px;
}
.link{
color: #232323;
text-decoration: none;
font-size: 10pt;
}
.soal{
    font-size: 30pt;
    text-align: center;
    letter-spacing: 20px;
}
</style>
</html>
<script>
    // fungsi untuk disable klik kanan
document.addEventListener('contextmenu', event => event.preventDefault(alert('maaf ya fungsi ini kita tutup')));

// random

function random(){
    window.location.assign("/tebakkata/index.php");
    // alert('test');
}
</script>