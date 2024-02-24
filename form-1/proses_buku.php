<?php
  include "../koneksi.php";
  if(isset($_POST['submit'])){
      $kategori = mysqli_real_escape_string($koneksi,$_POST['KategoriID']);
      $foto = mysqli_real_escape_string($koneksi,$_POST['foto']);
      $judul = mysqli_real_escape_string($koneksi,$_POST['Judul']);
      $penulis = mysqli_real_escape_string($koneksi,$_POST['Penulis']);
      $penerbit = mysqli_real_escape_string($koneksi,$_POST['Penerbit']);
      $tahun_terbit = mysqli_real_escape_string($koneksi,$_POST['Tahun_Terbit']);
      $sinopsis = mysqli_real_escape_string($koneksi,$_POST['deskripsi']);
      $stok = mysqli_real_escape_string($koneksi,$_POST['stok']);
      
      $input = mysqli_query($koneksi, "INSERT INTO buku(KategoriID, foto, Judul, Penulis, Penerbit, Tahun_Terbit, deskripsi, stok) VALUES 
              ( '$kategori','$foto','$judul','$penulis','$penerbit','$tahun_terbit','$sinopsis','$stok')");
      if(!empty($input)){
        echo '<script>
              alert("Tambah Buku Berhasil");
              window.location = "../buku.php";
              </script>';
      }
  }  
?>