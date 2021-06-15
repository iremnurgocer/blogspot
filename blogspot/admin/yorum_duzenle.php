
<?php
include 'adminanasayfa.php';

?>
<?php
include ('../conn.php');
if(isset($_POST['submit'])){
    $yorum=$_POST['yorum'];
    $yid=$_POST['düzen_id'];
    $sql1 ="UPDATE yorumlar SET 
            yorum='$yorum' WHERE id='$yid'";
            
    $sorgu=mysqli_query($conn,$sql1);
    echo "<script language='JavaScript'>window.location.href='yorumlaryonetim.php'</script>";
}
else{
$i=$_GET['islem_no'];
$sql =("SELECT*FROM yorumlar where id=$i");
$sonuc=mysqli_query($conn,$sql);
$satir=mysqli_fetch_array($sonuc);

?>
<div class="orta">
<form name="yorum_duzenle" method="post" action="yorum_duzenle.php">
<h1>BLOG DÜZENLE</h1>
<table>
 <tr>
 <td>YORUM</td>
 <td><TEXTarea  type="textarea" name='yorum' ><?php echo $satir['yorum'] ?></TEXTarea></td>
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