<?php
include "../koneksi.php";
if(isset($_GET["BukuID"])){
    $id=$_GET["BukuID"];

    $query=mysqli_query($koneksi,"DELETE FROM buku WHERE BukuID='$id'");
}
?>
<script>
alert("hapus berhasil");
location.href = "../buku.php";
</script> 