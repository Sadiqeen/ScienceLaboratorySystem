<?php
session_start();
include '../../db.php';
 
// $dataJSON = isset($_POST['dataJSON']) ? $_POST['dataJSON'] : "";
 
$sql = "SELECT  @row_num := @row_num + 1 'count', e.Equipment, b.Quantity, b.Quantity_return, b.borrow_date, b.return_date, b.status FROM borrow_equipment b, equipment e, (SELECT @row_num:=0) r  WHERE (b.equipment_id = e.id) AND (`b`.`status` BETWEEN 6 AND 8) AND (`b`.`user_id` = '".$_SESSION["id"]."') ORDER BY `b`.`borrow_date` DESC";
$result = mysqli_query($mysqli,$sql);
$dataTableChemical= array();
 
while( $row = mysqli_fetch_array($result) ){
    $count = $row['count'];
    $Equipment = $row['Equipment'];
    $Quantity = $row['Quantity'];
    $Quantity_return = $row['Quantity_return'];
    $borrow_dateDb = new DateTime($row['borrow_date']);
	$borrow_date = $borrow_dateDb->format('d/m/Y');
	$return_dateDb = new DateTime($row['return_date']);
    $return_date = $return_dateDb->format('d/m/Y');
    if ($row['status'] == 6) {
        $status = '<span class="label label-success">ทำรายการสำเร็จ</span>';
    } elseif ($row['status'] == 7) {
        $status = '<span class="label label-danger">รายการถูกปฎิเสธ</span>';
    } else {
        $status = '<span class="label label-warning">ถูกยกเลิกโดยผู้ใช้</span>';
    }
 
    $dataTableChemical[] = array( 'count' => $count,
                                  'Equipment' => $Equipment,
                                  'Quantity' => $Quantity,
                                  'Quantity_return' => $Quantity_return,
                                  'borrow_date' => $borrow_date,
								  'return_date' => $return_date,
								  'status' => $status,
                                );
}
 
// encoding array to json format
echo json_encode($dataTableChemical, JSON_UNESCAPED_UNICODE );
 
?>