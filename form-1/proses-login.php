///<?php
session_start();
include "../koneksi.php";

$username = $_POST['Username'];
$password = md5($_POST['Password']);

//cek data
$sql = "SELECT * FROM user WHERE Username='$username' ";
$qry = mysqli_query($koneksi, $sql);
$usr = mysqli_fetch_array($qry);

if(
    md5($username) == md5($usr['Username'])
    AND
    md5($password) == md5($usr['Password'])
)
{
    $_SESSION['UserID'] = $usr['UserID'];
    $_SESSION['level'] = $usr['level'];
    $_SESSION['user'] = true;
    $_SESSION['Username'] = $usr['Username'];
    $_SESSION['Password'] = $usr['Password'];
    $pesan = "Login Berhasil, Selamat datang $username";
} 
else {
    $pesan1 = "Login gagal, username atau password anda salah";
}
?>
<script>
    alert('<?php echo $pesan;?>');
    location='../index.php';
</script>
<script>
    alert('<?php echo $pesan1;?>');
    location='login.php';
</script>
