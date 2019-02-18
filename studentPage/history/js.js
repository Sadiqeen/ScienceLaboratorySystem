$(document).ready(function () {
  $('.sidebar-menu').tree();
  getTableChemical();
  getTableEquipment();
});


function getTableChemical() {
  $.ajax({
    url: './history/tableChemical.php',
    type: "POST",
    success: function (data) {
      var data = JSON.parse(data);
      $('#tableChemical').dataTable({
        "autoWidth": false,
        "columnDefs": [
          {
            "targets": [2, 3, 4, 5, 6],
            "className": "text-center",
          },
          {
            "width" : "5%",
            "targets": [0],
            "className": "text-center",
          }
        ],
        responsive: true,
        retrieve: true,
        data: data,
        columns: [{
            'data': 'count'
          },
          {
            'data': 'chemical'
          },
          {
            'data': 'chemical_fomula'
          },
          {
            'data': 'Consentration'
          },
          {
            'data': 'Quantity'
          },
          {
            'data': 'borrow_date'
          },
          {
            'data': 'status'
          }
        ],

      });
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}

function getTableEquipment() {
  $.ajax({
    url: './history/tableEquipment.php',
    type: "POST",
    success: function (data) {
      var data = JSON.parse(data);
      $('#tableEquipment').dataTable({
        "autoWidth": false,
        "columnDefs": [
          {
            "width" : "13%",
            "targets": [2, 3, 4, 5, 6],
            "className": "text-center",
          },
          {
            "width" : "5%",
            "targets": [0],
            "className": "text-center",
          }
        ],
        responsive: true,
        retrieve: true,
        data: data,
        columns: [{
            'data': 'count'
          },
          {
            'data': 'Equipment'
          },
          {
            'data': 'Quantity'
          },
          {
            'data': 'Quantity_return'
          },
          {
            'data': 'borrow_date'
          },
          {
            'data': 'return_date'
          },
          {
            'data': 'status'
          }
        ],

      });
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}