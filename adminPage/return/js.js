$(document).ready(function () {
  var tableEq = $('#tableEquipment').DataTable({
    "autoWidth": false,
    "columnDefs": [{
        "targets": [0],
        "visible": false,
        "searchable": false
      },
      {
        "targets": [6, 7, 8, ],
        "visible": false,
      },
      {
        "width": "10%",
        "targets": [5],
      },
      {
        "width": "10%",
        "targets": [1, 3],
        "className": "text-center"
      },
      {
        "targets": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        "className": "text-center"
      },
    ],
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "retrieve": true,
    "ajax": "./return/tableEquipment.php"
  });

  tableEq.column('4').order('asc').draw();

  $("#tableEquipment tbody").on("click", "#allowEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    allowEq(table['0'], table['2']);
  });

  $("#tableEquipment tbody").on("click", "#infoEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    infoBrEq(table['0']);
  });

  $("#tableEquipment tbody").on("click", "#brokenEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    shModalbrokenEq(table['0'], table['2'], table['3']);
  });
});

function dataTogEq(attr, colNo) {
  if ($(attr).hasClass('btn-default')) {
    $(attr).removeClass('btn-default').addClass('btn-warning');
    $('#tableEquipment').DataTable().columns(colNo).visible(true);
  } else {
    $(attr).removeClass('btn-warning').addClass('btn-default');
    $('#tableEquipment').DataTable().columns(colNo).visible(false);
  }
}

function infoBrEq(brId) {
  var data = {
    brId: brId,
  }
  $.ajax({
    url: './req/getInfoEq.php',
    type: 'POST',
    data: $.param(data),
    success: function (data) {
      var data = JSON.parse(data);
      $('#eqId').text(data['0'].equipment_id);
      $('#eqName').text(data['0'].Equipment);
      $('#price').text(data['0'].Price);
      $('#quantity').text(data['0'].qt);
      $('#brand').text(data['0'].Brand);

      $('#studentIdEq').text(data['0'].user_id);
      $('#studentNameEq').text(data['0'].name);
      $('#departmentEq').text(data['0'].department);
      $('#phoneEq').text('0' + data['0'].phone_number);
      $('#emailEq').text(data['0'].email);

      $('#quantEq').text(data['0'].Quantity);
      $('#brDateEq').text(data['0'].borrow_date);
      $('#rtDateEq').text(data['0'].return_date);

      $('#modalInfoBrEq').modal('show');
    },
    error: function (err) {
      console.log(err);
    }
  });
}


function allowEq(brId, eqName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './return/allowReturnEq.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resAllowEq(data, eqName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}

function resAllowEq(data, eqName) {
  if (data == 1) {
    $('#tableEquipment').DataTable().ajax.reload();
    $.notify({
      title: '<b>อนุมัติการยืมสำเร็จ</b><br>',
      message: 'อนุมัติการยืมอุปกรณ์ ' + eqName + ' เรียบร้อยแล้ว',
    }, {
      // settings
      type: 'success',
      delay: 3000,
    });
  } else {
    $.notify({
      title: '<b>มีบางอย่างผิดพลาด</b><br>',
      message: data,
    }, {
      // settings
      type: 'danger',
      delay: 3000,
    });
  }
}

function shModalbrokenEq(brId, eqName, qt) {
  $("#modalbrId").val(brId);
  $("#modaleqName").val(eqName);
  $("#modaleqBrQt").val(qt);
  $("#modaleqBrQt").attr({
    "max": qt
  });
  $("#modalBrokenEq").modal("show");
}

function brokenEq(brId, eqName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './res/brokenEq.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resBrokenEq(data, eqName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });

}

function resBrokenEq(data, eqName) {
  if (data == 1) {
    $('#tableEquipment').DataTable().ajax.reload();
    $.notify({
      title: '<b>บันทึกข้อมูลสำเร็จ</b><br>',
      message: 'บันทึกข้อมูลการคืนของอุปกรณ์ ' + eqName + ' เรียบร้อยแล้ว',
    }, {
      // settings
      type: 'warning',
      delay: 3000,
    });
  } else {
    $.notify({
      title: '<b>มีบางอย่างผิดพลาด</b><br>',
      message: data,
    }, {
      // settings
      type: 'danger',
      delay: 3000,
    });
  }
}

function returnEq() {
  data = {
    brId : $('#modalbrId').val(),
    eqRt : $('#modaleqBrQt').val(),
  }
  $.ajax({
    url: './return/brokenEq.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resAllowEq(data, eqName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}