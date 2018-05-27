<?php
include 'DatabaseConnection.php';
$conn = connectToLocalDB();
getData($conn);

  function getData($conn) {
    $sql = "SELECT * FROM referee_status";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "got data";
    } else {
      echo "0 results";
    }
  }


  ?>
