<?php
session_start();
$kim=$_SESSION['kim'];
include 'conn.php';
?>
<?php
if(isset($_POST['submit'])){
    $adi=$_POST['kAdi'];
    $sadi=$_POST['kSoyad'];
    $eposta=$_POST['kEposta'];
    $tel=$_POST['kTel'];
    $kadi=$_POST['kKullaniciAdi'];
    $s=$_POST['kSifre'];
    $sifre=md5($s);
    $_SESSION['kim']=$kadi;
    $sql ="INSERT INTO kullanicilar (kAdi,kSoyadi,kEposta,kTel,kKullaniciAdi,kSifre,kTakipci_sayisi) VALUES ('$adi','$sadi','$eposta','$tel','$kadi','$sifre','0')";
    $sonuc=mysqli_query($conn,$sql);
    echo "işlem başarılı";
}
else{
  echo "<script language='JavaScript'>window.location.href='hata.php'</script>";
}
?>
    