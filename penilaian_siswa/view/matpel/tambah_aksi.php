<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_matpel    = $_POST['kd_matpel'];
    $nm_matpel    = $_POST['nm_matpel'];
    
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO matpel VALUES('$kd_matpel','$nm_matpel')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>