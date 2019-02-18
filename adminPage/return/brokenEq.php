<?php
   require('../../db.php');
   require('../functions/equipment.php');

   $brId = isset($_POST['brId']) ? $_POST['brId'] : "";
   $eqRt = isset($_POST['eqRt']) ? $_POST['eqRt'] : "";

   equipment::returnEq($mysqli, $brId, $eqBrQt);
?>