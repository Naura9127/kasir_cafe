<?php
$koneksi = mysqli_connect("localhost", "root", "", "kasir_cafe");

if (!$koneksi) 
    die("Koneksi error : " . mysqli_connect_error());

?>