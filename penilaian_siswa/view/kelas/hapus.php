<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data kd_kelas yang di kirim dari url
    $kd_kelas = $_GET['kd_kelas'];
    
    // mengambil data kelas
    $data = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kd_kelas = '$kd_kelas'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM kelas WHERE kd_kelas = '$kd_kelas'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>