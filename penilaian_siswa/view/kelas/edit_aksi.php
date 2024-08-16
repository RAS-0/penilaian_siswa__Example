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

    // jalankan query UPDATE berdasarkan kd_kelas yang kita edit
    $query  = "UPDATE kelas SET nm_kelas = '$nm_kelas', jml_siswa = '$jml_siswa', thn_ajaran = '$thn_ajaran', nip = '$nip', nm_guru = '$nm_guru' WHERE kd_kelas = '$kd_kelas'";
    $result = mysqli_query($koneksi, $query);
    // periksa query apakah ada error
    if(!$result){
            die ("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {

        //tampil alert dan akan redirect ke halaman index.php
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
?>