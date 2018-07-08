<?php

    class Table {
        
        public function createDataTable($tableData) 
        {
            $html = "";
            $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
            if($tableData === [])
            {
                $blankTableData = $this->getBlankTableData();
                $html .= "<thead>" . $this->addColumns($blankTableData) . "</thead>";
            }
            else {
                $html .= "<thead>" . $this->addColumns($tableData) . "</thead>";
                $html .= "<tbody>" . $this->addRows($tableData) . "</tbody>";
            } 
            
            $html .= "</table>";
            
            return $html;
        }

        public function addColumns($result) 
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
        
        public function addRows($result) 
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