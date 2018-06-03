<?php
  if(isset($_SESSION['login_user'])) {
    
    $connection = new mysqli("localhost:3306", "root", "Anorakleet12", "local_referee_tracking");
    $user_check = ($_SESSION['login_user']);

    $sql = "SELECT username FROM login_validator WHERE username='$user_check'";
    $login_session = $connection->query($sql);
  }
  
?>
