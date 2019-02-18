<?php
   require('../../db.php');
   require('../functions/chemical.php');

   $brId = isset($_POST['brId']) ? $_POST['brId'] : "";

   chemical::updateStatus($mysqli, $brId, 4); //4 is deny
?>