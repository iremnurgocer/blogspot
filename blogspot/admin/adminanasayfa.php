
<?php
include 'ses_kontrol.php';
$admin=$_SESSION['admin'];
include ('../conn.php');
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="style/admincss.css" type="text/css" />
</head>
<body>
  

<div class="Admin_sayfasi">
  
    <div class="sol">
  <center>
  <h1> <a href="adminindex.php"> Hoş geldin <?php echo $admin; ?></a></h1>

  
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
      <li class="kullanicilaryonetim"><a href="kullanicilaryonetim.php">Kullanıcılar Yönetim</a></li>
      <li class="bloglaryonetim"><a href="bloglaryonetim.php">Bloglar Yönetim</a></li>
      <li class="yorumyonetim"><a href="yorumyonetim.php">Yorum Yönetim</a></li>
    </ul>
    
    <div class="clear"></div>
  </div>
  <a href="cıkıs.php" align="right"><img src="images/cıkıs.gif" style="width:30px;height:30px;"></a>
</div>
  </center>
  </div>
  
</body> 

</html>



