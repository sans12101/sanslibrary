<!DOCTYPE html>
<html lang="en">
<?php
include "../koneksi.php";
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <style>
    body {
        background-color: #3498db; /* Warna latar belakang */
        color: #000000; /* Warna teks */
    }

    .inner-bg {
        background-color: #3498db;
    }

    .form-top-left h3 {
        color: #ffffff; /* Warna teks judul sebelah kiri */
    }

    .form-bottom h5 {
        color: #000000; /* Warna teks judul sebelah kanan */
    }

    .form-bottom input,
    .form-bottom select {
        background-color: #ffffff; /* Warna latar belakang input dan select */
        color: #3498db; /* Warna teks input dan select */
    }

    .form-bottom button {
        background-color: #3498db; /* Warna latar belakang tombol */
        color: #ffffff; /* Warna teks tombol */
    }
    a{
        color: #ffffff;
    }
</style>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Tambah</strong> Buku </h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        
                        ?>
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Penambahan Buku</h3>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="proses_buku.php" method="post" class="login-form">
                                <div class="form-group">
			                    		<label class="sr-only" for="form-username">Kategori</label>
                                        <h5>Kategori</h5>
			                        	<select name="KategoriID" id="from-control">
                                        <?php
                                        $kat = mysqli_query($koneksi,"SELECT * FROM kategoribuku");
                                        while ($kategori = mysqli_fetch_array($kat)){
                                        ?>
                                        <option value="<?php echo $kategori['KategoriID'];?>"><?php echo $kategori['NamaKategori'];?></option>
                                        <?php
                                        }?>
                                        </select>
			                        </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Judul</label>
                                        <h5>Judul</h5>
			                        	<input type="text" name="Judul" placeholder="Judul Buku..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Foto</label>
                                        <h5>Foto</h5>
			                        	<input type="file" name="foto" class="form-username form-control" id="form-username">
			                        </div>
                                    <label class="sr-only" for="form-username">Penulis</label>
                                    <h5>Penulis</h5>
			                        	<input type="text" name="Penulis" placeholder="Penulis..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Penerbit</label>
                                    <h5>Penerbit</h5>
			                        	<input type="text" name="Penerbit" placeholder="Penerbit..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Tahun_Terbit</label>
                                        <h5>Tahun_Terbit</h5>
			                        	<input type="date" name="Tahun_Terbit" placeholder="tahun terbit..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Deskripsi</label>
                                        <h5>Tahun_Terbit</h5>
			                        	<input type="text" name="deskripsi" placeholder="deskripsi buku..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Stok</label>
                                        <h5>Stok</h5>
			                        	<input type="text" name="stok" placeholder="Stok buku..." class="form-username form-control" id="form-username">
			                        </div>
                                    
                                    <button type="submit" name="submit" class="btn">Submit</button>
                                    <button class="btn"><a href="../index.php">Home</a></button>
                                    <hr>
			                    </form>
                                
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>