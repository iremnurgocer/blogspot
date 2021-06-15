
<?php
include 'anasayfa.php';

?>

<div class=kullanici_bilgileri>
<?php
if(empty($_SESSION['kim'])){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
}
  else{

    $kim=$_SESSION['kim'];
    echo "<table width='%100'>";
    echo "<tr>";
  
    echo "<td > AD</td>";
    echo "<td > SOYAD </td>";
    echo "<td > E POSTA </td>";
    echo "<td > TELEFON </td>";
    echo "<td > KULLANICI ADI </td>";
  
    echo "<td  width='%5'> DÜZENLE </td>";
  
    echo "</tr>";
      $sonuc=mysqli_query($conn,"SELECT*FROM kullanicilar WHERE kKullaniciAdi='$kim'");
  while($satir=mysqli_fetch_array($sonuc))
  {echo "<form action='' method='POST'>";
    echo"<tr>";
    
    echo "<td align='center'>".$satir['kAdi']."</td>";
    echo "<td align='center'>".$satir['kSoyadi']."</td>";
    echo "<td align='center'>".$satir['kEposta']."</td>";
    echo "<td align='center'>".$satir['kTel']."</td>";
    echo "<td align='center'>".$satir['kKullaniciAdi']."</td>"; 

    echo "<td align='center'><a href='k_duzenle.php?islem_no=".$satir['id']."'><img src='admin/images/duzenle.png '></a></td>";
    
    echo"</tr>";
    
    echo "</form>"; 
 } } ?>
</div>
