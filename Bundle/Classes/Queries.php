<?php   
    class Queries {

        public function getAssessments() {
            return "SELECT referee_id, pass_fail as 'Assessment 1' FROM Assessments";
        }

        public function getStatuses() {
            $statusesQuery = "SELECT id, full_name as 'Name', grade as 'Grade', recert as 'Recert Clinic', ";
            $statusesQuery .= "written_test as 'Written Test', fitness as 'Fitness Test', ";
            $statusesQuery .= "game_log as 'Game Log', upgrade_clinic as 'Upgrade Clinic' ";
            $statusesQuery .= "FROM Status";

            return $statusesQuery;
        }
    
        public function addReferee($refereeName, $grade)
        {
            $date = date(Y);

            $statusesQuery = "INSERT INTO Status ";
            $statusesQuery .= "(cert_year, full_name, grade, written_test, written_test_score, fitness, ";
            $statusesQuery .= "fitness_date, fitness_city, game_log, recert, upgrade_clinic) ";
            $statusesQuery .= "VALUES (" . $date . ", " . $refereeName . ", " . $grade . ", "; 
            $statusesQuery .= "0, 0, 0, , , 0,0,0)"; 
        }
    }