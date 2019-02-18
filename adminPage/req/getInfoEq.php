<?php
    require('../../db.php');
    require('../functions/equipment.php');

    $brId = isset($_POST['brId']) ? $_POST['brId'] : "";

    equipment::getInfoBr($mysqli, $brId);
?>