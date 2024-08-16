<?php
    $host       = 'localhost';
    $user       = 'root';
    $password   = '';
    $db         = 'db_siswa';
    
    $koneksi = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
?>