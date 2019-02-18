<?php

  require('../../db.php');
  require('../functions/chemical.php');

  $data = json_decode(stripslashes($_POST['data']));

  $brChId = $data[0];
  for ($i=1; $i < sizeof($data); $i++) {
    $brChId = $brChId."','".$data[$i];
  }

  // echo json_encode($brChId , JSON_UNESCAPED_UNICODE );
  chemical::cancelBr($mysqli, $brChId);

?>
