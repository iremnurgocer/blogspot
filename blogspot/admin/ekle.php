
<?php
include 'adminanasayfa.php';
include '../conn.php'
?>
<?php
if(isset($_POST['submit'])){
    $adi=$_POST['ad'];
    $sadi=$_POST['soyad'];
    $eposta=$_POST['eposta'];
    $tel=$_POST['tel'];
    $kadi=$_POST['kadi'];
    $s=$_POST['sifre'];
    $sifre=md5($s);
    $sonuc=mysqli_query($conn,"INSERT INTO kullanicilar(kAdi,kSoyadi,kEposta,kTel,kKullaniciAdi,kSifre) VALUES ('$adi','$sadi','$eposta','$tel','$kadi','$sifre')");
    echo 'İşlem Başarılı';
    
}
?>
    

<div class="orta">
<form name="kullanici_ekle" method="post" action="ekle.php">
<h1>KULLANICI Ekle</h1>
<table>
 <tr>
 <td> AD</td>
 <td><input type="text" name=ad> </td>
 </tr>
 <tr>
 <td>SOYAD</td>
 <td><input type="text" name=soyad> </td>
 </tr>
 <tr>
 <td>E POSTA</td>
 <td><input type="text" name=eposta> </td>
 </tr>
 <tr>
 <td>TEL</td>
 <td><input type="text" name=tel> </td>
 </tr>
 <tr>
 <td>KULLANICI ADI</td>
 <td><input type="text" name=kadi> </td>
 </tr>
 <tr>
 <td> ŞİFRE</td>
 <td><input type="PASSWORD" name=sifre> </td>
 </tr>
 <td cosplan=2 align="right"><input type="submit" name=submit Value="Ekle"> </td>
 </tr>
</table>
</div>
</form>


<div class="dipnot">
dipnot
</div>