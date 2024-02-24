<?php
if(isset($_GET['PeminjamanID'])){
    include "../koneksi.php";
    $id= $_GET['PeminjamanID'];
    
    $status=$_POST['status'];

    $ubah = mysqli_query($koneksi,"UPDATE peminjaman set StastusPeminjaman ='$status' WHERE PeminjamanID='$id'");

    if(!empty($ubah)){
        header('location:peminjaman_buku.php');
    }
}
?>