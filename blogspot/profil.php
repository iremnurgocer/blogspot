<?php
include 'anasayfa.php';
if(empty($_SESSION['kim'])){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
}
else{
  $kim=$_SESSION['kim'];
  $kid=$_SESSION['kid'];

  ?>
  <div class="wrapper">
    <div id="breadcrumb">
      <ul>
        <li class="first">You Are Here</li>
        <li>&#187;</li>
        <li><a href="index.php">Anasayfa</a></li>
        <li>&#187;</li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
    </div>
  </div>
  <div class=profil_menu >
    <table cellspacing="0" cellpadding="0">
      <tr>
        <td><form action="çıkış.php">
    <button><img src="admin/images/cıkıs.gif" style="width:30px;height:30px;" /></button>
  </form></td>
        <td></div class='duzenle'>
  <form action="duzenle.php" name='duzenle'>
    <input type="submit" Value="BİLGİLERİNİ GÜNCELLE" >
  </form>
  </div>
</td>
      </tr>
    </table>
  
  
  
  </div>
  
  
  <div class="blog_yazilar">
  <div class="orta">
  
  <div calss=yazilan_bloglar>
  <?php
  $sonuc=mysqli_query($conn,"SELECT*FROM bloglar WHERE blogyazar_id='$kid'");
  echo "<h1>YAZILAN BLOGLAR</h1>";
  while($satir=mysqli_fetch_array($sonuc))
  {
    
    echo '<form methot="POST" action="">';
    echo "<table >";
    echo'<tr>';
    $i=$satir['id'];
    echo "<td><a href='blog.php?islem_no=$i'>";  
    echo $satir['blog_baslık'].'<br>';
    echo $satir['blog_metin'].'<br>';
    echo $satir['blog_entry'].'<br>';
    echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
    echo $satir['blog_begeni_s'].' Beğeni'; 
    echo '</a></td>'; 
    echo "<td align='right'><a href='blogduzenle.php?islem_no=".$satir['id']."'><img src='admin/images/duzenle.png '></a> <br /><br><br>";
    echo "<a href='blogsil.php?islem_no=".$satir['id']."'><img src='admin/images/sil.png '></a></td>";
    echo'</tr>';
    echo '</table>';
    
    echo '</form>';
  
  }    
  
  ?>
  </div>
  
  
  
  
  <body class=blog_yaz>
   <?php
if(isset($_POST['submit1'])){
    $adi=$_POST['ad'];
    $entry=$_POST['entry'];
    $blogmetin=$_POST['blog_metni'];
    $tarih=getdate();
    $sql ="INSERT INTO bloglar (blog_baslık,blogyazar_id,blog_metin,blog_tarihi,blog_begeni_s,blog_entry) VALUES ('$adi','$kid','$blogmetin','$tarih','0','$entry')";
    $sonuc=mysqli_query($conn,$sql);
    echo "<script language='JavaScript'>window.location.href='profil.php'</script>";
    echo 'İşlem Başarılı';
    
}

?> 
  <div class="container1">
  <form id="contact1" action="Profil.php" method="POST">
  <h2>BLOG OLUŞTUR</h2>
  <div class="form-control1">
  <input placeholder="BLOG BAŞLIĞI" name='ad' type="text" required>
  </div>
  <div class="form-control1">
  <input placeholder="#ENTRY" name='entry' type="text" required>
  </div>
  <div class="form-control1">
  <textarea placeholder="BLOG METNİNİZ.." name='blog_metni' required></textarea>
  </div>
  <div class="form-control1">
  <button name="submit1" type="submit" id="submit">GÖNDER</button>
  </div>
  </form>
  </div>
  </body>
  
<?php
}?>
</div>