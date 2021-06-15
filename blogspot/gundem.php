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
      <li><a href="gundem.php">Gündem</a></li>
    </ul>
  </div>
</div>
<div class="blog_yazilar">
<?php
$sonuc=mysqli_query($conn,"SELECT blog_entry FROM bloglar GROUP BY blog_entry HAVING COUNT(*)>1");
while($satir1=mysqli_fetch_array($sonuc))
  {
    $bentry=$satir1['blog_entry'];
    
    $sorgu4=mysqli_query($conn,"SELECT*FROM bloglar Where blog_entry='$bentry'");
    while($satir=mysqli_fetch_array($sorgu4)){

      $id=$satir['id'];
      echo '<table >';
      echo'<tr>';
      echo "<td><a href='blog.php?islem_no=$id'>";  
      echo $satir['blog_baslık'].'<br>';
      echo $satir['blog_metin'].'<br>';
      echo $satir['blog_entry'].'<br>';
      echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
      echo $satir['blog_begeni_s'].' Beğeni'; 
      echo '</a></td>'; 
      echo'</tr>';
      echo '</table>';
    }
  }    

?>
</div>