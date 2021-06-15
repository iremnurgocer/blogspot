
<?php
include 'adminanasayfa.php';
?>
  <div class="orta">
  <h1>KULLANICILAR</h1>
  <table>
 <tr>
 <td> İD </td>
 <td> AD</td>
 <td> SOYAD </td>
 <td> E POSTA </td>
 <td> TELEFON </td>
 <td> KULLANICI ADI </td>
 <td> ŞİFRE </td>
 <td> DÜZENLE </td>
 <td > sil </td>
 </tr>
 
 
<?php
$sonuc=mysqli_query($conn,'SELECT*FROM kullanicilar');
 
  while($satir=mysqli_fetch_array($sonuc))
  {
    echo"<tr>";
    echo"<td align='center'>".$satir['id']."</td>";
    echo "<td align='center'>".$satir['kAdi']."</td>";
    echo "<td align='center'>".$satir['kSoyadi']."</td>";
    echo "<td align='center'>".$satir['kEposta']."</td>";
    echo "<td align='center'>".$satir['kTel']."</td>";
    echo "<td align='center'>".$satir['kKullaniciAdi']."</td>"; 
    echo"<td align='center'>".$satir['kSifre']."</td>";
    echo "<td align='center'><a href='duzenle.php?islem_no=".$satir['id']."'><img src='images/duzenle.png '></a></td>";
    echo "<td align='center'><a href='sil.php?islem_no=".$satir['id']."'><img src='images/sil.png '></a></td>";
    echo"</tr>";
  }    
  ?>
</table>
<center>
<a href='ekle.php'><img src='images/ekle.png '></a>
</center>
</div>
<div class="dipnot">
dipnot
</div>
