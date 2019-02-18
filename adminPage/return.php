<?php include '../checksession/adminPage.php'; ?>
<?php include './pageInfo.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>รายการอุปกรณ์รอคืน | <?php echo $title; ?></title>
  <link rel="icon" href="../ico.png" type="image/png" >
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../er_components/Ionicons/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition  <?php echo $_SESSION["skin"]; ?> sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">fst</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sciencelab</b>system</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION["profile_img"]; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["name"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION["profile_img"]; ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo $_SESSION["name"]; ?>
                  <small>ฝ่าย <?php echo  $_SESSION["department"]; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo $profilePageLink; ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION["profile_img"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["name"]; ?></p>
          <a>สถานะ : ผู้ดูแลระบบ</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">เมนูหลัก</li>
        <li>
          <a href="<?php echo $menu['dash']; ?>">
            <i class="fa fa-dashboard"></i> <span>หน้าหลัก</span>
          </a>
        </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>ระบบการยืม</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $menu['req']; ?>"><i class="fa fa-circle-o"></i> รายการที่ถูกร้องขอ</a></li>
            <li><a href="<?php echo $menu['res']; ?>"><i class="fa fa-circle-o"></i> รายการรอจำหน่าย</a></li>
            <li  class="active"><a href="<?php echo $menu['return']; ?>"><i class="fa fa-circle-o"></i> รายการอุปกรณ์รอคืน</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-flask"></i>
            <span>สารเคมี</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $menu['mEq']; ?>"><i class="fa fa-circle-o"></i> จัดการสารเคมี</a></li>
            <li><a href="<?php echo $menu['sEq']; ?>"><i class="fa fa-circle-o"></i> ตั้งค่า</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-magnet"></i>
            <span>อุปกรณ์</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $menu['mCh']; ?>"><i class="fa fa-circle-o"></i> จัดการอุปกรณ์</a></li>
            <li><a href="<?php echo $menu['sCh']; ?>"><i class="fa fa-circle-o"></i> ตั้งค่า</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>จัดการผู้ใช้</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $menu['uStd']; ?>"><i class="fa fa-circle-o"></i> นักศึกษา</a></li>
            <li><a href="<?php echo $menu['uAdmin']; ?>"><i class="fa fa-circle-o"></i> ผู้ดูแลระบบ</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo $menu['report']; ?>">
            <i class="fa fa-dashboard"></i> <span>รายงาน</span>
          </a>
        </li>

        <li>
          <a href="<?php echo $menu['profile']; ?>">
            <i class="fa fa-dashboard"></i> <span>แก้ไขโปรไฟล์</span>
          </a>
        </li>

        <li class="header">ติดต่อผู้ดูแลระบบ</li>
        <li>
          <a href="<?php echo ''; ?>">
            <i class="fa fa-envelope"></i> <span>ส่งข้อความถึงผู้ดูแลระบบ</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ระบบการยืม
        <small>รายการอุปกรณ์รอคืน</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li><a href="#">ระบบการยืม</a></li>
        <li class="active">รายการอุปกรณ์รอคืน</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php include './return/mainContent.php'; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    Faculty of Science and Technology | <b>Fatoni University</b>
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a></strong>. System by <strong><a href="https://www.facebook.com/IslamlllGeen">Sadiqeen</a></strong>. All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs"></ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <div class="tab-pane" id="control-sidebar-stats-tab"></div>
      <div class="tab-pane" id="control-sidebar-settings-tab"></div>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../bower_components/bootstrap-notify-master/bootstrap-notify.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="./return/js.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
