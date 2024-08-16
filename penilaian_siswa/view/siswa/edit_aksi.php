<?php 
    // koneksi database
    include '../../config/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $nis        = $_POST['nis'];
    $nm_siswa   = $_POST['nm_siswa'];
    $tmp_lahir  = $_POST['tmp_lahir'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $jkel       = $_POST['jkel'];
    $alamat     = $_POST['alamat'];
    $telp       = $_POST['telp'];
    $nm_wali    = $_POST['nm_wali'];
    $kd_kelas   = $_POST['kd_kelas'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
    $pass = password_hash($password, PASSWORD_DEFAULT);

    // jalankan query UPDATE berdasarkan nis yang kita edit
    $query  = "UPDATE siswa SET nm_siswa = '$nm_siswa', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', jkel = '$jkel', alamat = '$alamat', telp = '$telp', nm_wali = '$nm_wali', kd_kelas = '$kd_kelas', username = '$username', password = '$pass' WHERE nis = '$nis'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
            die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {

        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>