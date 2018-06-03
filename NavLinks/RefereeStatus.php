<?php
  include(dirname(__FILE__). '/../DefaultViews/Default.php');
  include(dirname(__FILE__). '/../DefaultViews/defaultDataTable.php');
  include(dirname(__FILE__). '/../StatusTable/StatusQueries.php');
  
  $remove = "this is where you will edit values on the table below";
  $user = "";
  $table = "";
  if(isset($_SESSION['login_user'])){
    $user = $_SESSION['login_user'];
  }

  $conn = connectToLocalDB();
  if(is_a($conn, 'mysqli')) {
    $table = getTable($conn);
  }
  else {
    $table = "Failed to connect to database";
  }
?>

<div class="container grayBackground hide-on-med-and-down containerPadding">
    <div>
      <?php
        if($user != "") {
          echo '<div> Username: ' . $user . '</div>';
          echo '<div>' . $remove . '</div>';
          echo '<br>';
        }
        if($table != "") {
          echo $table;
        }
      ?>
    </div>
</div>
