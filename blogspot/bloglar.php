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
    </ul>
  </div>
</div>

<div class="blog_yazilar">
  
<div class="orta">

<?php
$sonuc=mysqli_query($conn,'SELECT*FROM bloglar order by id DESC');
 
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
    echo'</tr>';
    echo '</table>';
    
    echo '</form>';
  
  }    
  ?>
</div>
  

</div>


  


