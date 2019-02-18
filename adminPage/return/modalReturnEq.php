<div class="modal fade" id="modalBrokenEq">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="returnEq();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">ทำรายการยืมอุปกรณ์</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="modalbrId" hidden>

                    <label for="eqName">ชื่ออุปกรณ์ :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="modaleqName" readonly>
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <br>

                    <label for="modaleqBrQt">จำนวนที่เหลือ :</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0" class="form-control" id="modaleqBrQt" required >
                        <span class="input-group-addon">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">ร้องขอ</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->