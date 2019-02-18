<?php
    require('../../db.php');
    require('../functions/equipment.php');

    $eqId = isset($_POST['eqId']) ? $_POST['eqId'] : "";
    $eqBrDate = isset($_POST['eqBrDate']) ? $_POST['eqBrDate'] : "";
    $eqBrQt = isset($_POST['eqBrQt']) ? $_POST['eqBrQt'] : "";

    $DateTime = DateTime::createFromFormat('d/m/Y', $eqBrDate);
    $eqBrDate = $DateTime->format('Y-m-d');
    $_return_date = date('Y-m-d', strtotime($eqBrDate. ' + 7 days'));

    equipment::Insert($mysqli, $eqId, $eqBrDate, $eqBrQt, $_return_date);
?>