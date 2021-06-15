<?php
session_start();
if(empty($_SESSION['admin'])){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
}

?>