<?php
include_once 'DatabaseConnection.php';
include(dirname(__FILE__). '/../DefaultViews/defaultDataTable.php');

  function get7Data($conn) {
    $sql = "SELECT full_name as 'Name', grade as 'Grade', recertification_clinic as 'Recert Clinic', ";
    $sql .= "written_test as 'Written Test', assessment as 'Assessment', fitness_test as 'Fitness Test', ";
    $sql .= "game_count as 'Game Count', upgrade_clinic as 'Upgrade Clinic' ";
    $sql .= "FROM referee_status";
    try {
      $result = $conn->query($sql);
      if ($result->num_rows === 0) {
        return null;
      }
    }
    catch (mysqli_sql_exception $e) {
      return null;
    }
    
    

    return $result;
  }

  function getTable($conn) {
    $result = get7Data($conn);

    if ($result != null || $result != []) {
      $table = createDataTable($result);
    }
    else {
      $table = getBlankTable();
    }
    return $table;
  }

  function getBlankTable() {
    $result = [];
    $table = createDataTable($result);

    return $table;
  }
