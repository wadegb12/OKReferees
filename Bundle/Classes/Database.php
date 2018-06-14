<?php   
    class Database {

        public $SERVER_NAME;
        public $DB_NAME;
        public $USERNAME;
        public $PASSWORD;

        private function connect() {
            
        
            $driver = new mysqli_driver();
            $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
        
            try {
              $conn = new mysqli($this->SERVER_NAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);
            }
            catch (mysqli_sql_exception $e) {
              return "";
            }
            
            return $conn;
        }

        public function exeQuery($query) {
            $conn = self::connect();
            if(is_a($conn, 'mysqli')) {
                $result = $conn->query($sql);

                if ($result->num_rows === 0) {
                    return null;
                }
          
                return $result;
            }
        }
    }