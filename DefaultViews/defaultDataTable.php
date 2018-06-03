<?php
  function createDataTable($result) 
  {
    $html = "";

    if($result == [])
    {
      $result = getDefaultRows();

      $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
      $html .= "<thead>" . addColumns($result) . "</thead>";
      $html .= "</table>";
    }
    else {
      $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
      $html .= "<thead>" . addColumns($result) . "</thead>";
      $html .= "<tbody>" . addRows($result) . "</tbody>";
      $html .= "</table>";
    } 
    
    return $html;
  }

  function addColumns($result) 
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

  function addRows($result) 
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

  function getDefaultRows()
  {
    $array[0]['Name'] = '';
    $array[0]['Grade'] = '';
    $array[0]['Recert Clinic'] = '';
    $array[0]['Written Test'] = '';
    $array[0]['Assessment'] = '';
    $array[0]['Fitness Test'] = '';
    $array[0]['Game Count'] = '';
    $array[0]['Upgrade Cinic'] = '';

    return $array;
  }