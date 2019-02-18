<div class="modal fade" id="modalBorrowCh">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="bChInsert();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">ทำรายการยืมสารเคมี</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="chId" hidden>

                    <label for="chName">ชื่อสารเคมี :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="chName" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="chBrDate">วันที่ต้องการยืม :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="chBrDate" value="<?php echo date("d/m/Y"); ?>" required>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="chBrCs">ความเข้มข้น :</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0" class="form-control" id="chBrCs" required>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="chBrQt">ปริมาณ :</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0" class="form-control" placeholder="มิลลิลิตร" id="chBrQt" required>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ร้องขอ</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->