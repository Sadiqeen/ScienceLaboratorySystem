<div class="modal fade" id="modalDelBorrowEq">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="delBrEq();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">ลบข้อมูลการยืมอุปกรณ์</h4>
                </div>
                <div class="modal-body">

                    <input type="text" id="del-brEqId" hidden>
                    <h4 class="text-center">กรุณายืนยันการยกเลิกรายการยืมอุปกรณ์</h4>
                    <p class="text-center">(หลังจากยืนยันระบบจะลบ <span class="text-danger" id="del-eqName"></span> ออกจากรายการร้องขอ) </p>

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