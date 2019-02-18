$(document).ready(function () {
    $('.sidebar-menu').tree();
    $('#tableChemical').DataTable( {
        "order": [[ 1, "asc" ]],
        "autoWidth" : false,
        "columnDefs": [
            {
              "targets": [ 0 ],
              "visible": false,
              "searchable": false
            },
            {
              "width": "20%",
              "targets": [ 2,3,4 ],
              "className": "text-center",
            },
        ],
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "retrieve": true,
        "ajax": "./borrow/tableChemical.php"
    } );

      $('#tableEquipment').DataTable( {
        "order": [[ 1, "asc" ]],
        "autoWidth" : false,
        "columnDefs": [
            {
              "targets": [ 0 ],
              "visible": false,
              "searchable": false
            },
            {
              "width": "25%",
              "targets": [ 2,3 ],
              "className": "text-center"
            },
        ],
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "retrieve": true,
        "ajax": "./borrow/tableEquipment.php"
    } );

    $("#tableChemical tbody").on("click", "#brCh", function () {
      var table = $('#tableChemical').DataTable().row( $(this).parents('tr')  ).data();
      bChCheck(table['0'], table['1']);
    });
    
    $("#tableEquipment tbody").on("click", "#brEq", function () {
      var table = $('#tableEquipment').DataTable().row( $(this).parents('tr')  ).data();
      bEqCheck(table['0'], table['1']);
    });

    $('#chBrDate').datepicker({
      startDate: new Date(),
      autoclose: true,
      format: 'dd/mm/yyyy'
    });

    $('#eqBrDate').datepicker({
      startDate: new Date(),
      autoclose: true,
      format: 'dd/mm/yyyy'
    });

  });