
<!DOCTYPE html>
  <html>
    <head>
      <link type="text/css" rel="Stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"/>
      <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
      <link type="text/css" rel="stylesheet" href="../Includes/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../Includes/CSS/default.css">
      <link type="text/css" rel="stylesheet" href="../Includes/CSS/datatables.min.css"/>
      <link type="text/css" rel="stylesheet" href="../Includes/CSS/Utilities.css">
    </head>

    <body>

      <div class="hide-on-med-and-down">
        <?php 
            include(dirname(__FILE__). '/header.php');
            include(dirname(__FILE__). '/navBar.php');
        ?>
        
        <div id='modal'>
          <div class='modal-content'> 
            <span class="close">&times;</span>
            
            <h2 class='center'>Admin Login</h2>
            <div class='center'> 
              <label>UserName :</label>
              <input id="name" name="username" type="text">
            </div>
            <div class='center'>
              <label>Password :</label>
              <input id="password" name="password" type="password">
            </div>
            <div class='center'>
              <button id='login' class = 'loginButton' name="submit"> Login</button>
            </div>
          </div>
        </div>

      </div>

      <div class="hide-on-large-only">
          Please enlarge the screen.
      </div>

    </body>

    <footer>
      <div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../Includes/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="../Includes/JS/default.js"></script>
        <script type="text/javascript" src="../Includes/JS/datatables.min.js"></script>
        <script type="text/javascript" src="../Includes/JS/StatusTable.js"></script>
        <script type="text/javascript" src="../Includes/JS/StatusQueries.js"></script>
        
        
      <div>
    </footer>
  </html>
