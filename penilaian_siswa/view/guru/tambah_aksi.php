<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $nip             = $_POST['nip'];
    $nm_guru         = $_POST['nm_guru'];
    $tmp_lahir_guru  = $_POST['tmp_lahir_guru'];
    $tgl_lahir_guru  = $_POST['tgl_lahir_guru'];
    $jkel_guru       = $_POST['jkel_guru'];
    $alamat          = $_POST['alamat'];
    $telp            = $_POST['telp'];
    $kd_matpel       = $_POST['kd_matpel'];
    $nm_matpel       = $_POST['nm_matpel'];
    
    // menginput data ke database
    mysqli_query($koneksi, "INSERT INTO guru VALUES('$nip','$nm_guru','$tmp_lahir_guru','$tgl_lahir_guru','$jkel_guru','$alamat','$telp','$kd_matpel','$nm_matpel')"); 

    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Ditambah');window.location='index.php';</script>";
?>