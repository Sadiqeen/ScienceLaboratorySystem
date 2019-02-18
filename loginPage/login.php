<?php
  session_start();
  include '../db.php';

  $studentId = isset($_POST['studentId']) ? $_POST['studentId'] : "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";

  if ($result = $mysqli->query("SELECT * FROM user WHERE id = $studentId")) {
    if ($result->num_rows > 0) {
      checkpassword($mysqli, $studentId, $password);
    } else {
      echo json_encode("รหัสนักศึกษาไม่ถูกต้อง", JSON_UNESCAPED_UNICODE );
    }
  } else {
    echo json_encode($result, JSON_UNESCAPED_UNICODE );
  }

  function checkpassword($mysqli, $studentId, $password){
    $result = $mysqli->query("SELECT * FROM user WHERE id = $studentId");
    $result=mysqli_fetch_array($result);
    if (password_verify ($studentId.$password, $result['password'] )){
    	start_session($mysqli, $studentId);
      if ($result['position'] == 1) {
        echo json_encode(1); //admin
      } else {
        echo json_encode(2); //student
      }

    } else {
      echo json_encode("รหัสผ่านไม่ถูกต้อง", JSON_UNESCAPED_UNICODE);
    }
  }

  function start_session($mysqli, $studentId){
    $result = $mysqli->query("SELECT u.id, u.position, u.status, i.fname, i.lname, d.department, p.url, i.skin FROM user_info i, user u, img p, department d WHERE i.department_id = d.id AND i.profile_img = p.id AND u.id = i.user_id AND u.id = '$studentId'");
    $result=mysqli_fetch_array($result);
    $_SESSION["id"] = $studentId;
    $_SESSION["position"] = $result['position'];
    $_SESSION["name"] = $result['fname'].' '.$result['lname'];
    $_SESSION["department"] = $result['department'];
    $_SESSION["profile_img"] = $result['url'];
    $_SESSION["skin"] = $result['skin'];
    $_SESSION['login_time'] = time();
  }

?>
