<?php
  include 'Default.php';
  include 'DefaultViews\defaultDataTable.php';
  include 'StatusTable/StatusQueries.php';

  $conn = connectToLocalDB();
  $rows = get7Data($conn);
  if ($rows != null) {
    echo createDataTable($rows);
  }
?>

<div class="container grayBackground hide-on-med-and-down">
  <script type="text/javascript" src="/../JS/StatusTable.js"></script>

</div>
