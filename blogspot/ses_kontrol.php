<?php
session_start();
if(empty($_SESSION['kim'])){
  echo "<script language='JavaScript'>";
  echo "window.location.href='hata.php'";
  echo "</script>";
}

?>