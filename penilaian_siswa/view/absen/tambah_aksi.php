<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_absen    = $_POST['kd_absen'];
    $nm_bulan    = $_POST['nm_bulan'];
    $nis         = $_POST['nis'];
    $nm_siswa    = $_POST['nm_siswa'];
    $jml_hadir   = $_POST['jml_hadir'];
    $alfa        = $_POST['alfa'];
    $izin        = $_POST['izin'];
    $sakit       = $_POST['sakit'];
    
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO absen VALUES('$kd_absen','$nm_bulan','$nis','$nm_siswa','$jml_hadir','$alfa','$izin','$sakit')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>