<?php
include 'adminanasayfa.php';
$i=$_GET['islem_no'];
$sorgu=mysqli_query($conn,"DELETE FROM bloglar where id=$i");
echo '<script language="JavaScript">window.location.href="bloglaryonetim.php"</script>';
?>
