<div class="modal fade" id="ModalAlertCancelBrCh">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="cancelBrCh();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">ยกเลิกกการยืมที่ได้รับการอนุมัติ</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="data-arrayCh" hidden>
                    <h5 class="text-center">คุณกำลังยกเลิกรายการยืมที่ได้รับการอนุมัติแล้ว กรุณากดยืนยันเพื่อดำเนินการต่อ</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->