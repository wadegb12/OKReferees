<?php   
    class Queries {

        public function getAssessments() {
            return "SELECT referee_id, pass_fail as 'Assessment 1' FROM Assessments";
        }

        public function getStatuses() {
            $query = "SELECT id, full_name as 'Name', grade as 'Grade', recert as 'Recert Clinic', ";
            $query .= "written_test as 'Written Test', fitness as 'Fitness Test', ";
            $query .= "game_log as 'Game Log', upgrade_clinic as 'Upgrade Clinic' ";
            $query .= "FROM Status";

            return $query;
        }
    
        public function addReferee($refereeName, $grade)
        {
            $date = date('Y');

            $query = "INSERT INTO Status ";
            $query .= "(cert_year, full_name, grade, written_test, written_test_score, fitness, ";
            $query .= "fitness_date, fitness_city, game_log, recert, upgrade_clinic) ";
            $query .= "VALUES ('$date', '$refereeName', '$grade', "; 
            $query .= "0, 0, 0, 0000-00-00, 'a' , 0, 0, 0)"; 

            return $query;
        }

        public function getAllRefereeNames()
        {
            return "SELECT full_name FROM Status";
        }
    }