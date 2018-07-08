<?php   
    class Queries {

        public $assessmentsQuery;
        public $statusesQuery;
    
        public function __construct() {
            $this->assessmentsQuery = "SELECT referee_id, pass_fail as 'Assessment 1' FROM Assessments";
        
            $this->statusesQuery = "SELECT id, full_name as 'Name', grade as 'Grade', recert as 'Recert Clinic', ";
            $this->statusesQuery .= "written_test as 'Written Test', fitness as 'Fitness Test', ";
            $this->statusesQuery .= "game_log as 'Game Log', upgrade_clinic as 'Upgrade Clinic' ";
            $this->statusesQuery .= "FROM Status";
        }

        public function getAssessmentsQuery() {
            return $this->assessmentsQuery;
        }

        public function getStatusesQuery() {
            return $this->statusesQuery;
        }
    
    }