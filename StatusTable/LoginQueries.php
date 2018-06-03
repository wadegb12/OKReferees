<?php
include 'DatabaseConnection.php';
$conn = connectToLocalDB();
canLogin($conn);

  function canLogin($conn) {
    $sql = "SELECT * FROM login_validator";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "got data";
    } else {
      echo "0 results";
    }
  }

?>
