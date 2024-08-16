<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data kd_matpel yang di kirim dari url
    $kd_matpel = $_GET['kd_matpel'];
    
    // mengambil data matpel
    $data = mysqli_query($koneksi,"SELECT * FROM matpel WHERE kd_matpel = '$kd_matpel'");

    // menghapus data dari database
    mysqli_query($koneksi,"DELETE FROM matpel WHERE kd_matpel = '$kd_matpel'");
    
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Berhasil menghapus');window.location='index.php';</script>";
?>