<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","perpustakaan1");

if(!$koneksi){
    die("koneksi gagal :".mysqli_connect_error());
}
?>