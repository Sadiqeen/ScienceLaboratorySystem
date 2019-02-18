<?php
  include '../db.php';
?>
  <!-- Start -->
  <div class="row">
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-body">
          <?php
    $sql = "SELECT * FROM `img`";
    $result = mysqli_query($mysqli,$sql);
    while( $row = mysqli_fetch_array($result) ){
      echo '
      <div class="col-md-3 text-center">
        <img class="profile-user-img img-responsive img-circle" src="'.$row["url"].'">
        <input name="img" type="radio" id="profile_img" value="'.$row["id"].'" />
      </div>
      ';
    }
  ?>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-body">
          <?php include './profile/pageColor.php'; ?>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" onsubmit="profileUpdate();return false">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="studentId">รหัสนักศึกษา</label>
                  <input type="text" class="form-control" id="studentId" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                    <label>สาขาวิชา</label>
                    <select class="form-control" id="department">
                      <?php
                      $sql = "SELECT * FROM `department` WHERE permission = 2";
                      $result = mysqli_query($mysqli,$sql);
                      while( $row = mysqli_fetch_array($result) ){
                        echo '<option value="'.$row['id'].'">'.$row['department'].'</option>';
                      }
                    ?>
                    </select>
                  </div>
                  <!-- <label for="department">สาขาวิชา</label>
                <input type="text" class="form-control" id="department"> -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">ชื่อ</label>
                  <input type="text" class="form-control" id="firstname" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">สกุล</label>
                  <input type="text" class="form-control" id="lastname" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phonenumber">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control" id="phonenumber" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">อีเมลล์</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" class="btn btn-info pull-left" data-toggle="modal" data-target="#modalChangePassword">เปลี่ยนรหัสผ่าน</button>
            <button type="submit" class="btn btn-primary pull-right">อัปเดท</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php include'./profile/modalChangePassword.php' ?>