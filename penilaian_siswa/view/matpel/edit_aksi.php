<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $kd_matpel    = $_POST['kd_matpel'];
    $nm_matpel    = $_POST['nm_matpel'];

    // jalankan query UPDATE berdasarkan kd_matpel yang kita edit
    $query  = "UPDATE matpel SET nm_matpel = '$nm_matpel' WHERE kd_matpel = '$kd_matpel'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>