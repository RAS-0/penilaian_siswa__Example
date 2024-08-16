<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_kelas    = $_POST['kd_kelas'];
    $nm_kelas    = $_POST['nm_kelas'];
    $jml_siswa   = $_POST['jml_siswa'];
    $thn_ajaran  = $_POST['thn_ajaran'];
    $nip         = $_POST['nip'];
    $nm_guru     = $_POST['nm_guru'];
    
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO kelas VALUES('$kd_kelas','$nm_kelas','$jml_siswa','$thn_ajaran','$nip','$nm_guru')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>