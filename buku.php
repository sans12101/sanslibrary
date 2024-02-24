<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vesperr Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <div class="container">
  <h2 align="center">Daftar Buku</h2>
  <br>
  <div class="row">
    <?php
    include "koneksi.php";
    $query=mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategoribuku on buku.KategoriID = kategoribuku.KategoriID ");
    $no=0;
    while($data =mysqli_fetch_array($query)){
        $no++;
    ?>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img class="card-img-top" src="assets/san/<?php echo $data['foto']?>" alt="Card image cap" width="fix" height="fic">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['Judul']?></h5>
          <p class="card-text"><h8><?php echo $data['NamaKategori']?></h8></p>
          <p class="card-text"><h8><?php echo $data['Penulis']?></h8></p>
          <p class="card-text"><h8><?php echo $data['Penerbit']?></h8></p>
          <p class="card-text"><h8><?php echo $data['Tahun_Terbit']?></h8></p>
          <p class="card-text"><h8><textarea name="" id="" cols="30" rows="4"><?php echo $data['deskripsi']?></textarea></h8></p>
          <p class="card-text"><h8><?php echo $data['stok']?></h8></p>
          <?php if($_SESSION['level'] !='pengguna'){ ?>
          <a href="form-1/edit.php?BukuID=<?php echo $data['BukuID'];?>" class="btn btn-primary">Edit</a>
          <a href="form-1/hapus.php?BukuID=<?php echo $data['BukuID'];?>" onClick="return confirm('apakah kamu yakin?')" class="btn btn-danger">Hapus</a>
          <?php } elseif($_SESSION['level'] =='pengguna'){ ?>
          <a href="form-1/pinjam.php?" class="btn btn-primary">Pinjam</a>
          <a href="form-1/ulasan.php" class="btn btn-primary">Ulasan</a>
          <?php 
          }
          ?>
         
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
    </table>    
    <a href="index.php" class="btn btn-primary">Home</a>
</div>
</body>
</html>
