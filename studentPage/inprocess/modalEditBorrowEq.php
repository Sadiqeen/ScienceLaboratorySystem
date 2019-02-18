<div class="modal fade" id="modalEditBorrowEq">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="edBrEq();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">แก้ไขข้อมูลการยืมอุปกรณ์</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="edit-brEqId" hidden>
                    <input type="text" id="edit-eqId" hidden>

                    <label for="chName">ชื่ออุปกรณ์ :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="edit-eqName" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="brChDate">วันที่ต้องการยืม :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="edit-brEqDate" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="brChQt">จำนวน :</label>
                    <div class="input-group">
                        <input type="number" min="0" class="form-control" id="edit-brEqQt" required>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->