<?php

  require('../../db.php');
  require('../functions/equipment.php');

  $data = json_decode(stripslashes($_POST['data']));

  $brEqId = $data[0];
  for ($i=1; $i < sizeof($data); $i++) {
    $brEqId = $brEqId."','".$data[$i];
  }

  // echo json_encode($brChId , JSON_UNESCAPED_UNICODE );
  equipment::cancelBr($mysqli, $brEqId);

?>
