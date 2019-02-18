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
            <table id="tableChemical" style="width:100%" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่อสารเคมี</th>
                  <th class="text-center">สูตรเคมี</th>
                  <th class="text-center">ที่เก็บ</th>
                  <th class="text-center">ทำรายการ</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่อสารเคมี</th>
                  <th class="text-center">สูตรเคมี</th>
                  <th class="text-center">ที่เก็บ</th>
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
            <div class="table-responsive">
            <table id="tableEquipment" style="width:100%" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่ออุปกรณ์</th>
                  <th class="text-center">จำนวนที่มี</th>
                  <th class="text-center">ทำรายการ</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th class="text-center">ดัชนี</th>
                  <th class="text-center">รายชื่ออุปกรณ์</th>
                  <th class="text-center">จำนวนที่มี</th>
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

<?php
  include './borrow/modalBorrowEq.php';
  include './borrow/modalBorrowCh.php';
?>
