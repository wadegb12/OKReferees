<?php
    class RefereeStatusController extends AbstractController {
        public $db;

        public function index() {
            $this->db = new Database();
            $conn = $this->db->exeQuery("test");
            // $table = getRefereeStatusTable($conn);


            $test = "test";

            ob_start(); ?>
            <?php include(dirname(__FILE__). '/../Views/default.php') ?>
            <div>HTML goes here...</div>
            <div><?php echo $test ?></div>
            <?php $string = ob_get_clean(); 

            $this->renderHTML($string);
        }


        private function getRefereeStatusTable($conn) {
            if(is_a($conn, 'mysqli')) {
                $table = getTable($conn);
            }
            else {
                $table = getBlankTable();
                // $tableInfo = "Failed to connect to database";
            }

            return $table;
        }
    }


  