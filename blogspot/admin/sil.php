<?php
include 'adminanasayfa.php';
$i=$_GET['islem_no'];
$sorgu=mysqli_query($conn,"DELETE FROM kullanicilar where id=$i");
$sorgu2=mysqli_query($conn,"DELETE FROM bloglar where blogyazar_id=$i");

echo '<script language="JavaScript">window.location.href="kullanicilaryonetim.php"</script>';
?>
