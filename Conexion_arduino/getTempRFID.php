<?php
  require("config.php");

  $query = "SELECT  * FROM tempi ";

  $result = mysql_query($query);

  $json= array();

  while ($R= mysql_fetch_array($result)) {
    $T["ID"]=$R[0];
    array_push($json,$T);
  }
  echo json_encode($json);
 ?>
