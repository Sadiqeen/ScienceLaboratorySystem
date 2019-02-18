function shModalAlertCancelBrEq(data) {
    $('#data-arrayEq').val(data);
    $('#ModalAlertCancelBrEq').modal('show');
}

function cancelBrEq(data) {
    if (data === undefined) {
        data = $('#data-arrayEq').val();
        data = data.split(",");
    }

    var jsonString = JSON.stringify(data);

    $.ajax({
        url: './accepted/cancelBrEq.php',
        type: 'post',
        data: {data : jsonString},
        success: function (data) {
            $('#ModalAlertCancelBrEq').modal('hide');
            cancelBrEqRes(data);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function cancelBrEqRes(data) {
  if (data == 1) {
      $('#tableEquipment').DataTable().ajax.reload();
      $.notify({
          title : '<b>ยกเลิกการยืมอุปกรณ์สำเร็จ</b><br>',
          message: 'ระบบได้ยกเลิกรายการอุปกรณ์ที่ท่านเลือกแล้ว',
        }, {
          // settings
          type: 'success',
          delay: 3000,
        });
  } else {
      $.notify({
        title: '<b>มีบางอย่างผิดพลาด</b><br>',
        message: data
      }, {
        // settings
        type: 'danger',
        delay: 3000,
      });
  }
}
