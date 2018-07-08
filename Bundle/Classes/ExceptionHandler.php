<?php

    class ExceptionHandler {

        public function isValidConnToDB($conn) {
            if(is_a($conn, 'mysqli')) {
                return true;
            }
            return false;
        }

        public function isMysqliException($item) {
            if(is_a($item, 'mysqli_sql_exception')) {
                return true;
            }
            return false;
        }
    }