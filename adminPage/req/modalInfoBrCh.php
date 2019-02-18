<div class="modal fade" id="modalInfoBrCh">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" onsubmit="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">รายละเอียดการขอใช้สารเคมี</h4>
                </div>
                <div class="modal-body">


                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h5>
                                <strong> ข้อมูลสารเคมี</strong>
                            </h5>
                            <table class="table">
                                <tr>
                                    <td>ดัชนี</td>
                                    <td class="text-primary">
                                        <span id="chId"></span>
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td>สารเคมี</td>
                                    <td class="text-primary">
                                        <span id="chName"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>สูตรเคมี</td>
                                    <td class="text-primary">
                                        <span id="chFomula"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ที่เก็บ</td>
                                    <td class="text-primary">
                                        <span id="storage"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>วันหมดอายุ</td>
                                    <td class="text-primary">
                                        <span id="expire-date"></span>
                                    </td>
                                </tr>
                            </table>

                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h5>
                                <strong> ข้อมูลผู้ร้องขอ</strong>
                            </h5>
                            <table class="table">
                                <tr>
                                    <td>รหัสนักศึกษา</td>
                                    <td class="text-primary"><span id="studentId"></span></td>
                                </tr>
                                <tr class="info">
                                    <td>ชื่อ-สกุล</td>
                                    <td class="text-primary"><span id="studentName"></span></td>
                                </tr>
                                <tr>
                                    <td>สาขา</td>
                                    <td class="text-primary"><span id="department"></span></td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์</td>
                                    <td class="text-primary"><span id="phone"></span></td>
                                </tr>
                                <tr>
                                    <td>อีเมลล์</td>
                                    <td class="text-primary"><span id="email"></span></td>
                                </tr>
                            </table>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ปริมาณ</th>
                                            <th class="text-center">ความเข้มข้น</th>
                                            <th class="text-center">วันที่ต้องการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-danger">
                                            <td class="text-center"><span id="cons"></span></td>
                                            <td class="text-center"><span id="quant"></span></td>
                                            <td class="text-center"><span id="brDate"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>