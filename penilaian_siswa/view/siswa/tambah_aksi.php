<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $nis         = $_POST['nis'];
    $nm_siswa    = $_POST['nm_siswa'];
    $tmp_lahir   = $_POST['tmp_lahir'];
    $tgl_lahir   = $_POST['tgl_lahir'];
    $jkel        = $_POST['jkel'];
    $alamat      = $_POST['alamat'];
    $telp        = $_POST['telp'];
    $nm_wali     = $_POST['nm_wali'];
    $kd_kelas    = $_POST['kd_kelas'];
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    
    $pass = password_hash($password, PASSWORD_DEFAULT);
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO siswa VALUES('$nis','$nm_siswa','$tmp_lahir','$tgl_lahir','$jkel','$alamat','$telp','$nm_wali','$kd_kelas','$username','$pass')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>