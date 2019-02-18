<?php
    require('../../db.php');
    require('../functions/chemical.php');
    
    $brChId = isset($_POST['brChId']) ? $_POST['brChId'] : "";

    chemical::cancelBr($mysqli, $brChId);

?>