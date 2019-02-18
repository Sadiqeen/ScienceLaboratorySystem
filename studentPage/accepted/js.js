$(document).ready(function () {
  $('.sidebar-menu').tree();
  var tableCh = $('#tableChemical').DataTable({
    select: true,
    language: {
      select: {
        rows: {
          _: "คุณเลือก %d รายการ",
          0: "คลิ๊กที่แถวเพื่อเลือกรายการที่ต้องการ",
          1: "คุณเลือก 1 รายการ"
        }
      }
    },
    "order": [
      [4, " DESC"]
    ],
    "autoWidth": false,
    "columnDefs": [{
        "targets": [0, 6],
        "visible": false,
        "searchable": false
      },
      {
        "width": "15%",
        "targets": [2, 3, 4],
        "className": "text-center",
      },
      {
        "width": "15%",
        "targets": [5],
        "className": "text-center",
      },
    ],
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "retrieve": true,
    "ajax": "./accepted/tableChemical.php"
  });

  var tableEq = $('#tableEquipment').DataTable({
    select: true,
    language: {
      select: {
        rows: {
          _: "คุณเลือก %d รายการ",
          0: "คลิ๊กที่แถวเพื่อเลือกรายการที่ต้องการ",
          1: "คุณเลือก 1 รายการ"
        }
      }
    },
    "order": [
      [3, "DESC"]
    ],
    "autoWidth": false,
    "columnDefs": [{
        "targets": [0, 5],
        "visible": false,
        "searchable": false
      },
      {
        "width": "15%",
        "targets": [2, 3],
        "className": "text-center"
      },
      {
        "width": "20%",
        "targets": [4],
        "className": "text-center"
      },
    ],
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "retrieve": true,
    "ajax": "./accepted/tableEquipment.php"
  });

  // Chemical button's functions

  $('#cfBrCh').click(function () {
    var data = [];
    var countY = 0;
    var dataFromTable = $('#tableChemical').DataTable().rows({
      selected: true
    });
    if (dataFromTable.count() == 0) {
      var dataUnselect = $('#tableChemical').DataTable().rows();
      for (let index = 0; index < dataUnselect.count(); index++) {
        if (dataUnselect.data()[index][6] == 'n') {
          data.push(dataUnselect.data()[index][0]);
        }
      }
      cancelBrCh(data);
    } else {
      for (let index = 0; index < dataFromTable.count(); index++) {
        data.push(dataFromTable.data()[index][0]);
        if (dataFromTable.data()[index][6] == 'y') {
          countY++;
        }
      }
      if (countY > 0) {
        shModalAlertCancelBrCh(data);
      } else {
        cancelBrCh(data);
      }
      $("#cfBrCh").removeClass("btn-danger").addClass('btn-warning');
    }
  });

  tableCh.on('select', function (e, dt, type, indexes) {
    var countY = 0;
    var buttonLabel = '';
    var dataFromTable = $('#tableChemical').DataTable().rows({
      selected: true
    });

    for (let index = 0; index < dataFromTable.count(); index++) {
      if (dataFromTable.data()[index][6] == 'y') {
        countY++;
      }
    }
    $("#cfBrCh").removeClass("btn-warning").addClass('btn-danger');
    if (countY > 0) {
      buttonLabel = 'ลบรายการสารเคมีที่ถูกเลือก';
    } else {
      buttonLabel = 'ลบรายการสารเคมีที่ถูกปฎิเสธ';
    }

    $('#cfBrCh').text(buttonLabel);
  });

  tableCh.on('deselect', function (e, dt, type, indexes) {
    $("#cfBrCh").removeClass("btn-danger").addClass('btn-warning');
    $('#cfBrCh').text('ลบรายการสารเคมีที่ถูกปฎิเสธ');
  });

  // Equipment button's function

  $('#cfBrEq').click(function () {
    var data = [];
    var countY = 0;
    var dataFromTable = $('#tableEquipment').DataTable().rows({
      selected: true
    });
    if (dataFromTable.count() == 0) {
      var dataUnselect = $('#tableEquipment').DataTable().rows();
      for (let index = 0; index < dataUnselect.count(); index++) {
        if (dataUnselect.data()[index][5] == 'n') {
          data.push(dataUnselect.data()[index][0]);
        }
      }
      cancelBrEq(data);
    } else {
      for (let index = 0; index < dataFromTable.count(); index++) {
        data.push(dataFromTable.data()[index][0]);
        if (dataFromTable.data()[index][5] == 'y') {
          countY++;
        }
      }
      if (countY > 0) {
        shModalAlertCancelBrEq(data);
      } else {
        cancelBrEq(data);
      }
      $("#cfBrEq").removeClass("btn-danger").addClass('btn-warning');
    }
  });

  tableEq.on('select', function (e, dt, type, indexes) {
    var countY = 0;
    var buttonLabel = '';
    var dataFromTable = $('#tableEquipment').DataTable().rows({
      selected: true
    });

    for (let index = 0; index < dataFromTable.count(); index++) {
      if (dataFromTable.data()[index][5] == 'y') {
        countY++;
      }
    }
    $("#cfBrEq").removeClass("btn-warning").addClass('btn-danger');
    if (countY > 0) {
      buttonLabel = 'ลบรายการอุปกรณ์ที่ถูกเลือก';
    } else {
      buttonLabel = 'ลบรายการอุปกรณ์ที่ถูกปฎิเสธ';
    }

    $('#cfBrEq').text(buttonLabel);
  });

  tableEq.on('deselect', function (e, dt, type, indexes) {
    $("#cfBrEq").removeClass("btn-danger").addClass('btn-warning');
    $('#cfBrEq').text('ลบรายการอุปกรณ์ที่ถูกปฎิเสธ');
  });


});