<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data nis yang di kirim dari url
    $nis = $_GET['nis'];
    
    // mengambil data siswa
    $data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis = '$nis'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM siswa WHERE nis = '$nis'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>