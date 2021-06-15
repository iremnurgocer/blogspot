<?php
include 'adminanasayfa.php';
$yi=$_GET['islem_no'];
$sorgu=mysqli_query($conn,"DELETE FROM yorumlar where id='$yi'");

echo '<script language="JavaScript">window.location.href="yorumyonetim.php"</script>';
?>
