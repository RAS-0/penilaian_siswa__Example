<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_nilai         = $_POST['kd_nilai'];
    $nis              = $_POST['nis'];
    $nm_siswa         = $_POST['nm_siswa'];
    $kd_matpel        = $_POST['kd_matpel'];
    $nm_matpel        = $_POST['nm_matpel'];
    $uts_sem_ganjil   = $_POST['uts_sem_ganjil'];
    $uas_sem_ganjil   = $_POST['uas_sem_ganjil'];
    $uts_sem_genap    = $_POST['uts_sem_genap'];
    $uas_sem_genap    = $_POST['uas_sem_genap'];
    
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO nilai VALUES('$kd_nilai','$nis','$nm_siswa','$kd_matpel','$nm_matpel','$uts_sem_ganjil','$uas_sem_ganjil','$uts_sem_genap','$uas_sem_genap')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>