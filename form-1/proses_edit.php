
<?php
include "../koneksi.php";

$id = $_POST['BukuID'];
$judul = $_POST['Judul'];
$penulis = $_POST['Penulis'];
$penerbit = $_POST['Penerbit'];
$terbit = $_POST['Tahun_Terbit'];
$desk = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kat = $_POST['kategori'];

$insert = mysqli_query($koneksi,"UPDATE `buku` SET `KategoriID`='$kat',`Judul`='$judul',`Penulis`='$penulis',`Penerbit`='$penerbit',`Tahun_Terbit`='$terbit',`deskripsi`='$desk',`stok`='$stok' WHERE BukuID='$id' ");

if(!empty($insert)){
    echo '<script>
    alert("data Berhasil di ubah");
    window.location="../buku.php";
    </script>';
}

?>
