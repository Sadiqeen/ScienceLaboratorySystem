<?php
    require('../../db.php');
    require('../functions/equipment.php');
    
    $eqId = isset($_POST['eqId']) ? $_POST['eqId'] : "";
    
    equipment::check($mysqli, $eqId);
?>