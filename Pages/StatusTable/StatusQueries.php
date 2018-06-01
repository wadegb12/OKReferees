<?php
include 'DatabaseConnection.php';

  function get7Data($conn) {
    $sql = "SELECT full_name as 'Name', grade as 'Grade', recertification_clinic as 'Recert Clinic', ";
    $sql .= "written_test as 'Written Test', assessment as 'Assessment', fitness_test as 'Fitness Test', ";
    $sql .= "game_count as 'Game Count', upgrade_clinic as 'Upgrade Clinic' ";
    $sql .= "FROM referee_status";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
      return null;
    }

    return $result;
  }
