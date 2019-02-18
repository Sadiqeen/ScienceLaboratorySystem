if(window.location.hash == '#success'){
    $.notify({
      // options
      message: "ลงทะเบียนสำเร็จ กรุณาเข้าสู่ระบบเพื่อทำรายการ"
    }, {
      // settings
      type: 'success'
    });
}

function login() {
  var studentId = $("#studentId").val();
  var password = $("#password").val();
  var data1 = {
    studentId: studentId,
    password: password,
  };
  $.ajax({
    type: "POST",
    url: "./loginPage/login.php",
    data: $.param(data1),
    success: function(data) {
      // execute if success
      if (data == 1) {  //admin
        window.location.href='./adminPage/dashboard.php';
      } else if (data == 2) { //student
        window.location.href='./studentPage/dashboard.php';
      } else {
        $("#password").val('');
        $.notify({
          title: 'มีบางอย่างผิดพลาด',
          message: data
        }, {
          // settings
          type: 'danger',
          delay: 3000,
        });
      }
    },
    error: function(err) {
      // execute if error
      alert(err);
    }
  });
}
