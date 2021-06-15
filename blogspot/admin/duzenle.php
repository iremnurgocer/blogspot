
<?php
include 'adminanasayfa.php';

?>
<?php
include ('../conn.php');
if(isset($_POST['submit'])){
    $adi=$_POST['ad'];
    $sadi=$_POST['soyad'];
    $eposta=$_POST['eposta'];
    $tel=$_POST['tel'];
    $kadi=$_POST['kadi'];
    $kid=$_POST['kayit_id'];
    $sql1 ="update kullanicilar set 
            kAdi='$adi',
            kSoyadi='$sadi',
            kEposta='$eposta',
            kTel='$tel',
            kKullaniciAdi='$kadi' WHERE id='$kid'";
            echo $sql1;
    $sorgu=mysqli_query($conn,$sql1);
    echo "<script language='JavaScript'>window.location.href='kullanicilaryonetim.php'</script>";
}
else{
$i=$_GET['islem_no'];
$sql =("SELECT*FROM kullanicilar where id=$i");
$sonuc=mysqli_query($conn,$sql);
$satir=mysqli_fetch_array($sonuc);

?>
<div class="orta">
<form name="kullanici_duzenle" method="post" action="duzenle.php">
<h1>KULLANICI DÜZENLE</h1>
<table>
 <tr>
 <td> AD</td>
 <td><input type="text" name=ad VALUE="<?php echo $satir['kAdi'] ?>"> </td>
 </tr>
 <tr>
 <td>SOYAD</td>
 <td><input type="text" name=soyad VALUE="<?php echo $satir['kSoyadi'] ?>"> </td>
 </tr>
 <tr>
 <td>E POSTA</td>
 <td><input type="text" name=eposta VALUE="<?php echo $satir['kEposta'] ?>"> </td>
 </tr>
 <tr>
 <td>TEL</td>
 <td><input type="text" name=tel VALUE="<?php echo $satir['kTel'] ?>"> </td>
 </tr>
 <tr>
 <td>KULLANICI ADI</td>
 <td><input type="text" name=kadi VALUE="<?php echo $satir['kKullaniciAdi'] ?>"> </td>
 </tr>
 
 <td cosplan=2 align="right"><input type="hidden" name=kayit_id Value=" <?php echo $i ?>"> </td><tr>
 <td cosplan=2 align="right"><input type="submit" name=submit Value="Düzenle"> </td>
 </tr>
</table>
</div>
</form>
<?php } ?>
<div class="dipnot">
dipnot
</div>