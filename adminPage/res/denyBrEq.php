<?php
   require('../../db.php');
   require('../functions/equipment.php');

   $brId = isset($_POST['brId']) ? $_POST['brId'] : "";

   equipment::allowBrEq($mysqli, $brId, 4, 2); //4 is deny
?>