<?php
session_start();
include '../../db.php';

$department = isset($_POST['department']) ? $_POST['department'] : "";
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
$phonenumber = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$profile_img = isset($_POST['profile_img']) ? $_POST['profile_img'] : "";
$skin = isset($_POST['skin']) ? $_POST['skin'] : "";

$stmt = "UPDATE `user_info` SET
    `fname`='$firstname',
    `lname`='$lastname',
    `profile_img` = '$profile_img',
    `department_id`='$department',
    `phone_number`='$phonenumber',
    `email`='$email', 
    `skin` = '$skin'
    WHERE `user_id` = '".$_SESSION["id"]."'";

if ($mysqli->query($stmt)) {
  updateSession($mysqli);
  echo json_encode(1, JSON_UNESCAPED_UNICODE);
} else {
  echo json_encode($mysqli->query($stmt), JSON_UNESCAPED_UNICODE);
}

function updateSession($mysqli){
  $result = $mysqli->query("SELECT i.fname, i.lname, d.department, p.url, i.skin FROM user_info i,  img p, department d WHERE i.department_id = d.id AND i.profile_img = p.id  AND i.user_id = '".$_SESSION["id"]."'");
  $result=mysqli_fetch_array($result);
  $_SESSION["name"] = $result['fname'].' '.$result['lname'];
  $_SESSION["department"] = $result['department'];
  $_SESSION["profile_img"] = $result['url'];
  $_SESSION["skin"] = $result['skin'];
}

?>
