<?php
session_start();
unset($_session['admin']);
echo "<script language='JavaScript'>window.location.href='admingiris.php'</script>";
?>
