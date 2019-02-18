<?php
    require('../../db.php');
    require('../functions/chemical.php');

    $chId = isset($_POST['chId']) ? $_POST['chId'] : "";
    $chBrDate = isset($_POST['chBrDate']) ? $_POST['chBrDate'] : "";
    $chBrCs = isset($_POST['chBrCs']) ? $_POST['chBrCs'] : "";
    $chBrQt = isset($_POST['chBrQt']) ? $_POST['chBrQt'] : "";

    $DateTime = DateTime::createFromFormat('d/m/Y', $chBrDate);
    $chBrDate = $DateTime->format('Y-m-d');

    chemical::Insert($mysqli, $chId, $chBrDate , $chBrCs, $chBrQt);
?>