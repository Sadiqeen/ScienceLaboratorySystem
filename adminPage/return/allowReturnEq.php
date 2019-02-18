<?php
   require('../../db.php');
   require('../functions/equipment.php');

   $brId = isset($_POST['brId']) ? $_POST['brId'] : "";

   equipment::allowBrEq($mysqli, $brId, 6, 2);
?>