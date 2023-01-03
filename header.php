<?php
include "includes/config.php";
session_start();
if (!isset($_SESSION['nama_lengkap'])) {
    echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrasi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<style>
    body {
        font-family: Poppins;
    }

    nav {
        background-color: #0A9343;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    nav .navbar-brand {
        font-weight: bold;
        font-size: 18px !important;
    }

    a {
        color: #fff;
        display: flex;
        gap: 10px;
    }

    a img {
        margin-top: -10px;
    }

    .panel {
        background-color: white;
        border: none !important;
    }

    a:hover {
        background-color: transparent !important;
        color: #E3A413 !important;
        font-weight: bold;
    }
</style>

<body>

    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo-unimal.png" alt="" width="32" height="40 mb-3">SPK AHP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="nilai.php">Nilai</a></li>
                    <li><a href="kriteria.php">Kriteria</a></li>
                    <li><a href="alternatif.php">Alternatif</a></li>
                    <li><a href="analisa-kriteria.php">Analisa Kriteria</a></li>
                    <li><a href="analisa-alternatif.php">Analisa Alternatif</a></li>
                    <li><a href="rangking.php">Rangking</a></li>
                    <!-- <li><a href="laporan-cetak.php">Laporan</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="profil.php"><?php echo $_SESSION['nama_lengkap'] ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="user.php">Manejer Pengguna</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
