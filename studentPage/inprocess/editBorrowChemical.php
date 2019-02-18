<?php
    require('../../db.php');
    require('../functions/chemical.php');
    
    $brChId = isset($_POST['brChId']) ? $_POST['brChId'] : "";
    $brChCs = isset($_POST['brChCs']) ? $_POST['brChCs'] : "";
    $brChQt = isset($_POST['brChQt']) ? $_POST['brChQt'] : "";

    chemical::updateDataBr($mysqli, $brChId, $brChCs, $brChQt);

?>