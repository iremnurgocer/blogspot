<?php
session_start();
unset($_SESSION['kim']);
echo "<script language='JavaScript'>window.location.href='index.php'</script>";
?>