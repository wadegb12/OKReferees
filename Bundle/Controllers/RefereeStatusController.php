<?php
    class RefereeStatusController extends AbstractController {
        private $db;
        private $error = "";
        private $mysqlExcption = "";
        private $statusData;
        private $statusTable = "";
        private $interactiveQueries = "";
        

        public function index() {
            $this->db = new Database();

            if($this->isValidConnToDB($this->db->conn)) {
                $this->getStatusData();
                // $this->createQueries();
                $this->createStatusTable();
            }
            else {
                $this->error = "Could not connect to Database";
            }

            $this->buildView();
            $this->renderHTML($this->view);
        }

        private function buildView() {
            ob_start(); 
            include(dirname(__FILE__). '/../Views/default.php') ?>
            
            <div class="hide-on-med-and-down container grayBackground">
                <div class="linePadding">
                    <div><?php echo "Error: " . $this->error ?></div>
                    <div><?php echo "Mysql Error: " . $this->mysqlExcption ?></div>
                    <div><?php echo $this->interactiveQueries ?></div>
                    <div><?php echo $this->statusTable ?></div>
                </div>
            </div>
            

            <?php $this->view = ob_get_clean(); 
        }

        // private function createQueries() {
            
        // }

        private function createStatusTable() {
            if(is_null($this->statusData)) {
                $this->createDataTable([]);
            }
            else if($this->isMysqliException($this->statusData)) {
                $this->mysqlExcption = $this->statusData;
                $this->createDataTable([]);
            }
            else {
                $this->formatStatusData();
                $this->createDataTable($this->statusData);
            }
        }

        private function createDataTable($result) 
        {
            $html = "";
            $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
            if($result === [])
            {
                $result = $this->getBlankTableData();
                $html .= "<thead>" . $this->addColumns($result) . "</thead>";
            }
            else {
                $html .= "<thead>" . $this->addColumns($result) . "</thead>";
                $html .= "<tbody>" . $this->addRows($result) . "</tbody>";
            } 
            
            $html .= "</table>";
            
            $this->statusTable = $html;
        }

        private function isValidConnToDB($conn) {
            if(is_a($conn, 'mysqli')) {
                return true;
            }
            return false;
        }

        private function isMysqliException($item) {
            if(is_a($item, 'mysqli_sql_exception')) {
                return true;
            }
            return false;
        }

        private function getStatusData() {
            $query = "SELECT s.id, s.full_name as 'Name', s.grade as 'Grade', s.recert as 'Recert Clinic', ";
            $query .= "s.written_test as 'Written Test', s.fitness as 'Fitness Test', ";
            $query .= "s.game_log as 'Game Log', s.upgrade_clinic as 'Upgrade Clinic', ";
            $query .= "a.referee_id, a.pass ";
            $query .= "FROM Status AS s ";
            $query .= "INNER JOIN Assessments AS a ON s.id = a.referee_id";
            
            $this->statusData = $this->db->exeQuery($query);
        }

        private function formatStatusData() {
            foreach ($this->statusData as $column => $value) {
                
            }
        }

        private function getBlankTableData()
        {
            $array[0]['Name'] = '';
            $array[0]['Grade'] = '';
            $array[0]['Recert Clinic'] = '';
            $array[0]['Written Test'] = '';
            $array[0]['Assessment'] = '';
            $array[0]['Fitness Test'] = '';
            $array[0]['Game Log'] = '';
            $array[0]['Upgrade Cinic'] = '';
            return $array;
        }

        private function addColumns($result) 
        {
            $html = "";
            foreach($result as $row) {
                $html .= "<tr>";
                foreach($row as $columnName => $value) {
                    $html .= "<th>" . $columnName . "</th>";
                }
                $html .= "</tr>";
                return $html;
            }
            return $html;
        }
        private function addRows($result) 
        {
            $html = "";
            foreach($result as $row) {
                $html .= "<tr>";
                foreach($row as $columnName => $value) {
                    $html .= "<td>" . $value . "</td>";
                }
                $html .= "</tr>";
            }
            
            return $html;
        }
        
    }


  