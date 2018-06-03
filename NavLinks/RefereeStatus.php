<?php
  include(dirname(__FILE__). '/../DefaultViews/Default.php');
  include(dirname(__FILE__). '/../DefaultViews/defaultDataTable.php');
  include(dirname(__FILE__). '/../StatusTable/StatusQueries.php');
  
  $user = "";
  if(isset($_SESSION['login_user'])){
    $user = $_SESSION['login_user'];
  }

  $conn = connectToLocalDB();
  $rows = get7Data($conn);
  if ($rows != null) {
    $table = createDataTable($rows);
  }
?>

<div class="container grayBackground hide-on-med-and-down containerPadding">
    <div>
      <?php
        if($user != "") {
          echo $user;
        }
        if($table != null) {
          echo $table;
        }
      ?>
    </div>
</div>
