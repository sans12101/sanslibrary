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
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="assets/css/san.css">
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
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
<link rel="stylesheet" href="san.css">
<h2 align="center"> Tampilan Ulasan</h2>
<div class="kontak" cellpaqqdding="2" align="center">
    <table border = "1" width="70%" >
        <thead>
        <tr>
            <th>No</th>
            <th>Username </th>
            <th>Judul</th>
            <th>Ulasab</th>
            <th>Reting</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $query=mysqli_query($koneksi, "SELECT * FROM ulasanbuku LEFT JOIN user on ulasanbuku.UserID = user.UserID 
            LEFT JOIN buku on ulasanbuku.BukuID = buku.BukuID  ");
            $no=0;
            while($data =mysqli_fetch_array($query)){
                $no++;
            
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data['Username']?></td>
                <td><?php echo $data['Judul']?></td>
                <td><?php echo $data['Ulasan']?></td>
                <td><?php echo $data['Rating']?></td>
                <?php if($_SESSION['level'] =='admin'){ ?>
                <td><a href="hapus_ulasan.php?UlasanID=<?php echo $data['UlasanID'];?>" onClick="return confirm('apakah kamu yakin?')" class="btn bg-danger text-white">Hapus</a></td>
          <?php }
          ?>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>    
            <br>
            <div>
            <a href="../index.php" class="btn-get-started scrollto">Home</a>
            </div>
           

</div>
</body>
</html>