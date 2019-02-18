<?php
session_start();
include '../../db.php';
 
// $dataJSON = isset($_POST['dataJSON']) ? $_POST['dataJSON'] : "";
 
$sql = "SELECT @row_num := @row_num + 1 'count', c.chemical, c.chemical_fomula, b.Consentration, b.Quantity, b.borrow_date, b.status FROM borrow_chemical b, chemical c, (SELECT @row_num:=0) r  WHERE (b.chemical_id = c.ID) AND (`b`.`status` BETWEEN 6 AND 8) AND (`b`.`user_id` = '".$_SESSION["id"]."') ORDER BY `b`.`borrow_date` DESC";
$result = mysqli_query($mysqli,$sql);
$dataTableChemical= array();
 
while( $row = mysqli_fetch_array($result) ){
    $count = $row['count'];
    $chemical = $row['chemical'];
    $chemical_fomula = $row['chemical_fomula'];
    $Consentration = $row['Consentration'];
    $Quantity = $row['Quantity'];
    $borrow_dateDb = new DateTime($row['borrow_date']);
    $borrow_date = $borrow_dateDb->format('d/m/Y');
    if ($row['status'] == 6) {
        $status = '<span class="label label-success">ทำรายการสำเร็จ</span>';
    } elseif ($row['status'] == 7) {
        $status = '<span class="label label-danger">รายการถูกปฎิเสธ</span>';
    } else {
        $status = '<span class="label label-warning">ถูกยกเลิกโดยผู้ใช้</span>';
    }
 
    $dataTableChemical[] = array( 'count' => $count,
                                  'chemical' => $chemical,
                                  'chemical_fomula' => $chemical_fomula,
                                  'Consentration' => $Consentration,
                                  'Quantity' => $Quantity,
                                  'borrow_date' => $borrow_date,
                                  'status' => $status,
                                );
}
 
// encoding array to json format
echo json_encode($dataTableChemical, JSON_UNESCAPED_UNICODE );
 
?>