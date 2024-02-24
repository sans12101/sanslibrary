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
                            <h1><strong>Pinjam</strong> BUkU </h1>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Peminjaman Buku</h3>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form action="proses_pinjam.php" method="post" class="login-form">
                                <div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
                                        <h5>Username</h5>
			                        	<select name="UserID" id="from-control">
                                        <?php
                                        $kat = mysqli_query($koneksi,"SELECT * FROM user");
                                        while ($kategori = mysqli_fetch_array($kat)){
                                        ?>
                                        <option value="<?php echo $kategori['UserID'];?>"><?php echo $kategori['Username'];?></option>
                                        <?php
                                        }?>
                                        </select>
			                        </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Judul</label>
                                        <h5>Judul</h5>
			                        	<select name="BukuID" id="from-control">
                                        <?php
                                        $kat = mysqli_query($koneksi,"SELECT * FROM buku");
                                        while ($kategori = mysqli_fetch_array($kat)){
                                        ?>
                                        <option value="<?php echo $kategori['BukuID'];?>"><?php echo $kategori['Judul'];?></option>
                                        <?php   
                                        }?>
                                        </select>
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Jumlah Pinjam</label>
                                        <h5>Jumlah Pinjam</h5>
			                        	<input type="number" name="JumlahPinjam" placeholder="Jumlah buku..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div  class="form-group">
			                        <label class="sr-only" for="form-username">Status Pinjam</label>
                                        <h5>Status Pinjam</h5>
			                        	<select name="status">
                                            <option value="dipinjam">dipinjam</option>
                                        </select>
			                        </div>
                                    
                                    <button type="submit" name="submit" class="btn">Pinjam</button>
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