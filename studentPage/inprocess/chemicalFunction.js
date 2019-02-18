function shModalEdBrCh(brChId, chName, brChCs, brChQt, brChDate) {
    $("#edit-brChId").val(brChId);
    $("#edit-chName").val(chName);
    $("#edit-brChDate").val(brChDate);
    $("#edit-brChCs").val(brChCs);
    $("#edit-brChQt").val(brChQt);
    $('#modalEditBorrowCh').modal('show');
}

function shModaldelBrCh(brChId, chName) {
    $("#del-brChId").val(brChId);
    $("#del-chName").text(chName);
    $('#modalDelBorrowCh').modal('show');
}



function edBrCh() {
    var brChId = $("#edit-brChId").val();
    var chName =  $("#edit-chName").val();
    var brChCs = $("#edit-brChCs").val();
    var brChQt = $("#edit-brChQt").val();
    var data1 = {
        brChId: brChId,
        brChCs : brChCs,
        brChQt : brChQt,
    };

    $.ajax({
        url: './inprocess/editBorrowChemical.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            edBrChRes(data, chName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function edBrChRes(data, chName){
    if (data == 1) {
        $('#tableChemical').DataTable().ajax.reload();
        $('#modalEditBorrowCh').modal('hide');
        $.notify({
            title : '<b>แก้ไขสำเร็จ</b><br>',
            message: 'รายการยืมสารเคมี ' + chName + 'ได้รับการแก้ไขเรียบร้อยแล้ว',
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


function delBrCh() {
    var brChId = $("#del-brChId").val();
    var chName = $("#del-chName").text();
    var data1 = {
        brChId: brChId,
    };

    $.ajax({
        url: './inprocess/delBorrowChemical.php',
        type: 'post',
        data: $.param(data1),
        success: function (data) {
            $('#modalDelBorrowCh').modal('hide');
            delBrChRes(data, chName);
        },
        error: function (err) {
            // execute if error
            alert(err);
        }
    });
}

function delBrChRes(data, chName) {
    if (data == 1) {
        $('#tableChemical').DataTable().ajax.reload();
        $.notify({
            title : '<b>ยกเลิกสำเร็จ</b><br>',
            message: 'รายการยืมสารเคมี ' + chName + ' ได้รับการยกเลิกเรียบร้อยแล้ว',
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