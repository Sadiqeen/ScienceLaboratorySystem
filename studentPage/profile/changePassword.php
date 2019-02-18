<?php
session_start();
include '../../db.php';

$oldPassword = isset($_POST['oldPassword']) ? $_POST['oldPassword'] : "";
$newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : "";
checkOldPassword($mysqli, $oldPassword, $newPassword);


function checkOldPassword($mysqli, $oldPassword, $newPassword)
{
    $result = $mysqli->query("SELECT * FROM user WHERE id = '".$_SESSION['id']."'");
    $result = mysqli_fetch_array($result);
    if (password_verify($_SESSION['id'].$oldPassword, $result['password'])) {
      updatePassword($mysqli, $newPassword);
    } else {
      echo json_encode("รหัสผ่านไม่ถูกต้อง", JSON_UNESCAPED_UNICODE);
    }
}

function updatePassword($mysqli, $newPassword)
{
  $newPassword = password_hash($_SESSION["id"].$newPassword, PASSWORD_DEFAULT);
  $stmt ="UPDATE `user` SET `password`='$newPassword' WHERE `id` = '".$_SESSION['id']."'";
  if ($mysqli->query($stmt)) {
    echo json_encode(1, JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode($mysqli->query($stmt), JSON_UNESCAPED_UNICODE);
  }
}

?>