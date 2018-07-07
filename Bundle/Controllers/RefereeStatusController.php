<?php
    class RefereeStatusController extends AbstractController {
        private $conn;
        private $error = "";
        private $statusTable = "";
        private $interactiveQueries = "";
        

        public function index() {
            $this->conn = new Database();

            if($this->isValidConnToDB($this->conn)) {
                $this->createQueries();
                $this->createRefereeStatusTable();
            }
            else {
                //show error
                $this->error = $this->conn;
            }

            $this->buildView();
            $this->renderHTML($this->view);
        }

        private function isValidConnToDB() {
            if(is_a($this->conn, 'mysqli')) {
                return true;
            }
            return false;
        }

        private function buildView() {
            ob_start(); 
            include(dirname(__FILE__). '/../Views/default.php') ?>
            
            <div class="hide-on-med-and-down container grayBackground">
                <div class="linePadding">
                    <div><?php echo $this->interactiveQueries ?></div>
                    <div><?php echo $this->statusTable ?></div>
                </div>
            </div>
            

            <?php $this->view = ob_get_clean(); 
        }

        private function createQueries() {
            
        }


        private function createRefereeStatusTable() {
            
        }

        
    }


  