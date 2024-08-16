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

    // jalankan query UPDATE berdasarkan nip yang kita edit
    $query  = "UPDATE guru SET nm_guru = '$nm_guru', tmp_lahir_guru = '$tmp_lahir_guru', tgl_lahir_guru = '$tgl_lahir_guru', jkel_guru = '$jkel_guru', alamat = '$alamat', telp = '$telp', kd_matpel = '$kd_matpel', nm_matpel = '$nm_matpel' WHERE nip = '$nip'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
            die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {

        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>