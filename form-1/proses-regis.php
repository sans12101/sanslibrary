<?php
include "../koneksi.php";

$username = $_POST['Username'];
$password = md5($_POST['Password']);
$email = $_POST['Email'];
$nama = $_POST['Nama_lengkap'];
$alamat = $_POST['Alamat'];
$level= $_POST['Level'];



$insert = mysqli_query($koneksi,"INSERT INTO user VALUES ('', '$username', '$password', '$email', '$nama', '$alamat','$level')");

if(!empty($insert)){
    echo '<script>
    alert("data anda sudah terdaftar");
    window.location="login.php";
    </script>';
}
?>