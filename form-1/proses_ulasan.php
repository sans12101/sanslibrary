<?php
  include "../koneksi.php";
  if(isset($_POST['submit'])){
      $kategori = mysqli_real_escape_string($koneksi,$_POST['UlasanID']);
      $foto = mysqli_real_escape_string($koneksi,$_POST['UserID']);
      $judul = mysqli_real_escape_string($koneksi,$_POST['BukuID']);
      $penulis = mysqli_real_escape_string($koneksi,$_POST['Ulasan']);
      $penerbit = mysqli_real_escape_string($koneksi,$_POST['Rating']);

      
      $input = mysqli_query($koneksi, "INSERT INTO ulasanbuku(UlasanID, UserID, BukuID, Ulasan, Rating) VALUES 
              ( '$kategori','$foto','$judul','$penulis','$penerbit')");
      if(!empty($input)){
        echo '<script>
              alert("Ulasan Buku Berhasil");
              window.location = "tampilan_ulasan.php";
              </script>';
      }
  }  
?>