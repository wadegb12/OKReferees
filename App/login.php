<?php
   include(dirname(__FILE__). '/../StatusTable/DatabaseConnection.php');

  if(!isset($_SESSION)) {
    session_start();
  }
  
  $error=''; 
  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";

      //include(dirname(__FILE__). '/../DefaultViews/LoginModal.php');
    }
    else
    {
      $connection = connectToLocalDB();
      if(is_a($connection, 'mysqli')) {
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
          header("location: /../NavLinks/Home.php");
        } else {
            $error = "Username or Password is invalid";
        }
      }
      else {
        $error = "Cant connect to DB";
      }
      
    }
  }
  
?>
<!DOCTYPE html>
<html>
  <div id='modal'>
    <div class='modal-content'> 
      <span class="close">&times;</span>
      <div id="login">
        <h2>Login Form</h2>
        <form action="" method="post">
          <label>UserName :</label>
          <input id="name" name="username" type="text">
          <label>Password :</label>
          <input id="password" name="password" type="password">
          <input name="submit" type="submit" value=" Login ">
          <span> <?php echo $error; ?> </span>
        </form>
      </div>
    </div>
  </div>
</html>

