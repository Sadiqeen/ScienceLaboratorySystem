<?php include './checksession/forLoginPage.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>เข้าสู่ระบบ | ระบบห้องวิทยาศาสตร์ | คณะวิทยาศาตร์ฯ | มหาวิทยาลัยฟาฏอนี</title>
    <link rel="icon" href="./ico.png" type="image/png" >
  	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- ---------------------------------------------- Bootstrap ---------------------------------------------- -->
		<link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./bootflat/css/bootflat.min.css"> -->
		<script src="./bower_components/jquery/dist/jquery.min.js"></script>
		<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- ---------------------------------------------- Fontawnsome ---------------------------------------------- -->
    <link rel="stylesheet" href="./bower_components/font-awesome/css/font-awesome.min.css">
		<style>
      .login-logo {
      font-size: 35px;
      text-align: center;
      margin-bottom: 25px;
      font-weight: 300;
      }
      .login-logo p {
      color: #000;
      }
      .login-page {
      background: url('./dist/img/an-bg.png') no-repeat center center fixed;
      -moz-background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      }
      .login-box {
      width: 360px;
      margin: 10% auto;
      }
      @media (max-width: 768px) {
      .login-box,
      .register-box {
        width: 90%;
        margin-top: 20px;
      }
      }
      .login-box-body{
      background: #fff;
      padding: 20px;
      border-top: 0;
      color: #666;
      }
      .login-box-body .form-control-feedback {
      color: #777;
      }
      .login-box-msg {
      margin: 0;
      text-align: center;
      padding: 0 20px 20px 20px;
      }
		</style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <p><b>Science</b>Laboratory</p>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">กรุณาเข้าสู่ระบบหรือ<a href="src/register/register.php">ลงทะเบียน</a></p>
        <form method="post" onsubmit="login();return false">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="studentId" id="studentId" placeholder="รหัสนักศึกษา" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">เข้าสู่ระบบ</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <script src="./bower_components/bootstrap-notify-master/bootstrap-notify.min.js"></script>
    <script src="./loginPage/login.js"></script>
</body>
</html>
