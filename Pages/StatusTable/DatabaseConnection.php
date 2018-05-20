<?php
  $servername = "23.229.183.230:3306";
  $username = "refereeAdm";
  $password = "WOll3yD3r";
  $dbname = "RefereeTracking";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM table";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "got data";
      // echo "<table><tr><th>ID</th><th>Name</th></tr>";
      // // output data of each row
      // while($row = $result->fetch_assoc()) {
      //     echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
      // }
      // echo "</table>";
  }
  else {
      echo "0 results";
  }
  $conn->close();
?>
