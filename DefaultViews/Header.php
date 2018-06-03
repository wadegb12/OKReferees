<?php
  $class = "material-icons loginIconSize";
 if(!isset($_SESSION)) {
    session_start();
  }
  
  if(!isset($_SESSION['login_user'])){
    $class .= ' loginLink';
  } 
?>

<div class="row header">
  <div class="col s2">
    <img class="logo"  src="/../Photos/Logo.png">
  </div>
  <div class="col s8">
    <div class="title "> Oklahoma Referees </div>
  </div>
  <div class="col s2">
    <i class=" <?php echo $class; ?> ">person</i>
  </div>
</div>

<div style="clear:both;"></div>
