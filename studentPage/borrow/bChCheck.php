<?php
    require('../../db.php');
    require('../functions/chemical.php');
    
    $chID = isset($_POST['chId']) ? $_POST['chId'] : "";
    
    chemical::check($mysqli, $chID);
?>