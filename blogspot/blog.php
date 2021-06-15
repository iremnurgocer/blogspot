<?php
include 'anasayfa.php';
?>
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="index.php">Anasayfa</a></li>
      <li>&#187;</li>
      <li><a href="bloglar.php">Bloglar</a></li>
      <li>&#187;</li>
      <li><a href="3">Blog</a></li>
    </ul>
  </div>
</div>

<div class="blog_yazilar">
<?php
$i=$_GET['islem_no'];
$sonuc=mysqli_query($conn,"SELECT*FROM bloglar WHERE id=$i");
$satir=mysqli_fetch_array($sonuc);
echo '<table >';
echo'<tr>';
echo "<td><a href='blog.php?islem_no=$i'>";  
echo $satir['blog_baslık'].'<br>';
echo $satir['blog_metin'].'<br>';
echo $satir['blog_entry'].'<br>';
echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
echo $satir['blog_begeni_s'].' Beğeni'; 
echo '</a></td>'; 
echo'</tr>';
echo '</table>';
    
?>
</div>

<div class="yorumlar">
  <hr />
  <h1>YORUMLAR</h1>
  
  <?php
  if(isset($_SESSION['kim'])){
          ?>
      <div class=yorum_yap>

      <body class=blog_yaz>
        <?php
      if(isset($_POST['submit1'])){
        $blog_id=$_GET['islem_no'];
          $yorum=$_POST['yorum'];
          $kim=$_SESSION['kim'];
          $sonuc3=mysqli_query($conn,"SELECT*FROM kullanicilar WHERE kKullaniciAdi='$kim'");
      $satir3=mysqli_fetch_array($sonuc3);
      $kullanici_id=$satir3['id'];
          $tarih=date('d.m.Y H:i:s');
          $sql3 ="INSERT INTO yorumlar (blog_id,yorum_yapan_id,yorum,yorum_tarih) VALUES ('$blog_id','$kullanici_id','$yorum','$tarih')";
          $sonuc=mysqli_query($conn,$sql3);
          echo "<script language='JavaScript'>window.location.href='blog.php?islem_no=$i'</script>";
          echo 'İşlem Başarılı';
          
      }
      else{

        $i=$_GET['islem_no']; ?>
        <div class="container1">
        <form id="contact1" action="<?php echo "blog.php?islem_no=$i" ?>" method="POST">
        <div class="form-control1">
        <textarea placeholder="YORUM.." name='yorum' required></textarea>
        </div>
        <div class="form-control1">
        <button name="submit1" type="submit">GÖNDER</button>
        </div>
        </form>
        </div>
        </body>
      
      <?php 
      } ?>

      </div>
    <?php
  }
  else{

  }
?>

  <div class="yorum">
  <?php
  

  
  $sonuc=mysqli_query($conn,"SELECT*FROM yorumlar WHERE blog_id=$i");
  
while($satir=mysqli_fetch_array($sonuc)){

  if(isset($satir)){
    $yi=$satir['id'];
  $yyi=$satir['yorum_yapan_id'];
  $yorum=$satir['yorum'];
  $tarih=$satir['yorum_tarih'];
  $sonuc2=mysqli_query($conn,"SELECT*FROM kullanicilar WHERE id=$yyi");
  $satir2=$satir=mysqli_fetch_array($sonuc2);
  $yorum_yapan_kisi=$satir2['kKullaniciAdi'];
  echo '<table >';
echo'<tr>';
echo "<td><a href='yorum.php?islem_no=$yi'>";  
echo $yorum_yapan_kisi.'<br>';
echo $yorum.'<br>';
echo 'Yayın Tarihi '.$tarih;
echo '</a></td>'; 
echo'</tr>';
echo '</table>';
  }
  else{
    echo "Yorum yok.";
  }
}
?>
  </div>
  
</div>
