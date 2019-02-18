<?php
    require('../../db.php');
    require('../functions/equipment.php');
    
    $brEqId = isset($_POST['brEqId']) ? $_POST['brEqId'] : "";

    equipment::cancelBr($mysqli, $brEqId);

?>