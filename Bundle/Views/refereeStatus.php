<?php
  //include(dirname(__FILE__). '/../DefaultViews/Default.php');
  //include_once(dirname(__FILE__). '/../StatusTable/StatusQueries.php');
  
  $remove = "this is where you will edit values on the table below";
  $user = "";
  $table = "";
  $tableInfo = "";
  // if(isset($_SESSION['login_user'])){
  //   $user = $_SESSION['login_user'];
  // }

  // $conn = connectToDB();
  // if(is_a($conn, 'mysqli')) {
  //   $table = getTable($conn);
  // }
  // else {
  //   $table = getBlankTable();
  //   $tableInfo = "Failed to connect to database";
  // }
?>

<?php 
  include(dirname(__FILE__). '/default.php');
?>

<div class="container grayBackground hide-on-med-and-down containerPadding">
    <div>
      <?php
        if($user != "") {
          echo '<div> Username: ' . $user . '</div>';
          echo '<div>' . $remove . '</div>';
          echo '<br>';
        }
        if($tableInfo != "") {
          echo $tableInfo;
        }
        if($table != "") {
          echo $table;
        }
      ?>
    </div>
</div>
