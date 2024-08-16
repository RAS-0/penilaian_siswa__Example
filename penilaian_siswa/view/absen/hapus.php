<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data kd_absen yang di kirim dari url
    $kd_absen = $_GET['kd_absen'];
    
    // mengambil data absen
    $data = mysqli_query($koneksi,"SELECT * FROM absen WHERE kd_absen = '$kd_absen'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM absen WHERE kd_absen = '$kd_absen'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>