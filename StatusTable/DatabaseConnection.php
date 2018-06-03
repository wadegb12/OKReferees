<?php
  function connectToDB()
  {
    $SERVER_NAME = "23.229.183.230:3306";
    $DB_NAME = "RefereeTracking";
    $TABLE = "referee_status";
    $USERNAME = "refereeAdm";
    $PASSWORD = "WOll3yD3r";

    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;

    try {
      $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
      $sql = "SELECT * FROM table";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        return "got data";
      } else {
        return "0 results";
      }
    }
    catch (mysqli_sql_exception $e) {
      return "";
    }
  }

  function connectToLocalDB()
  {
    $SERVER_NAME = "localhost:3306";
    $DB_NAME = "local_referee_tracking";
    $USERNAME = "root";
    $PASSWORD = "Anorakleet12";

    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;

    try {
      $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
    }
    catch (mysqli_sql_exception $e) {
      return "";
    }
    
    
    return $conn;
  }
?>
