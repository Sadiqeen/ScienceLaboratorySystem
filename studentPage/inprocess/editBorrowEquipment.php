<?php
    require('../../db.php');
    require('../functions/equipment.php');
    
    $brEqId = isset($_POST['brEqId']) ? $_POST['brEqId'] : "";
    $eqId = isset($_POST['eqId']) ? $_POST['eqId'] : "";
    $brEqQt = isset($_POST['brEqQt']) ? $_POST['brEqQt'] : "";

    equipment::updateDataBr($mysqli, $brEqId, $eqId, $brEqQt);

?>