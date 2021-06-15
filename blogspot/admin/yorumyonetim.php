
<?php
include 'adminanasayfa.php';

include ('../conn.php');
?>


<div class="orta">
  <?php
  $sonuc=mysqli_query($conn,"SELECT*FROM yorumlar");
  
while($satir=mysqli_fetch_array($sonuc)){

  if(isset($satir)){
    $yi=$satir['id'];
  $yyi=$satir['yorum_yapan_id'];
  $yorum=$satir['yorum'];
  $tarih=$satir['yorum_tarih'];
  $sonuc2=mysqli_query($conn,"SELECT*FROM kullanicilar WHERE id=$yyi");
  $satir2=$satir=mysqli_fetch_array($sonuc2);
  $yorum_yapan_kisi=$satir2['kKullaniciAdi'];
  echo "<form action='yorumyonetim.php' method='POST'>";
  echo '<table >';
  echo'<tr>';
  echo "<td>";  
  echo $yorum_yapan_kisi.'<br>';
  echo $yorum.'<br>';
  echo 'Yayın Tarihi '.$tarih;
  echo '</td>'; 
  echo "<td align='center'><a href='yorum_duzenle.php?islem_no=".$yi."'><img src='images/duzenle.png '></a></td>";
  echo "<td align='center'><a href='yorum_sil.php?islem_no=".$yi."'><img src='images/sil.png '></a></td>";

  echo'</tr>';
  echo '</table>';
  
  echo "</form>";
  }
  else{
    echo "Yorum yok.";
  }
}
?>
  </div>
