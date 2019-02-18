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
          <div class="table-responsive">
            <div class="col-md-12">
              <button class="btn btn-warning btn-block  btn-flat" id="cfBrCh">ลบรายการข้อมูลสารเคมีที่ถูกปฏิเสธ</button>
              <br>
            </div>
            <table id="tableChemical" style="width:100%" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่อสารเคมี</th>
                  <th class="text-center">ความเข้มข้น</th>
                  <th class="text-center">ปริมาณ</th>
                  <th class="text-center">วันที่ยืม</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่อสารเคมี</th>
                  <th class="text-center">ความเข้มข้น</th>
                  <th class="text-center">ปริมาณ</th>
                  <th class="text-center">วันที่ยืม</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                  <th class="text-center">ผลการดำเนินการ</th>
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
          <div class="table-responsive">
            <div class="col-md-12">
              <button class="btn btn-warning btn-block  btn-flat" id="cfBrEq">ลบรายการข้อมูลอุปกรณ์ที่ถูกปฏิเสธ</button>
              <br>
            </div>
            <table id="tableEquipment" style="width:100%" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่ออุปกรณ์</th>
                  <th class="text-center">จำนวน</th>
                  <th class="text-center">วันที่ยืม</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่ออุปกรณ์</th>
                  <th class="text-center">จำนวน</th>
                  <th class="text-center">วันที่ยืม</th>
                  <th class="text-center">ผลการดำเนินการ</th>
                  <th class="text-center">ผลการดำเนินการ</th>
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

<?php
include './accepted/modalAlertCancelBrCh.php';
include './accepted/modalAlertCancelBrEq.php';
?>