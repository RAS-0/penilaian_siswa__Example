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
            <a href="tambah.php">+ TAMBAH SISWA</a>
            <!-- <button type="button" onclick="window.print()">
                Print Laporan
            </button> -->
            <table border="1">
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Nama Wali</th>
                    <th>Kode Kelas</th>
                    <th>Username</th>
                </tr>
                <?php 
                    include '../../config/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM siswa");
                    while($d = mysqli_fetch_array($data))
                    {
                ?>
                    <tr>
                        <td><?php echo $d['nis']; ?></td>
                        <td><?php echo $d['nm_siswa']; ?></td>
                        <td><?php echo $d['tmp_lahir']; ?></td>
                        <td><?php echo $d['tgl_lahir']; ?></td>
                        <td><?php echo $d['jkel']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['telp']; ?></td>
                        <td><?php echo $d['nm_wali']; ?></td>
                        <td><?php echo $d['kd_kelas']; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td>
                            <a href="edit.php?nis=<?php echo $d['nis']; ?>">EDIT</a>
                            <a href="hapus.php?nis=<?php echo $d['nis']; ?>">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>