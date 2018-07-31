<?php
    class AbstractController 
    // extends Database
    {
        
        // public $SERVER_NAME = "localhost:3306";
        // public $DB_NAME = "local_referee_tracking";
        // public $USERNAME = "root";
        // public $PASSWORD = "Anorakleet12";

        public function render($view) {
            require_once("./Bundle/Views/" . $view . ".php");
        }

        public function renderHTML($string) {
            echo $string;
        }
    }