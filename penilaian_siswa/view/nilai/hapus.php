<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data kd_nilai yang di kirim dari url
    $kd_nilai = $_GET['kd_nilai'];
    
    // mengambil data nilai
    $data = mysqli_query($koneksi,"SELECT * FROM nilai WHERE kd_nilai = '$kd_nilai'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM nilai WHERE kd_nilai = '$kd_nilai'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>