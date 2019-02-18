$(document).ready(function () {
  $('.sidebar-menu').tree();
  var tableCh = $('#tableChemical').DataTable({
    // "autoWidth": false,
    "columnDefs": [{
        "targets": [0],
        "visible": false,
        "searchable": false
      },{
        "targets": [6, 7, 8],
        "visible": false,
      },
      {
        "targets": [1, 2, 3, 4, 5, 6, 7, 8],
        "className": "text-center",
      },
      {
        "width": "20%",
        "targets": [9],
        "className": "text-center",
      },
    ],
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "retrieve": true,
    "ajax": "./req/tableChemical.php"
  });

  tableCh.column('5').order('DESC').draw();

  var tableEq = $('#tableEquipment').DataTable({
    "columnDefs": [{
        "targets": [0],
        "visible": false,
        "searchable": false
      },
      {
        "targets": [6, 7, 8],
        "visible": false,
      },
      {
        "targets": [1, 2, 3, 4, 5, 6, 7, 8, 9],
        "className": "text-center",
      },
      {
        "width": "20%",
        "targets": [9],
        "className": "text-center"
      },
    ],
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "retrieve": true,
    "ajax": "./req/tableEquipment.php"
  });

  tableEq.column('3').order('DESC').draw();

  $("#tableChemical tbody").on("click", "#allowCh", function () {
    var table = $('#tableChemical').DataTable().row($(this).parents('tr')).data();
    allowCh(table['0'], table['2']);
  });

  $("#tableChemical tbody").on("click", "#infoCh", function () {
    var table = $('#tableChemical').DataTable().row($(this).parents('tr')).data();
    infoBrCh(table['0']);
  });

  $("#tableChemical tbody").on("click", "#denyCh", function () {
    var table = $('#tableChemical').DataTable().row($(this).parents('tr')).data();
    denyCh(table['0'], table['2']);
  });

  $("#tableEquipment tbody").on("click", "#allowEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    allowEq(table['0'], table['2']);
  });

  $("#tableEquipment tbody").on("click", "#infoEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    infoBrEq(table['0']);
  });

  $("#tableEquipment tbody").on("click", "#denyEq", function () {
    var table = $('#tableEquipment').DataTable().row($(this).parents('tr')).data();
    denyEq(table['0'], table['2']);
  });

});


function dataTogCh(attr, colNo) {
  if ($(attr).hasClass('btn-default')) {
    $(attr).removeClass('btn-default').addClass('btn-warning');
    $('#tableChemical').DataTable().columns( colNo ).visible( true );
  } else {
    $(attr).removeClass('btn-warning').addClass('btn-default');
    $('#tableChemical').DataTable().columns( colNo ).visible( false );
  }
}

function dataTogEq(attr, colNo) {
  if ($(attr).hasClass('btn-default')) {
    $(attr).removeClass('btn-default').addClass('btn-warning');
    $('#tableEquipment').DataTable().columns( colNo ).visible( true );
  } else {
    $(attr).removeClass('btn-warning').addClass('btn-default');
    $('#tableEquipment').DataTable().columns( colNo ).visible( false );
  }
}

function infoBrEq(brId) {
  var data = {
    brId: brId,
  }
  $.ajax({
    url: './req/getInfoEq.php',
    type: 'POST',
    data : $.param(data),
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
      $('#phoneEq').text('0'+data['0'].phone_number);
      $('#emailEq').text(data['0'].email);

      $('#quantEq').text(data['0'].Quantity);
      $('#brDateEq').text(data['0'].borrow_date);
      $('#rtDateEq').text(data['0'].return_date);

      $('#modalInfoBrEq').modal('show');
    },
    error:function (err) {
      console.log(err);
    }
  });
}

function infoBrCh(brId) {
  var data = {
    brId: brId,
  }
  $.ajax({
    url: './req/getInfoCh.php',
    type: 'POST',
    data : $.param(data),
    success: function (data) {
      var data = JSON.parse(data);
      $('#chId').text(data['0'].chemical_id);
      $('#chName').text(data['0'].chemical);
      $('#chFomula').text(data['0'].chemical_fomula);
      $('#storage').text(data['0'].place);
      $('#expire-date').text(data['0'].expire_date);

      $('#studentId').text(data['0'].studentId);
      $('#studentName').text(data['0'].name);
      $('#department').text(data['0'].department);
      $('#phone').text('0'+data['0'].phone);
      $('#email').text(data['0'].email);

      $('#cons').text(data['0'].consentration);
      $('#quant').text(data['0'].quantity);
      $('#brDate').text(data['0'].borrow_date);

      $('#modalInfoBrCh').modal('show');
    },
    error:function (err) {
      console.log(err);
    }
  });
  
}

function allowEq(brId, eqName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './req/allowBrEq.php',
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

function denyEq(brId, eqName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './req/denyBrEq.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resDenyEq(data, eqName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });

}

function resDenyEq(data, eqName) {
  if (data == 1) {
    $('#tableEquipment').DataTable().ajax.reload();
    $.notify({
      title: '<b>ปฏิเสธการยืมสำเร็จ</b><br>',
      message: 'ปฏิเสธการยืมอุปกรณ์ ' + eqName + ' เรียบร้อยแล้ว',
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

function allowCh(brId, chName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './req/allowBrCh.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resAllowCh(data, chName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });

}

function resAllowCh(data, chName) {
  if (data == 1) {
    $('#tableChemical').DataTable().ajax.reload();
    $.notify({
      title: '<b>อนุมัติการร้องขอสำเร็จ</b><br>',
      message: 'อนุมัติการร้องขอสารเคมี ' + chName + ' เรียบร้อยแล้ว',
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

function denyCh(brId, chName) {
  var data = {
    brId: brId,
  }

  $.ajax({
    url: './req/denyBrCh.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      resDenyCh(data, chName);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });

}

function resDenyCh(data, chName) {
  if (data == 1) {
    $('#tableChemical').DataTable().ajax.reload();
    $.notify({
      title: '<b>ปฏิเสธการยืมสำเร็จ</b><br>',
      message: 'ปฏิเสธการร้องขอสารเคมี ' + chName + ' เรียบร้อยแล้ว',
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