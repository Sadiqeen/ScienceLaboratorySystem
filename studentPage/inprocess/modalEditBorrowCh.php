<div class="modal fade" id="modalEditBorrowCh">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="edBrCh();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">แก้ไขข้อมูลการยืมสารเคมี</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="edit-brChId" hidden>

                    <label for="chName">ชื่อสารเคมี :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="edit-chName" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="brChDate">วันที่ต้องการยืม :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="edit-brChDate" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="brChCs">ความเข้มข้น :</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0" class="form-control" id="edit-brChCs" required>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="brChQt">ปริมาณ :</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0" class="form-control" placeholder="มิลลิลิตร" id="edit-brChQt" required>
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