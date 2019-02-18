function shModalAlertCancelBrCh(data) {
    $('#data-arrayCh').val(data);
    $('#ModalAlertCancelBrCh').modal('show');
}

function cancelBrCh(data) {
    if (data === undefined) {
        data = $('#data-arrayCh').val();
        data = data.split(",");
    }
    var jsonString = JSON.stringify(data);

    $.ajax({
        url: './accepted/cancelBrCh.php',
        type: 'post',
        data: {data : jsonString},
        success: function (data) {
            $('#ModalAlertCancelBrCh').modal('hide');
            cancelBrChRes(data);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function cancelBrChRes(data) {
  if (data == 1) {
      $('#tableChemical').DataTable().ajax.reload();
      $.notify({
          title : '<b>ยกเลิกการยืมสารเคมีสำเร็จ</b><br>',
          message: 'ระบบได้ยกเลิกรายการสารเคมีที่ท่านเลือกแล้ว',
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
