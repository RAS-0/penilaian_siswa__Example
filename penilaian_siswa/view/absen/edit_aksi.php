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

    // jalankan query UPDATE berdasarkan kd_kelas yang kita edit
    $query  = "UPDATE absen SET nm_bulan = '$nm_bulan', nis = '$nis', nm_siswa = '$nm_siswa', jml_hadir = '$jml_hadir', alfa = '$alfa', izin = '$izin', sakit = '$sakit' WHERE kd_absen = '$kd_absen'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
            die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {

        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>