<?php
include "../koneksi.php";
if(isset($_GET["UlasanID"])){
    $id=$_GET["UlasanID"];

    $query=mysqli_query($koneksi,"DELETE FROM ulasanbuku WHERE UlasanID='$id'");
}
?>
<script>
alert("hapus berhasil");
location.href = "tampilan_ulasan.php";
</script> 