<?php
  require("config.php");

  $query = "SELECT  COUNT(ID) 	FROM tempi ";

  $result = mysql_query($query);

  $json= array();

  while ($R= mysql_fetch_array($result)) {
    array_push($json,$R[0]);
  }
  echo json_encode($json);
 ?>
