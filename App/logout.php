<?php
  session_start();
  if(isset($_SESSION))
  {
    $_SESSION = [];
  }
  header('Location: /../NavLinks/Home.php'); 
?>
