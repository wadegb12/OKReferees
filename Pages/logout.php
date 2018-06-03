<?php
  session_start();
  if(isset($_SESSION))
  {
    $_SESSION = [];
  }
  include 'Home.php'; 
?>
