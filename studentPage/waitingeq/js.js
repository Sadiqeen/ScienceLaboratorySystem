$(document).ready(function () {
    var tableEq = $('#tableEquipment').DataTable( {
        "autoWidth" : false,
        "columnDefs": [
            {
              "width": "10%",
              "targets": [ 4 ],
            },
            {
              "width": "15%",
              "targets": [ 1,2,3 ],
              "className": "text-center"
            },
        ],
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "retrieve": true,
        "ajax": "./waitingeq/tableEquipment.php"
    } );

    tableEq.column( '3' ).order( 'asc' ).draw();
});