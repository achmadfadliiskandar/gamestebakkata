<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
        <h1>Dashboard Admin</h1>
        <div class="mobile-menu">
            <h3>Menu Map : </h3>
        <ul>
                <span>
                    <a href="/tebakkata/dashboard.php">User : <?php echo $_SESSION['name']; ?></a>
                </span>
                <span><form action="/tebakkata/baclogout.php" method="post">
                    <button type="submit" class="btnlogout" name="sublogout">Logout</button>
                </form>
                </span>
                <span><a href="/tebakkata/tempatkata">Tempat Kata</a></span>
            </ul>
        </div>
        <div class="alert">
        <marquee direction="left to right">Selamat Datang :  <?php echo $_SESSION['name']; ?> Anda Berada Dalam Mode : On </marquee>
        </div>
        <div class="card">
        <?php
        include "./koneksi.php";
        $sql = "SELECT COUNT(*) AS count FROM kata";
        $query = mysqli_query($connect,$sql);
        foreach ($query as $value) {
            echo " <h2>Jumlah Kata : ".$value['count']."</h2>";
        }
        ?>
        </div>
    </div>
    <div class="footer">
        <footer>
            <p>Copyright &copy; <?php echo date("Y"); ?></p>
        </footer>
    </div>
</body>
<style>
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
    .mobile-menu{
        display: none;
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
    @media only screen and (max-width: 1000px) {
        body{
            overflow-x: hidden;
        }
    .sidebar {
        display: none;
    }
    .content{
        display: block;
        padding: 0;
        margin: 0;
    }
    .navbar{
        background-color: rebeccapurple;
        width: 100%;
        margin-top: -20px;
        padding-left: 10px;
        margin-left: 0px;
    }
    footer{
        width: 100%;
        background-color: rebeccapurple;
    }
    .mobile-menu{
        display: inline;
    }
    }
</style>
</html>