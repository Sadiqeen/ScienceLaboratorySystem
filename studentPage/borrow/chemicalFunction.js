function bChCheck(chId, chName) { //Borrow chemical
    var data1 = {
        chId: chId,
    };

    $.ajax({
        url: './borrow/bChCheck.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            bChCheckRes(data, chId, chName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function bChCheckRes(data, chId, chName){
    if (data == 1) {
        $("#chId").val(chId);
        $("#chName").val(chName);
        $("#chBrCs").val("");
        $("#chBrQt").val("");
        $('#modalBorrowCh').modal('show');
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

function bChInsert () {
    chId = $("#chId").val();
    chName = $("#chName").val();
    chBrDate =  $("#chBrDate").val();
    chBrCs = $("#chBrCs").val();
    chBrQt = $("#chBrQt").val();
    var data1 = {
        chId: chId,
        chBrDate: chBrDate,
        chBrCs: chBrCs,
        chBrQt: chBrQt,
    };
    $.ajax({
        url: './borrow/bChInsert.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            $('#modalBorrowCh').modal('hide');
            bChInsertRes(data, chId, chName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function bChInsertRes(data, chId, chName) {
    if (data == 1) {
        $.notify({
            message: 'ระบบได้ส่งการร้องขอสำหรับรายการ<br> ' + chName + ' เรียบร้อยแล้ว'
          }, {
            // settings
            type: 'success',
          });
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