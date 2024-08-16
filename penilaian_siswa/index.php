<?php
    //inisialisasi session
    session_start();

    //mengecek username pada session
    if( !isset($_SESSION['username']) ){
        $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
        echo "<script>alert('anda harus login untuk mengakses halaman ini');window.location='view/auth/login.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Example</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--  CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="topnav">
        <a href="index.php" class="nav-link text-light">Beranda</a>
        <a href="view/matpel/index.php" class="nav-link text-light">Matpel</a>
        <a href="view/guru/index.php" class="nav-link text-light">Guru</a>
        <a href="view/kelas/index.php" class="nav-link text-light">Kelas</a>
        <a href="view/siswa/index.php" class="nav-link text-light">Siswa</a>
        <a href="view/nilai/index.php" class="nav-link text-light">Nilai</a>
        <a href="view/absen/index.php" class="nav-link text-light">Absen</a>
        <a href="view/auth/logout.php" class="nav-link text-light">Keluar</a>
        <a href="index.php" class="navbar-brand" style="float: right">LOGO SEKOLAH</a>
    </div>
    
    <div style="height:90vh">
        <div class="container">
            <center>
                <h1 class="display-4 text-center mt-4">BERANDA</h1>
                <p class="lead text-center">WELCOME</p>
            </center>
        </div>
    </div>
</body>
</html>