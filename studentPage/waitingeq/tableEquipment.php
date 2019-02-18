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
    array('db' => '`e`.`Equipment`', 'dt' => 0, 'field' => 'Equipment'),
    array('db' => '`b`.`Quantity`', 'dt' => 1, 'field' => 'Quantity'),
    array('db' => '`b`.`borrow_date`', 'dt' => 2, 'formatter' => function ($d, $row) {
        return date("d/m/Y", strtotime($d));}, 'field' => 'borrow_date'),
    array('db' => '`b`.`return_date`', 'dt' => 3, 'formatter' => function ($d, $row) {
        return date("d/m/Y", strtotime($d));}, 'field' => 'return_date'),
    array('db' => '`b`.`return_date`', 'dt' => 4, 'formatter' => function ($d, $row) {
        $today = new DateTime('today');
        $returnDate = new DateTime($d);
        if ($today < $returnDate) {
            if ($today >= $returnDate->modify('-2 days')) {
                return '<span class="label label-info">ใกล้กำหนดส่ง</span>';
            } else {
                return '<span class="label label-success">รอเวลาคืน</span>';
            }
        } elseif ($today == $returnDate) {
            return '<span class="label label-warning">ถึงกำหนดคืนอุปกรณ์</span>';
        } else {
            return '<span class="label label-danger">เลยกำหนด</span>';
        }
    }, 'field' => 'return_date'),
);

// SQL server connection information
require '../../dbInfo.php';
$sql_details = array(
    'user' => $dbInfo['user'],
    'pass' => $dbInfo['pass'],
    'db' => $dbInfo['db'],
    'host' => $dbInfo['host'],
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
$joinQuery = "FROM `{$table}` AS `e` LEFT JOIN `borrow_equipment` AS `b` ON (`e`.`id` = `b`.`equipment_id`)";
$having = "(`b`.`status` = 5) AND (`b`.`user_id` = '" . $_SESSION["id"] . "')";
require '../../classTable/ssp.customized.class.php';

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $having)
);
