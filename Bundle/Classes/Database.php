<?php   
    class Database {

        // private $SERVER_NAME = "23.229.183.230:3306";
        // private $DB_NAME = "RefereeTracking";
        // private $USERNAME = "refereeAdm";
        // private $PASSWORD = "WOll3yD3r";
        private $SERVER_NAME = "localhost:3306";
        private $DB_NAME = "local_referee_tracking";
        private $USERNAME = "root";
        private $PASSWORD = "Anorakleet12";

        private function connect() {
            
            $driver = new mysqli_driver();
            $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
        
            try {
              $conn = new mysqli($this->SERVER_NAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);
            }
            catch (mysqli_sql_exception $e) {
                return $e;
            }
            
            return $conn;
        }

        public function exeQuery($query) {
            $conn = self::connect();
            if(is_a($conn, 'mysqli')) {
                try {
                    $result = $conn->query($query);

                    if ($result->num_rows === 0) {
                        return null;
                    }
              
                    return $result;
                }
                catch (mysqli_sql_exception $e) {
                    return $e;
                }
            }
            else {
                // couldnt connect to db
            }
        }
    }