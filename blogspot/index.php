<?php
include 'anasayfa.php';

?>
<div class='anasayfa'>

<?php
$sonuc=mysqli_query($conn,'SELECT*FROM bloglar order by blog_begeni_s ASC limit 0,6');
  while($satir=mysqli_fetch_array($sonuc))
  {?>
<div class="block"><strong><?php echo $satir['blog_baslık']; ?></strong>
<p>
  <?php
    echo '<form methot="POST" action="">';
    echo "<table >";
    $i=$satir['id'];
    echo"<tr ><a href='blog.php?islem_no=$i'>";
    echo $satir['blog_metin'].'<br>';
    echo $satir['blog_entry'].'<br>';
    echo 'Yayın Tarihi '.$satir['blog_tarihi'].'<br>';
    echo $satir['blog_begeni_s'].' Beğeni'; 
    echo '</a></td>'; 
    echo'</tr>';
    echo '</table>';
    echo '</form>';
    ?></p>
  </div>
<?php
}
?>

</div>
  
<!-- ####################################################################################################### -->
<div class="dipnot">
  
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
</div>