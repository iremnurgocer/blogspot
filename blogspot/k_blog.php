<?php
include 'anasayfa.php';

?>

<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="index.php">Anasayfa</a></li>
      <li>&#187;</li>
      <li><a href="Profil.php">Profil</a></li>
      <li>&#187;</li>
      <li><a href="#">Blog</a></li>
    </ul>
  </div>
</div>

<div class="blog_yazilar">
<?php
$i=$_GET['islem_no'];
$sonuc=mysqli_query($conn,"SELECT*FROM bloglar WHERE id=$i");
$satir=mysqli_fetch_array($sonuc);
echo '<table >';
echo'<tr>';
echo '<td><a href="blog.php">';  
echo $satir['blog_baslık'].'<br>';
echo $satir['blog_metin'].'<br>';
echo $satir['blog_entry'].'<br>';
echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
echo $satir['blog_begeni_s'].' Beğeni'; 
echo '</a></td>'; 
echo'</tr>';
echo '</table>';
    
?>
</div>
