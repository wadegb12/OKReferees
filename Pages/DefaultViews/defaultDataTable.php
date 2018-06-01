<?php
  function createDataTable($result) {
    $html = "";
    $html .= "<table id=\"status_table\" class=\"display\" style=\"width:100%\">";
    $html .= "<thead>" . addColumns($result) . "</thead>";
    $html .= "<tbody>" . addRows($result) . "</tbody>";
    $html .= "</table>";

    return $html;
  }

  function addColumns($result) {
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

  function addRows($result) {
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
