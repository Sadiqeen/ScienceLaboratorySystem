<?php
 session_start();
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'chemical';
 
// Table's primary key
$primaryKey = 'ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$dataReturn;

$columns = array(
    array( 'db' => '`b`.`id`',                  'dt' => 0, 'field' => 'id'  ),
    array( 'db' => '`c`.`chemical`',            'dt' => 1, 'field' => 'chemical'  ),
    array( 'db' => '`b`.`Consentration`',       'dt' => 2, 'field' => 'Consentration'  ),
    array( 'db' => '`b`.`Quantity`',            'dt' => 3, 'field' => 'Quantity'  ),
    array( 'db' => '`b`.`borrow_date`',         'dt' => 4,  'formatter' => function( $d, $row ) {
        return date("d/m/Y", strtotime($d));}, 'field' => 'borrow_date'  ),
    array( 'db' => '`b`.`status`',            'dt' => 5, 'formatter' => function( $d, $row ) {
        if($d == 3){
            $dataReturn = '<span class="label label-success">อนุมัติ</span>';
        } else {
            $dataReturn = '<span class="label label-danger">ปฏิเสธ</span>';
        }
        return  $dataReturn;
    },'field' => 'status' ),
    array( 'db' => '`b`.`status`',            'dt' => 6, 'formatter' => function( $d, $row ) {
        if($d == 3){
            $dataReturn = 'y';
        } else {
            $dataReturn = 'n';
        }
        return  $dataReturn;
    },'field' => 'status' ),
);
 
// SQL server connection information
require( '../../dbInfo.php' );
$sql_details = array(
	'user' => $dbInfo['user'],
	'pass' => $dbInfo['pass'],
	'db'   => $dbInfo['db'],
	'host' => $dbInfo['host']
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
$joinQuery = "FROM `{$table}` AS `c` LEFT JOIN `borrow_chemical` AS `b` ON (`c`.`ID` = `b`.`chemical_id`)";
$having = "(`b`.`status` BETWEEN 3 AND 4) AND (`b`.`user_id` = '".$_SESSION["id"]."')";
require( '../../classTable/ssp.customized.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $having)
);