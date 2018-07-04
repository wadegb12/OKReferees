<?php
    class RefereeStatusController extends AbstractController {
        public function index() {
            
            // if(isset($_SESSION['login_user'])){
            //   $user = $_SESSION['login_user'];
            // }

            // $conn = connectToDB();
            // $table = getRefereeStatusTable($conn);

            $this->render("refereeStatus");
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


  