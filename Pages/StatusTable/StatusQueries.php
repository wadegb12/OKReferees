<?php
include 'DatabaseConnection.php';

  function get7Data($conn) {
    $sql = "SELECT * FROM referee_status";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
      return null;
    }

    return $result;
  }
