<div class="modal fade" id="modalChangePassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" onsubmit="checkPass();return false">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">เปลี่ยนรหัสผ่าน</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="oldPassword">รหัสผ่านเก่า</label>
                        <div class="input-group">
                            <input type="password" id="oldPassword" class="form-control" placeholder="กรุณากรอกรหัสผ่านเก่าเพื่อยืนยันตัวตน" required>
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group hass">
                        <label for="newPassword">รหัสผ่านใหม่</label>
                        <div class="input-group">
                            <input type="password" id="newPassword" class="form-control" placeholder="กรุณากรอกรหัสผ่านใหม่" required>
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group hass">
                        <label for="reNewPassword">กรอกรหัสผ่านใหม่อีกครั้ง</label>
                        <div class="input-group">                        
                            <input type="password" id="reNewPassword" class="form-control" placeholder="กรุณากรอกรหัสผ่านใหม่อีกครั้ง" required>
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
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