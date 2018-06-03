<?php
    include 'DatabaseConnection.php';

    $status = false;
    $conn = connectToLocalDB();

    if(is_a($conn, 'mysqli')) {
        $status = canLogin($conn);
      }
   

    function canLogin($conn) {
        $sql = "SELECT * WHERE username = '$username' AND 'password' = '$password' FROM login_validator";
        
        $result = $conn->query($sql);

        if ($result->num_rows === 0) {
        return null;
        }

        return $result;
    }