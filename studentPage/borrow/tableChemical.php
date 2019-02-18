<?php
 
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
$columns = array(
    array( 'db' => '`c`.`ID`',                'dt' => 0, 'field' => 'ID'  ),
    array( 'db' => '`c`.`chemical`',          'dt' => 1, 'field' => 'chemical'  ),
    array( 'db' => '`c`.`chemical_fomula`',   'dt' => 2, 'field' => 'chemical_fomula'  ),
    array( 'db' => '`s`.`Place`',             'dt' => 3, 'field' => 'Place'  ),
    array( 'db' => '`c`.`chemical`', 'dt' => 4, 'formatter' => function( $d, $row ) {
        return '<buton  class="btn btn-primary btn-xs btn-flat" id="brCh" ><i class="fa fa-shopping-cart"/> ร้องขอ</button>';},
    'field' => 'chemical' ),
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
$joinQuery = "FROM `{$table}` AS `c` LEFT JOIN `storage` AS `s` ON (`c`.`storage` = `s`.`id`)";
 
require( '../../classTable/ssp.customized.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery)
);