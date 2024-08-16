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
    
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="topnav">
        <a href="../../index.php" class="nav-link text-light">Beranda</a>
        <a href="../matpel/index.php" class="nav-link text-light">Matpel</a>
        <a href="../guru/index.php" class="nav-link text-light">Guru</a>
        <a href="../kelas/index.php" class="nav-link text-light">Kelas</a>
        <a href="../siswa/index.php" class="nav-link text-light">Siswa</a>
        <a href="../nilai/index.php" class="nav-link text-light">Nilai</a>
        <a href="../absen/index.php" class="nav-link text-light">Absen</a>
        <a href="../auth/logout.php" class="nav-link text-light">Keluar</a>
        <a href="../../index.php" class="navbar-brand" style="float: right">LOGO SEKOLAH</a>
    </div>
    
    <div class="jumbotron jumbotron-fluid bg-light" style="height:90vh">
        <div class="container">
            <a href="tambah.php">+ TAMBAH KELAS</a>
            <!-- <button type="button" onclick="window.print()">
                Print Laporan
            </button> -->
            <table border="1">
                <tr>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Tahun Ajaran</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                </tr>
                <?php 
                    include '../../config/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM kelas");
                    while($d = mysqli_fetch_array($data))
                    {
                ?>
                    <tr>
                        <td><?php echo $d['kd_kelas']; ?></td>
                        <td><?php echo $d['nm_kelas']; ?></td>
                        <td><?php echo $d['jml_siswa']; ?></td>
                        <td><?php echo $d['thn_ajaran']; ?></td>
                        <td><?php echo $d['nip']; ?></td>
                        <td><?php echo $d['nm_guru']; ?></td>
                        <td>
                            <a href="edit.php?kd_kelas=<?php echo $d['kd_kelas']; ?>">EDIT</a>
                            <a href="hapus.php?kd_kelas=<?php echo $d['kd_kelas']; ?>">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>