<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_nilai        = $_POST['kd_nilai'];
    $nis             = $_POST['nis'];
    $nm_siswa        = $_POST['nm_siswa'];
    $kd_matpel       = $_POST['kd_matpel'];
    $nm_matpel       = $_POST['nm_matpel'];
    $uts_sem_ganjil  = $_POST['uts_sem_ganjil'];
    $uas_sem_ganjil  = $_POST['uas_sem_ganjil'];
    $uts_sem_genap   = $_POST['uts_sem_genap'];
    $uas_sem_genap   = $_POST['uas_sem_genap'];

    // jalankan query UPDATE berdasarkan kd_nilai yang kita edit
    $query  = "UPDATE nilai SET kd_nilai = '$kd_nilai', nis = '$nis', nm_siswa = '$nm_siswa', kd_matpel = '$kd_matpel', nm_matpel = '$nm_matpel', uts_sem_ganjil = '$uts_sem_ganjil', uas_sem_ganjil = '$uas_sem_ganjil', uts_sem_genap = '$uts_sem_genap', uas_sem_genap = '$uas_sem_genap' WHERE kd_nilai = '$kd_nilai'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
            die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {

        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>