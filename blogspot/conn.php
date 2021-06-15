<?php
$conn=mysqli_connect("localhost","irem","12345","blogspot");
if(mysqli_connect_errno()){
    echo 'Bağlantı başarısız '.mysqli_connect_error();
    die();
}
mysqli_query($conn,"SET NAMES 'utf8'")
?>