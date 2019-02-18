<?php
session_start();
include '../../db.php';

$sql = "SELECT * FROM user_info  WHERE user_id = '".$_SESSION["id"]."'";
$result = mysqli_query($mysqli,$sql);
$dataTableChemical= array();

while( $row = mysqli_fetch_array($result) ){
    $id = $row['user_id'];
    $firstname = $row['fname'];
    $lastname = $row['lname'];
    $department = $row['department_id'];
    $phone_number = $row['phone_number'];
    $email = $row['email'];
    $profile_img = $row['profile_img'];
    $skin = $row['skin'];

    $dataTableChemical[] = array( 'id' => $id,
                                  'firstname' => $firstname,
                                  'lastname' => $lastname,
                                  'department' => $department,
                                  'phonenumber' => $phone_number,
                                  'email' => $email,
                                  'profile_img' => $profile_img,
                                  'skin' => $skin,
                                );
}

// encoding array to json format
echo json_encode($dataTableChemical, JSON_UNESCAPED_UNICODE );

?>
