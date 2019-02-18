<div class="modal fade" id="modalInfoBrEq">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" onsubmit="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">รายละเอียดการขอยืมอุปกรณ์</h4>
                </div>
                <div class="modal-body">


                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h5>
                                <strong> ข้อมูลอุปกรณ์</strong>
                            </h5>
                            <table class="table">
                                <tr>
                                    <td>ดัชนี</td>
                                    <td class="text-primary">
                                        <span id="eqId"></span>
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td>อุปกรณ์</td>
                                    <td class="text-primary">
                                        <span id="eqName"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ราคาต่อชิ้น</td>
                                    <td class="text-primary">
                                        <span id="price"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>จำนวนที่มีอยู่</td>
                                    <td class="text-primary">
                                        <span id="quantity"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>เครื่องหมายการค้า</td>
                                    <td class="text-primary">
                                        <span id="brand"></span>
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
                                    <td class="text-primary"><span id="studentIdEq"></span></td>
                                </tr>
                                <tr class="info">
                                    <td>ชื่อ-สกุล</td>
                                    <td class="text-primary"><span id="studentNameEq"></span></td>
                                </tr>
                                <tr>
                                    <td>สาขา</td>
                                    <td class="text-primary"><span id="departmentEq"></span></td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์</td>
                                    <td class="text-primary"><span id="phoneEq"></span></td>
                                </tr>
                                <tr>
                                    <td>อีเมลล์</td>
                                    <td class="text-primary"><span id="emailEq"></span></td>
                                </tr>
                            </table>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">จำนวนที่ต้องการ</th>
                                            <th class="text-center">วันที่ต้องการ</th>
                                            <th class="text-center">ต้องคืนก่อนวันที่</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-danger">
                                            <td class="text-center"><span id="quantEq"></span></td>
                                            <td class="text-center"><span id="brDateEq"></span></td>
                                            <td class="text-center"><span id="rtDateEq"></span></td>
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