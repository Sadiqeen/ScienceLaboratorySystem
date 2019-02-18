<?php
    require('../../db.php');
    require('../functions/chemical.php');

    $brId = isset($_POST['brId']) ? $_POST['brId'] : "";

    chemical::getInfoBr($mysqli, $brId);
?>