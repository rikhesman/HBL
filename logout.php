<?php
  session_start();
  session_destroy();   // function die de sessie verbreekt 
  header("Location: index.php");
?>
