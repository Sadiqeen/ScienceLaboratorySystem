$(document).ready(function () {
    $('.sidebar-menu').tree();
    var tableCh = $('#tableChemical').DataTable( {
        "autoWidth" : false,
        "columnDefs": [
            {
              "targets": [ 0 ],
              "visible": false,
              "searchable": false
            },
            {
              "width": "15%",
              "targets": [ 2,3,4],
              "className": "text-center",
            },
            {
              "width": "20%",
              "targets": [ 5 ],
              "className": "text-center",
            },
        ],
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "retrieve": true,
        "ajax": "./inprocess/tableChemical.php"
    } );

    tableCh.column( '4' ).order( 'DESC' ).draw();

    var tableEq = $('#tableEquipment').DataTable( {
        "autoWidth" : false,
        "columnDefs": [
            {
              "targets": [ 0,5 ],
              "visible": false,
              "searchable": false
            },
            {
              "width": "15%",
              "targets": [ 2,3 ],
              "className": "text-center"
            },
            {
              "width": "20%",
              "targets": [ 4 ],
              "className": "text-center"
            },
        ],
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "retrieve": true,
        "ajax": "./inprocess/tableEquipment.php"
    } );

    tableEq.column( '3' ).order( 'DESC' ).draw();

    $("#tableChemical tbody").on("click", "#edBrCh", function () {
      var table = $('#tableChemical').DataTable().row( $(this).parents('tr')  ).data();
      shModalEdBrCh(table['0'], table['1'], table['2'], table['3'], table['4']);
    });

    $("#tableChemical tbody").on("click", "#delBrCh", function () {
      var table = $('#tableChemical').DataTable().row( $(this).parents('tr')  ).data();
      shModaldelBrCh(table['0'], table['1']);
    });

    $("#tableEquipment tbody").on("click", "#edBrEq", function () {
      var table = $('#tableEquipment').DataTable().row( $(this).parents('tr')  ).data();
      shModalEdBrEq(table['0'], table['1'], table['2'], table['3'], table['5']);
    });

    $("#tableEquipment tbody").on("click", "#delBrEq", function () {
      var table = $('#tableEquipment').DataTable().row( $(this).parents('tr')  ).data();
      shModaldelBrEq(table['0'], table['1']);
    });

  });