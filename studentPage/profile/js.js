$(document).ready(function () {
  profileData();
  $('#phonenumber').inputmask("099-999-9999");

  $('#newPassword, #reNewPassword').on('keyup', function () {
    if ($('#newPassword').val() == $('#reNewPassword').val() && $('#newPassword').val().length > 5) {
      $('.hass').removeClass("has-error").addClass("has-success");
    } else
      $('.hass').removeClass("has-success").addClass("has-error");
  });
});

function checkPass() {
  if ($('#newPassword').val() == $('#reNewPassword').val()) {
    changePassword();
  } else {
    alert('กรุณากรอกรหัสผ่านใหม่ให้ตรงกัน');
  }
}

function profileData() {
  $.ajax({
    url: './profile/profileData.php',
    type: "POST",
    success: function (data) {
      var data = JSON.parse(data);
      $('#studentId').val(data['0'].id);
      document.getElementById('department').value = data['0'].department;
      $('#firstname').val(data['0'].firstname);
      $('#lastname').val(data['0'].lastname);
      $('#phonenumber').val(data['0'].phonenumber);
      $('#email').val(data['0'].email);
      $("input[name=img][value=" + data['0'].profile_img + "]").prop('checked', true);
      $('*[data-skin="' + data['0'].skin + '"]').removeClass("full-opacity-hover").addClass("selectStyle text-danger");
      $("#pIm1, #pIm2, #pIm3").attr("src",data['0'].profile_url);
      $('#dp').text($('#department  option:selected').text());
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}

function profileUpdate() {
  var department = $('#department').val();
  var firstname = $('#firstname').val();
  var lastname = $('#lastname').val();
  var phonenumber = $('#phonenumber').inputmask('unmaskedvalue');
  var email = $('#email').val();
  var profile_img = $('input[name=img]:checked').val()
  var skin = $('.selectStyle').attr('data-skin');
  var data = {
    department: department,
    firstname: firstname,
    lastname: lastname,
    phonenumber: phonenumber,
    email: email,
    profile_img: profile_img,
    skin: skin,
  };
  $.ajax({
    url: './profile/profileUpdate.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      profileUpdateRes(data);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}

function profileUpdateRes(data) {
  if (data == 1) {
    $.notify({
      title: "<b>ข้อมูลโปรไฟล์ได้รับการอัปเดท</b><br>",
      message: "ระบบได้ทำการอัปเดทข้อมูลส่วนตัวของคุณเรียบร้อยแล้ว<br>กรุณาเข้าสู่ระบบอีกครั้งเพื่ออัปเดทข้อมูลในหน้าเว็บไซต์"
    }, {
      type: 'success'
    });
    profileData();
  } else {
    $.notify({
      title: "<b>มีข้อผิดพลาด</b><br>",
      message: data
    }, {
      type: 'danger'
    });
  }
}

function selectStyle(thisStyle) {
  $('.clearHoverStyle').removeClass("selectStyle text-danger").addClass("full-opacity-hover");
  $(thisStyle).removeClass("full-opacity-hover").addClass("selectStyle text-danger");
}

function changePassword() {
  var oldPassword = $('#oldPassword').val();
  var newPassword = $('#newPassword').val();

  var data = {
    oldPassword: oldPassword,
    newPassword: newPassword,
  }

  $.ajax({
    url: './profile/changePassword.php',
    type: "POST",
    data: $.param(data),
    success: function (data) {
      $('#modalChangePassword').modal('hide');
      changePasswordRes(data);
    },
    error: function (err) {
      // execute if error
      console.log(err);
    }
  });
}

function changePasswordRes(data) {
  if (data == 1) {
    $.notify({
      title: "<b>ข้อมูลโปรไฟล์ได้รับการอัปเดท</b><br>",
      message: "ระบบได้ทำการอัปเดทรหัสผ่านเรียบร้อยแล้ว"
    }, {
      type: 'success'
    });
  } else {
    $.notify({
      title: "<b>มีข้อผิดพลาด</b><br>",
      message: data
    }, {
      type: 'danger'
    });
  }
}