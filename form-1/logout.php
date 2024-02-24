<?php
session_start();
session_destroy();
?>
<script>
    alert('logout berhasil');
    location= '../index.php';
</script>
