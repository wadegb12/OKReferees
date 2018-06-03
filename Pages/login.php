<?php
  
  if(!isset($_SESSION)) {
    session_start();
  }
  
  $error=''; 
  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";
    }
    else
    {
      $connection = new mysqli("localhost:3306", "root", "Anorakleet12", "local_referee_tracking");

      $username=$_POST['username'];
      $password=$_POST['password'];
      $username = stripslashes($username);
      $password = stripslashes($password);
      // $username = mysql_real_escape_string($username);
      // $password = mysql_real_escape_string($password);

      $query = "SELECT * FROM login_validator WHERE password='$password' AND username='$username'";
      $rows = $connection->query($query);

      if ($rows) {
        $_SESSION['login_user']=$username;
        header("location: Home.php");
      } else {
          $error = "Username or Password is invalid";
      }
    }
  }
  

?>
<!DOCTYPE html>
<html>
  <head>
  <title>Login Form in PHP with Session</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div id="main">
  <h1>PHP Login Session Example</h1>
  <div id="login">
  <h2>Login Form</h2>
  <form action="" method="post">
  <label>UserName :</label>
  <input id="name" name="username" placeholder="username" type="text">
  <label>Password :</label>
  <input id="password" name="password" placeholder="**********" type="password">
  <input name="submit" type="submit" value=" Login ">
  <span> <?php echo $error; ?>
  </span>
  </form>
  </div>
  </div>
  </body>
</html>

