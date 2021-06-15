<?php
session_start();
@$kim=$_SESSION['kim'];
@$kid=$_SESSION['kid'];
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>Kullanıcı Girişi</title>
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="index.php">BLOGSPOT</a></h1>
    <p>Kullanıcı Girişi</p>
  </div>
</div>
</body>
<body>
  <div>
  <center>
  <?php
  $u=@$_POST['kKullaniciAdi'];
  $v=@$_POST['kSifre'];
  if(!isset($u) or !isset($v)){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
  }
  elseif($u=='' or $v==''){
    echo 'Kullanıcı adı veya şifre boş bırakılamaz! <br>';
    echo 'Giriş için <a href="giris.php">TIKLAYINIZ</a>';
  }
  else{
    $sorgu=mysqli_query($conn,"SELECT*FROM kullanicilar WHERE kKullaniciAdi='$u'");
    $satir=mysqli_fetch_array($sorgu);
    @$s2=$satir['kSifre'];
    $s=md5($v);
    if($s2!=$s){
      echo 'Kullanıcı adı veya şifre yanlış! <br>';
      echo 'Tekrar denemek için <a href="giris.php">TIKLAYINIZ</a>';
    }
    else{
      $_SESSION['kim']=$u;
      $_SESSION['kid']=$satir['id'];
      echo "<script language='JavaScript'>";
  echo "window.location.href='index.php'";
  echo "</script>";
    }
  }

  ?>
  </center>
  
  
  </div>
</body>

</html>



