<?php
session_start();
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
window.onload = startTime;
function startTime()
{
 var today=new Date();
 var h=today.getHours();
 var m=today.getMinutes();
 var s=today.getSeconds();

 h=checkTime(h);
 m=checkTime(m);
 s=checkTime(s);
 document.getElementById('saat').innerHTML=h+":"+m+":"+s;
 t=setTimeout('startTime()',1000);
}

function checkTime(i)
{
if (i<10)
 {
  i="0" + i;
 }
return i;
}
</script>
<!DOCTYPE html PUBLIC lang="tr">

<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

<title>BLOGSPOT</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
<!-- / Superfish Menu -->
</head>
<body id="top">
<?php
include 'conn.php';
?>
<div class="wrapper">
  <div id="header">
    <h1><a href="index.php">BLOGSPOT</a></h1>
    <p>Free Blog Platform</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
<div id="topbar">
    <div class="fl_left">HOŞGELDİN saat: <p id="saat"></p></div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li class="blog"><a href="bloglar.php">bloglar</a></li>
      <li><a href="entry.php">#entry</a>
        <ul>
          <?php
          $sonuc=mysqli_query($conn,"SELECT DISTINCT blog_entry FROM bloglar");
          while($satir=mysqli_fetch_array($sonuc))
          {$entry=$satir['blog_entry'];

          ?>
              <li class="entry"><a href="<?php echo "entry.php?islem_ad=$entry"?>"><?php echo $satir['blog_entry'] ?></a></li>
          <?php 
          } ?>
        </ul>
      </li>
      <li><a href="gundem.php">Gündem</a></li>
      <li class="last"><a href="kesfet.php">Keşfet</a></li>
      <?php
      if(empty($_SESSION['kim'])){
        echo "<li><a href='giris.php'>GİRİŞ/ÜYE OL</a></li>";
      }
      else{
        $kim=$_SESSION['kim'];
        echo "<li><a href='Profil.php'>".$kim."</a></li>";
      }
      ?>
      
    </ul>
    
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>