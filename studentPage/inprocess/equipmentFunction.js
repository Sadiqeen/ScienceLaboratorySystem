function shModalEdBrEq(brEqId, eqName, brEqQt, brEqDate, eqId) {
    $("#edit-brEqId").val(brEqId);
    $("#edit-eqId").val(eqId);
    $("#edit-eqName").val(eqName);
    $("#edit-brEqDate").val(brEqDate);
    $("#edit-brEqQt").val(brEqQt);
    $('#modalEditBorrowEq').modal('show');
}

function shModaldelBrEq(brEqId, eqName) {
    $("#del-brEqId").val(brEqId);
    $("#del-eqName").text(eqName);
    $('#modalDelBorrowEq').modal('show');
}

function edBrEq() {
    var brEqId = $("#edit-brEqId").val();
    var eqId = $("#edit-eqId").val();
    var eqName =  $("#edit-eqName").val();
    var brEqQt = $("#edit-brEqQt").val();
    var data1 = {
        brEqId: brEqId,
        eqId : eqId,
        brEqQt : brEqQt,
    };

    $.ajax({
        url: './inprocess/editBorrowEquipment.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            $('#modalEditBorrowEq').modal('hide');
            edBrEqRes(data, eqName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function edBrEqRes(data, eqName){
    if (data == 1) {
        $('#tableEquipment').DataTable().ajax.reload();
        $.notify({
            title : '<b>แก้ไขสำเร็จ</b><br>',
            message: 'รายการยืมอุปกรณ์ ' + eqName + ' ได้รับการแก้ไขเรียบร้อยแล้ว',
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


function delBrEq() {
    var brEqId = $("#del-brEqId").val();
    var eqName = $("#del-eqName").text();
    var data1 = {
        brEqId: brEqId,
    };

    $.ajax({
        url: './inprocess/delBorrowEquipment.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            delBrEqRes(data, eqName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function delBrEqRes(data, eqName) {
    if (data == 1) {
        $('#tableEquipment').DataTable().ajax.reload();
        $('#modalDelBorrowEq').modal('hide');
        $.notify({
            title : '<b>ยกเลิกสำเร็จ</b><br>',
            message: 'รายการยืมอุปกรณ์ ' + eqName + 'ได้รับการยกเลิกเรียบร้อยแล้ว',
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