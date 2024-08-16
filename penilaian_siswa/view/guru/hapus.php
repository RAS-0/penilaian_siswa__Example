<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data nip yang di kirim dari url
    $nip = $_GET['nip'];
    
    // mengambil data guru
    $data = mysqli_query($koneksi,"SELECT * FROM guru WHERE nip = '$nip'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM guru WHERE nip = '$nip'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>