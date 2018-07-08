<?php
    class RefereeStatusController extends AbstractController {
        private $db;
        private $error = "";
        private $mysqlExcption = "";
        private $statusData;
        private $assessmentData;
        private $statusTableData = array();
        private $statusTable = "";
        private $interactiveQueries = "";
        

        public function index() {
            $this->db = new Database();
            $this->queries = new Queries();
            $this->table = new Table();
            $this->exceptionHandler = new ExceptionHandler();


            if($this->exceptionHandler->isValidConnToDB($this->db->conn)) {
                $this->statusData = $this->db->exeQuery($this->queries->getStatusesQuery());
                $this->assessmentData = $this->db->exeQuery($this->queries->getAssessmentsQuery());

                $refereeAssessments = $this->getRefereeAssessments();
                $this->mergeStatusWithAssessments($refereeAssessments);
                $this->statusTableData = $this->removeId($this->statusTableData);
                
                $this->statusTableData[1]['Assessment 2'] = "-";
                $this->statusTableData[1]['Assessment 3'] = "-";
                $this->statusTable = $this->createStatusTable($this->statusTableData);

                
                // $this->createQueries();
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

        private function createStatusTable($tableData) {
            $table = "";

            if(is_null($this->statusData)) {
                $table = $this->table->createDataTable([]);
            }
            else if($this->exceptionHandler->isMysqliException($this->statusData)) {
                $this->mysqlExcption = $this->statusData;
                $table = $this->table->createDataTable([]);
            }
            else {
                $table = $this->table->createDataTable($tableData);
            }

            return $table;
        }

        private function getRefereeAssessments() {
            $assessments = array();

            foreach($this->assessmentData as $row => $data) {
                $refereeIds = array_keys($assessments);

                if(in_array($data["referee_id"], $refereeIds)) {
                    array_push($assessments[$data["referee_id"]], $data["Assessment 1"]);
                }
                else {
                    $assessments[$data["referee_id"]] = array($data["Assessment 1"]);
                }
            }

            return $assessments;
        }

        private function mergeStatusWithAssessments($refereeAssessments) {
            foreach($this->statusData as $row => $data) {
                array_push($this->statusTableData, $data); 
                foreach($refereeAssessments as $refereeId => $assessments) {

                    if($refereeId == $data["id"]) {
                        $i = 1;
                        foreach($assessments as $key => $value) {
                            $this->statusTableData[$row]["Assessment " . $i] = $value;
                            $i++;
                        }
                    }
                }
            }
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

        
        
    }


  