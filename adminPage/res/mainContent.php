<!-- Start -->
<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs nav-justified">
        <li class="active">
          <a href="#tabTableChemical" data-toggle="tab">สารเคมี</a>
        </li>
        <li>
          <a href="#tabTableEquipment" data-toggle="tab">อุปกรณ์</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tabTableChemical">
          <!-- tableChemical -->

          <div class="box-body">
            <div class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-warning" onclick="dataTogCh(this, 1)">ดัชนี</button>
                <button type="button" class="btn btn-warning" onclick="dataTogCh(this, 2)">รายชื่อสารเคมี</button>
                <button type="button" class="btn btn-warning" onclick="dataTogCh(this, 3)">ความเข้มข้น</button>
                <button type="button" class="btn btn-warning" onclick="dataTogCh(this, 4)">ปริมาณ</button>
                <button type="button" class="btn btn-warning" onclick="dataTogCh(this, 5)">วันที่ยืม</button>
                <button type="button" class="btn btn-default" onclick="dataTogCh(this, 6)">รหัสนักศึกษา</button>
                <button type="button" class="btn btn-default" onclick="dataTogCh(this, 7)">ชื่อ</button>
                <button type="button" class="btn btn-default" onclick="dataTogCh(this, 8)">สกุล</button>
              </div>
            </div>
            <br>
            <div class="table-responsive">
              <table id="tableChemical" style="width:100%" class="table table-bordered table-striped ">
                <thead>
                  <tr>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">รายชื่อสารเคมี</th>
                    <th class="text-center">ความเข้มข้น</th>
                    <th class="text-center">ปริมาณ</th>
                    <th class="text-center">วันที่ยืม</th>
                    <th class="text-center">รหัสนักศึกษา</th>
                    <th class="text-center">ชื่อ</th>
                    <th class="text-center">สกุล</th>
                    <th class="text-center">ทำรายการ</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">รายชื่อสารเคมี</th>
                    <th class="text-center">ความเข้มข้น</th>
                    <th class="text-center">ปริมาณ</th>
                    <th class="text-center">วันที่ยืม</th>
                    <th class="text-center">รหัสนักศึกษา</th>
                    <th class="text-center">ชื่อ</th>
                    <th class="text-center">สกุล</th>
                    <th class="text-center">ทำรายการ</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

          <!-- tableChemical -->
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tabTableEquipment">
          <!-- tableEquipment -->

          <div class="box-body">
            <div class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 1)">ดัชนี</button>
                <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 2)">รายชื่ออุปกรณ์</button>
                <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 3)">จำนวน</button>
                <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 4)">วันที่ยืม</button>
                <button type="button" class="btn btn-warning" onclick="dataTogEq(this, 5)">ต้องคืนภายในวันที่</button>
                <button type="button" class="btn btn-default" onclick="dataTogEq(this, 6)">รหัสนักศึกษา</button>
                <button type="button" class="btn btn-default" onclick="dataTogEq(this, 7)">ชื่อ</button>
                <button type="button" class="btn btn-default" onclick="dataTogEq(this, 8)">สกุล</button>
              </div>
            </div>
            <br>
            <div class="table-responsive">
              <table id="tableEquipment" style="width:100%" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">รายชื่ออุปกรณ์</th>
                    <th class="text-center">จำนวน</th>
                    <th class="text-center">วันที่ยืม</th>
                    <th class="text-center">ต้องคืนภายในวันที่</th>
                    <th class="text-center">รหัสนักศึกษา</th>
                    <th class="text-center">ชื่อ</th>
                    <th class="text-center">สกุล</th>
                    <th class="text-center">ทำรายการ</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">ดัชนี</th>
                    <th class="text-center">รายชื่ออุปกรณ์</th>
                    <th class="text-center">จำนวน</th>
                    <th class="text-center">วันที่ยืม</th>
                    <th class="text-center">ต้องคืนภายในวันที่</th>
                    <th class="text-center">รหัสนักศึกษา</th>
                    <th class="text-center">ชื่อ</th>
                    <th class="text-center">สกุล</th>
                    <th class="text-center">ทำรายการ</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

          <!-- tableChemical -->
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
  </div>

  <!-- /.col -->
</div>

<?php include './req/modalInfoBrCh.php' ?>
<?php include './req/modalInfoBrEq.php' ?>