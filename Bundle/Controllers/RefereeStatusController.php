<?php
    class RefereeStatusController extends AbstractController {
        private $db;
        private $defaultInclude = "include(dirname(__FILE__). '/../Views/default.php')";
        private $table;
        private $interactiveQueries;
        

        public function index() {
            $this->db = new Database();
            $result = $this->db->exeQuery("test");


            
            $this->buildView($result);

            $this->renderHTML($this->view);
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

        private function buildView($result) {
            ob_start(); 
            // $this->defaultInclude
            include(dirname(__FILE__). '/../Views/default.php') ?>
            <div><?php echo $result ?></div>

            <?php $this->view = ob_get_clean(); 





        }
    }


  