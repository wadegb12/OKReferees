<?php
  function connectToDB()
  {
    $SERVER_NAME = "23.229.183.230:3306";
    $DB_NAME = "RefereeTracking";
    $TABLE = "referee_status";
    $USERNAME = "refereeAdm";
    $PASSWORD = "WOll3yD3r";

    // Create connection
    $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "got data";
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function connectToLocalDB()
  {
    $SERVER_NAME = "localhost:3306";
    $DB_NAME = "local_referee_tracking";
    $USERNAME = "root";
    $PASSWORD = "Anorakleet12";

    $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
