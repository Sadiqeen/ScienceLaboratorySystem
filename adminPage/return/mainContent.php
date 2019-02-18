<!-- Start -->
<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="box">
      <div class="box-header">
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="text-center">
          <div class="btn-group">
            <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 1)">ดัชนี</button>
            <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 2)">รายชื่ออุปกรณ์</button>
            <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 3)">จำนวน</button>
            <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 4)">วันที่ยืม</button>
            <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 5)">วันที่ต้องคืน</button>
            <button type="button" class="btn btn-default" onclick="dataTogEq(this, 6)">รหัสนักศึกษา</button>
            <button type="button" class="btn btn-default" onclick="dataTogEq(this, 7)">ชื่อ</button>
            <button type="button" class="btn btn-default" onclick="dataTogEq(this, 8)">สกุล</button>
          </div>
        </div>
        <div class="table-responsive">
          <table id="tableEquipment" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">ดัชนี</th>
                <th class="text-center">ดัชนี</th>
                <th class="text-center">รายชื่ออุปกรณ์</th>
                <th class="text-center">จำนวน</th>
                <th class="text-center">วันที่ยืม</th>
                <th class="text-center">วันที่ต้องคืน</th>
                <th class="text-center">รหัสนักศึกษา</th>
                <th class="text-center">ชื่อ</th>
                <th class="text-center">สกุล</th>
                <th class="text-center">สถานะ</th>
                <th class="text-center">ทำรายการ</th>
              </tr>
            </thead>
            <tfoot>
              <th class="text-center">ดัชนี</th>
              <th class="text-center">ดัชนี</th>
              <th class="text-center">รายชื่ออุปกรณ์</th>
              <th class="text-center">จำนวน</th>
              <th class="text-center">วันที่ยืม</th>
              <th class="text-center">วันที่ต้องคืน</th>
              <th class="text-center">รหัสนักศึกษา</th>
              <th class="text-center">ชื่อ</th>
              <th class="text-center">สกุล</th>
              <th class="text-center">สถานะ</th>
              <th class="text-center">ทำรายการ</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <!-- /.col -->
</div>

<?php include './req/modalInfoBrEq.php' ?>
<?php include './return/modalReturnEq.php' ?>