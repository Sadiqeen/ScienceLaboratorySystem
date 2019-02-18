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
$table = 'equipment';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => '`b`.`id`',                  'dt' => 0, 'field' => 'id'  ),
    array( 'db' => '`b`.`equipment_id`',        'dt' => 1, 'field' => 'equipment_id'  ),
    array( 'db' => '`e`.`Equipment`',           'dt' => 2, 'field' => 'Equipment'  ),
    array( 'db' => '`b`.`Quantity`',       		'dt' => 3, 'field' => 'Quantity'  ),
    array( 'db' => '`b`.`borrow_date`',         'dt' => 4,  'formatter' => function( $d, $row ) {
		return date("d/m/Y", strtotime($d));}, 'field' => 'borrow_date'  ),
	array( 'db' => '`b`.`return_date`',         'dt' => 5,  'formatter' => function( $d, $row ) {
		return date("d/m/Y", strtotime($d));}, 'field' => 'return_date'  ),
	array( 'db' => '`b`.`user_id`',             'dt' => 6, 'field' => 'user_id'  ),
	array( 'db' => '`u`.`fname`',               'dt' => 7, 'field' => 'fname'  ),
	array( 'db' => '`u`.`lname`',               'dt' => 8, 'field' => 'lname'  ),
    array( 'db' => '`e`.`Equipment`',            'dt' => 9, 'formatter' => function( $d, $row ) {
		return '
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-success btn-xs btn-flat" id="allowEq" >อนุมัติ</button>
			<button type="button" class="btn btn-info btn-xs btn-flat" id="infoEq" >รายละเอียด</button>
			<button type="button" class="btn btn-danger btn-xs btn-flat" id="denyEq" >ปฏิเสธ</button>
		</div>
		';},
		'field' => 'Equipment' ),
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
$joinQuery = "FROM `{$table}` AS `e` INNER JOIN `borrow_equipment` AS `b` ON (`e`.`id` = `b`.`equipment_id`) INNER JOIN  `user_info` AS `u` ON (`u`.`user_id` = `b`.`user_id`)";
$having = "(`b`.`status` = 2)";
require( '../../classTable/ssp.customized.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $having)
);