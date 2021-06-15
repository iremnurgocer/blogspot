
<?php
include 'adminanasayfa.php';

?>
<?php
include ('../conn.php');
if(isset($_POST['submit'])){
    $adi=$_POST['blog_baslık'];
    $metin=$_POST['blog_metin'];
    $entry=$_POST['blog_entry'];
    $bid=$_POST['düzen_id'];
    $sql1 ="UPDATE bloglar SET 
            blog_baslık='$adi',
            blog_metin='$metin',
            blog_entry='$entry' WHERE id='$bid'";
            echo $sql1;
    $sorgu=mysqli_query($conn,$sql1);
    echo "<script language='JavaScript'>window.location.href='bloglaryonetim.php'</script>";
}
else{
$i=$_GET['islem_no'];
$sql =("SELECT*FROM bloglar where id=$i");
$sonuc=mysqli_query($conn,$sql);
$satir=mysqli_fetch_array($sonuc);

?>
<div class="orta">
<form name="blog_duzenle" method="post" action="blogduzenle.php">
<h1>BLOG DÜZENLE</h1>
<table>
 <tr>
 <td>BLOG BAŞLIK</td>
 <td><input type="text" name=blog_baslık VALUE="<?php echo $satir['blog_baslık'] ?>"> </td>
 </tr>
 <tr>
 <td>ENTRY</td>
 <td><input type="text" name=blog_entry VALUE="<?php echo $satir['blog_entry'] ?>"> </td>
 </tr>
 <tr>
 <td>BLOG METİN</td>
 <td><TEXTarea  type="textarea" name='blog_metin' ><?php echo $satir['blog_metin'] ?></TEXTarea></td>
 </tr>
 <tr>
 <td cosplan=2 align="right"><input type="hidden" name='düzen_id' Value=" <?php echo $i ?>"> </td><tr>
 <td cosplan=2 align="right"><input type="submit" name='submit' Value="Düzenle"> </td>
 </tr>
</table>
</div>
</form>
<?php } ?>
<div class="dipnot">
dipnot
</div>