<?php

    class Table {
        public $columnConfig = array();
        
        public function createDataTable($tableData) 
        {
            $html = "";
            $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
            $html .= "<thead>" . $this->addColumns($tableData) . "</thead>";
            $html .= "<tbody>" . $this->addRows($tableData) . "</tbody>";
            $html .= "</table>";
            
            return $html;
        }

        public function addColumns() 
        {
            $html = "";
            $html .= "<tr>";
            foreach($this->columnConfig as $column) {
                $html .= "<th>" . $column . "</th>";
            }
            $html .= "</tr>";
            return $html;
        }
        
        public function addRows($result) 
        {
            $value = "";
            $html = "";
            foreach($result as $row) {
                $html .= "<tr>";
                $rowKeys = array_keys($row);

                foreach($this->columnConfig as $column) {
                    if(in_array($column, $rowKeys)) {
                        $value = $row[$column];
                    }
                    else {
                        $value = "-";
                    }
                    $html .= "<td>" . $value . "</td>";
                }
                
                $html .= "</tr>";
            }
            
            return $html;
        }

        public function setColumnConfig($columnConfig) {
            $this->columnConfig = $columnConfig;
        }
    }