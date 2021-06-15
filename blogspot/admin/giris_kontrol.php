
<?php
session_start();
$admin=$_SESSION['admin'];
include '../conn.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>Admin Giriş</title>
    <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="../index.php">BLOGSPOT</a></h1>
    <p>Admin Girişi</p>
  </div>
</div>
</body>
<body>
  <div>
  <center>
  <?php
  $u=@$_POST['yKAdi'];
  $v=@$_POST['ySifre'];
  if(!isset($u) or !isset($v)){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
  }
  elseif($u=='' or $v==''){
    echo 'Kullanıcı adı veya şifre boş bırakılamaz! <br>';
    echo 'Giriş için <a href="admingiris.php">TIKLAYINIZ</a>';
  }
  else{
    $sorgu=mysqli_query($conn,"SELECT*FROM yonetici WHERE yKAdi='$u'");
    $satir=mysqli_fetch_array($sorgu);
    $s2=$satir['ySifre'];
    $s=md5($v);
    if($s!=$s2){
      echo 'Kullanıcı adı veya şifre yanlış! <br>';
      echo 'Tekrar denemek için <a href="admingiris.php">TIKLAYINIZ</a>';
    }
    else{
      $_SESSION['admin']=$u;
      echo "<script language='JavaScript'>";
  echo "window.location.href='adminindex.php'";
  echo "</script>";
    }
  }

  ?>
  </center>
  
  
  </div>
</body>

</html>



