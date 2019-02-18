function bEqCheck(eqId, eqName) { //Borrow chemical
    var data1 = {
        eqId: eqId,
    };

    $.ajax({
        url: './borrow/bEqCheck.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            bEqCheckRes(data, eqId, eqName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function bEqCheckRes(data, eqId, eqName){ 
    // execute if success
    if (data == 1) {
        $("#eqId").val(eqId);
        $("#eqName").val(eqName);
        $("#eqBrQt").val("");
        $('#modalBorrowEq').modal('show');
    } else {
        $.notify({
          title: 'มีบางอย่างผิดพลาด',
          message: data
        }, {
          // settings
          type: 'danger',
          delay: 3000,
        });
    }
}

function bEqInsert () {
    eqId = $("#eqId").val();
    eqName = $("#eqName").val();
    eqBrDate =  $("#eqBrDate").val();
    eqBrQt = $("#eqBrQt").val();
    var data1 = {
        eqId: eqId,
        eqBrDate: eqBrDate,
        eqBrQt: eqBrQt,
    };
    $.ajax({
        url: './borrow/bEqInsert.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            $('#modalBorrowEq').modal('hide');
            bEqInsertRes(data, eqId, eqName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function bEqInsertRes(data, eqId, eqName) {
    if (data == 1) {
        $.notify({
            message: 'ระบบได้ส่งการร้องขอสำหรับรายการ<br> ' + eqName + ' เรียบร้อยแล้ว'
          }, {
            // settings
            type: 'success',
          });
    } else {
        var data = JSON.parse(data);
        $.notify({
          title: 'มีบางอย่างผิดพลาด',
          message: data
        }, {
          // settings
          type: 'danger',
          delay: 3000,
        });
    }
}