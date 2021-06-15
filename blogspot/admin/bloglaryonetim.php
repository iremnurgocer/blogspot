
<?php
include 'adminanasayfa.php';
?>
  <div class="orta">
  <h1>Bloglar</h1>
 <div class='blog_yazilar'>
   

 <?php
$sonuc=mysqli_query($conn,'SELECT*FROM bloglar');
 
  while($satir=mysqli_fetch_array($sonuc))
  {
    $kid=$satir['blogyazar_id'];
    $kadi=mysqli_query($conn,"SELECT kKullaniciAdi FROM kullanicilar WHERE id='$kid'");
    $satir2=mysqli_fetch_array($kadi);
    echo '<form methot="POST" action="">';
    $id=$satir['id'];
    
    echo '<table >';
    echo'<tr>';
    echo '<td>';  
    echo 'Kullanıcı adı '.$satir2['kKullaniciAdi'].'<br>';
    echo $satir['blog_baslık'].'<br>';
    echo $satir['blog_metin'].'<br>';
    echo $satir['blog_entry'].'<br>';
    echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
    echo $satir['blog_begeni_s'].' Beğeni'; 
    echo '</td>'; 
    echo "<td align='right'><a href='blogduzenle.php?islem_no=".$satir['id']."'><img src='images/duzenle.png '></a> <br /><br><br>";
    echo "<a href='blogsil.php?islem_no=".$satir['id']."'><img src='images/sil.png '></a></td>";
    echo'</tr>';
    echo '</table>';
    
    echo '</form>';
    
    
   
  }    
  ?>

</div>
 </div>
 
<div class="dipnot">
dipnot
</div>
