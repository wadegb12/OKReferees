<?php
    class RefereeStatusController extends AbstractController {
        private $error = "";
        private $mysqlExcption = "";
        private $statusData = array();
        private $assessmentData;
        private $statusTableData = array();
        private $statusTable = "";
        private $interactiveQueries = "";
        private $blankTableColumns = array('Name', 'Grade', 'Recert Clinic', 'Written Test', 'Assessment', 
            'Fitness Test', 'Game Log', 'Upgrade Cinic');

        public function index() {
            $this->db = new Database();
            $this->queries = new Queries();
            $this->table = new Table();
            $this->exceptionHandler = new ExceptionHandler();

            if($this->exceptionHandler->isValidConnToDB($this->db->conn)) {
                $this->statusData = $this->db->exeQuery($this->queries->getStatusesQuery());
                $this->assessmentData = $this->db->exeQuery($this->queries->getAssessmentsQuery());

                $refereeAssessments = $this->getRefereeAssessments();
                
                if (!is_null($this->statusData)) {
                    if(count($refereeAssessments) > 0) {
                        $this->statusData = $this->mergeStatusWithAssessments($this->statusData, $refereeAssessments);
                    }

                    $this->statusTableData = $this->removeId($this->statusData);
                }
                
                $this->statusTable = $this->createStatusTable($this->statusTableData);

                
                // $this->createQueries();
            }
            else {
                $this->error = "Could not connect to Database";
            }

            $this->buildView();
            $this->renderHTML($this->view);
        }

        private function getRefereeAssessments() {
            $assessments = array();

            if (!is_null($this->assessmentData)) {
                foreach($this->assessmentData as $row => $data) {
                    $refereeIds = array_keys($assessments);

                    if(in_array($data["referee_id"], $refereeIds)) {
                        array_push($assessments[$data["referee_id"]], $data["Assessment 1"]);
                    }
                    else {
                        $assessments[$data["referee_id"]] = array($data["Assessment 1"]);
                    }
                }
            }

            return $assessments;
        }

        private function mergeStatusWithAssessments($statusData, $refereeAssessments) {
            $mergedArray = array();

            foreach($statusData as $row => $data) {
                array_push($mergedArray, $data); 
                foreach($refereeAssessments as $refereeId => $assessments) {

                    if($refereeId == $data["id"]) {
                        $i = 1;
                        foreach($assessments as $key => $value) {
                            $mergedArray[$row]["Assessment " . $i] = $value;
                            $i++;
                        }
                    }
                }
            }

            return $mergedArray;
        }

        private function removeId($array) {
            $newArray = array();

            foreach($array as $row => $data) {
                foreach($data as $key => $value) {
                    if($key !== "id") {
                        $newArray[$row][$key] = $value;
                    }
                }
            }

            return $newArray;
        }

        private function createStatusTable($tableData) {
            $table = "";

            if(is_null($this->statusData)) {
                $this->table->setColumnConfig($this->blankTableColumns);
                $table = $this->table->createDataTable([]);
            }
            else if($this->exceptionHandler->isMysqliException($this->statusData)) {
                $this->mysqlExcption = $this->statusData;
                $this->table->setColumnConfig($this->getBlankTableData());
                $table = $this->table->createDataTable([]);
            }
            else {
                $this->table->setColumnConfig($this->getColumns($tableData));
                $table = $this->table->createDataTable($tableData);
            }

            return $table;
        }

        private function getColumns($tableData) {
            $dataWithMostCols = array();
            $columns = array();

            foreach($tableData as $row => $data) {
                if(count($data) > count($dataWithMostCols)) {
                    $dataWithMostCols = $data;
                }
            }

            foreach($dataWithMostCols as $column => $value) {
                array_push($columns, $column);
            }

            return $columns;
        }

        // private function createQueries() {
            
        // }

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
        
    }


  