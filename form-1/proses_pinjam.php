<?php
include "../koneksi.php";

if(isset($_POST['submit'])){
    $id_buku = $_POST['BukuID'];
    $id_user = $_POST['UserID'];
    $tanggal_peminjaman = date('y-m-d');
    $tanggal_kembali = date('y-m-d',strtotime($tanggal_peminjaman.'+7 days'));
    $jumlah_pinjam = $_POST['JumlahPinjam'];
    $status_pinjam = $_POST['status'];
    
    $query = mysqli_query($koneksi,"INSERT INTO peminjaman (BukuID,UserID,TanggalPeminjaman,TanggalPengembalian,JumlahPinjam,StastusPeminjaman)VALUES ('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_kembali','$jumlah_pinjam','$status_pinjam')");

    if($query) {
        echo '<script>alert("Peminjaman Berhasil.");window.location="peminjaman_buku.php";</script>';
    }else{
        echo '<script>alert("Tambah data gagal.");</script>';
    }
}
?>