<?php
  session_start();
  unset($_SESSION['usrname']);
  session_destroy(); 
  echo "<script language=Javascript> location.href=\"".LOGOUT."\"; </script>";
?>
