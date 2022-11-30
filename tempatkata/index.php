<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Kata Admin</title>
</head>
<!-- <p>
    <?php 
        // kalau udah login hasilnya ini
        session_start();
            echo $_SESSION['name'];
        // ini batasnya kkalau belum login ya ini
        // dia nggak punya sessionnya
        if ($_SESSION['name'] == FALSE) {
            header("Location:tampilan.php");
        }
    ?>
    </p>
    <a href="baclogout.php">Logout</a> -->
<body>
    <div class="sidebar">
        <h3 class="jdsidebar" id="jdsidebar">Tebak Kata</h3>
        <aside>
            <ul>
                <li>
                    <a href="/tebakkata/dashboard.php">User : <?php echo $_SESSION['name']; ?></a>
                </li>
                <li><form action="/tebakkata/baclogout.php" method="post">
                    <button type="submit" class="btnlogout" name="sublogout">Logout</button>
                </form>
                </li>
                <li><a href="/tebakkata/tempatkata">Tempat Kata</a></li>
            </ul>
        </aside>
    </div>
    <div class="navbar">
        <nav>
            <ul class="ul">
                <li class="li">User yang aktif : <?php echo $_SESSION['name']; echo " | \tpada : \t",date("Y-m-d");  ?></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h1>Tempat Kata</h1>
        <a href="/tebakkata/tempatkata/tambah.php">Tambah Kata</a>
        <?php
        include '../koneksi.php';
        $sql = "SELECT * FROM kata";
        $query = mysqli_query($connect,$sql);
        $no = 1;
        ?>
        <div style="overflow-y: auto;">
        <table id="data" class="data" >
            <thead>
                <tr>
                    <td>No</td>
                    <td>Kata</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach($query as $data) {?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['kata'] ?></td>
                    <td>
                        <a href="/tebakkata/tempatkata/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                        <form style="display: inline-block;" action="/tebakkata/tempatkata/hapus.php" method="post" onsubmit="return confirm('are you sure ? ')">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <button type="submit" id="hapus" name="hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>
        </div>
        <!-- nanti isi data tabelnya disini -->
        <!-- end -->
    </div>
    <div class="footer">
        <footer>
            <p>Copyright &copy; <?php echo date("Y"); ?></p>
        </footer>
    </div>
</body>
<style>
    body{
        overflow-x: hidden;
    }
    .sidebar{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        top: 0;
        left: 0;
        position: fixed;
        background-color: #896e91;
        width: 300px;
        height: 100vh;
    }
    .jdsidebar{
        text-align: center;
        font-size: 30px;
        font-weight: 300;
    }
    li{
        font-size: 30px;
        /* width: 100%; */
        /* border-bottom: 1px solid black; */
        padding: 25px;
        text-align: left;
        color: black;
    }
    ul,li,a{
        list-style-type: none;
        text-decoration: none;
    }
    a{
        color: black;
    }
    .navbar{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        width: 1108px;
        margin-top: -20px;
        padding-left: 150px;
        margin-left: 100px;
        background-color: rebeccapurple;
    }
    nav,.ul,.li{
        text-align: center;
        display: flex;
    }
    footer{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 22.2%;
        background-color: transparent;
        color: black;
        text-align: center;
    }
    p{
        font-size: 30px;
    }
    .content{
        display: block;
        /* margin-top: 300px; */
        padding-left: 200px;
        margin-left: 100px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .alert{
        height: 40px;
        background-color: green;
    }
    marquee{
        font-size: 20px;
        margin-top: 10px;
    }
    .btnlogout{
        width: 70%;
        height: 30px;
        font-size: 30px;
        cursor: pointer;
        background-color: transparent;
        border: transparent;
    }
    .card{
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        padding: 2px 16px;
    }
    #data {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 15px;
    }
    #data td, #data th {
    border: 1px solid #ddd;
    padding: 8px;
    }
    #hapus{
        cursor: pointer;
    }
</style>
</html>