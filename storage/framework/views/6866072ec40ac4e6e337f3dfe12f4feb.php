
<?php $__env->startSection('title', 'Form Cash'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
        style="background: linear-gradient(-135deg, #6599E8, #4158d0);  
       margin:100px;
       height:150px; 
       width:1500px;
       border-radius: 10px;">
        <div class="container">
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <img src="<?php echo e(URL('image/thairung.png')); ?>" style="width: 90px; height: 65px; margin:-90px">
                <div class="row g-3 align-items-center">
                    <!-- จ่ายให้แก่ -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">จ่ายให้แก่</label>
                    </div>
                    <div class="col-auto">
                        <select id="exampleFormControlInput1" class="form-select form-select-sm"
                            aria-label="Small select example" style="float: right; width:250px;">
                            <option selected>ALL</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <!-- ค่าใช้จ่ายบริษัท -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">ค่าใช้จ่ายบริษัท</label>
                    </div>
                    <div class="col-auto">
                        <select id="exampleFormControlInput1" class="form-select form-select-sm"
                            aria-label="Small select example" style="float: right; width:250px;">
                            <option selected>ALL</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <!-- ฝ่ายงาน -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">ฝ่าย</label>
                    </div>
                    <div class="col-auto">
                        <select id="exampleFormControlInput1" class="form-select form-select-sm"
                            aria-label="Small select example" style="float: right; width:100px;">
                            <option selected>ALL</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <!-- ส่วน -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">ส่วน</label>
                    </div>
                    <div class="col-auto">
                        <select id="exampleFormControlInput1" class="form-select form-select-sm"
                            aria-label="Small select example" style="float: right; width:100px;">
                            <option selected>ALL</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <!-- Status -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">Status</label>
                    </div>
                    <div class="col-auto">
                        <select id="exampleFormControlInput1" class="form-select form-select-sm"
                            aria-label="Small select example" style="float: right; width:180px;">
                            <option selected>ALL</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <!-- วันที่สร้าง -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">วันที่สร้าง</label>
                    </div>
                    <div class="col-auto">
                        <script>
                            // Initialize first datepicker
                            $(function() {
                                $("#datepicker1").datepicker({
                                    dateFormat: 'yy-mm-dd'
                                });
                            });
                    
                            // Initialize second datepicker
                            $(function() {
                                $("#datepicker2").datepicker({
                                    dateFormat: 'yy-mm-dd'
                                });
                            });
                        </script>
                        <input type="text" id="datepicker1">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">-</label>
                        <input type="text" id="datepicker2">
                    </div>
                    <!-- พิมพ์ -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">พิมพ์</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control form-control-sm" type="text" style=" width:50px;">
                    </div>
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">รายการต่อหน้า</label>
                    </div>
                    <!-- user -->
                    <div class="col-auto">
                        <label for="user" class="form-label" style="color: white;  flot: left;"> | ผู้ใช้งาน:
                            |</label>
                    </div>
                    <!-- โชว์ข้อมูลตามจำนวนที่กรอกใส่เข้าไปในinput -->
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">SHOW</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control form-control-sm" type="text" style=" width:50px;">
                    </div>
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">PER-PAGE</label>
                    </div>
                    <!-- reload -->
                    <div class="col-auto">
                        <a href="/cash"><img src="<?php echo e(URL('image/reload.png')); ?>"
                                style="width: 35px; height: 30px;"></a>
                    </div>
                    <!-- กดเพื่อเข้าหน้าสร้างใบเงินสดย่อย -->
                    <div class="col-auto">
                        <a href="/adddata"><img src="<?php echo e(URL('image/add.png')); ?>" style="width: 35px; height: 30px;"></a>
                    </div>
                    <div class="col-auto">
                        <label for="exampleFormControlInput1" class="form-label"
                            style="color: white;  flot: left;">สร้างใบเงินสดย่อย</label>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!-- เอาขีดเส้นใต้ออกจาก a -->
    <STYLE TYPE="TEXT/CSS">
        A:link {
            text-decoration: none;
        }

        A:visited {
            text-decoration: none;
        }
    </STYLE>

    <!-- อะไรไม่รู้เหมือนกัน -->
    <div class="col-auto" style="margin: -100px 100px;">
        <label for="exampleFormControlInput1" class="form-label" style="color: black;  flot: left;">ON/OFF:</label>
        <label><a href="" style="margin: -100px 10px;">Select</a></label>
        <label><a href="" style="margin: -100px 10px;">No.</a></label>
        <label><a href="" style="margin: -100px 10px;">วันที่สร้าง</a></label>
        <label><a href="" style="margin: -100px 10px;">วันที่สั่งจ่าย</a></label>
        <label><a href="" style="margin: -100px 10px;">ค่าใช้จ่ายบริษัท</a></label>
        <label><a href="" style="margin: -100px 10px;">CashID</a></label>
        <label><a href="" style="margin: -100px 10px;">Attach</a></label>
        <label><a href="" style="margin: -100px 10px;">Copy</a></label>
        <label><a href="" style="margin: -100px 10px;">ส่งเรื่องให้บัญชี</a></label>
        <label><a href="" style="margin: -100px 10px;">TOTAL</a></label>
        <label><a href="" style="margin: -100px 10px;">EmpID</a></label>
        <label><a href="" style="margin: -100px 10px;">จ่ายให้แก่</a></label>
        <label><a href="" style="margin: -100px 10px;">Section</a></label>
        <label><a href="" style="margin: -100px 10px;">Division</a></label>
        <label><a href="" style="margin: -100px 10px;">Department</a></label>
        <label><a href="" style="margin: -100px 10px;">Company</a></label>
        <label><a href="" style="margin: -100px 10px;">ผู้ขอเบิก</a></label>
    </div>
    <!-- ปุ่มกด-->
    <button style="margin: 100px 100px; " type="button" class="btn btn-secondary">Copy to dipboard</button>
    <button style="margin: 100px -100px; " type="button" class="btn btn-primary">CSV</button>
    <button style="margin: 100px 100px; " type="button" class="btn btn-success">Excel</button>
    <button style="margin: 100px -100px; " type="button" class="btn btn-danger">PDF</button>
    <button style="margin: 100px 100px; " type="button" class="btn btn-info">Print</button>
    <!-- ค้นหา -->
    <form class="d-flex" role="search" style="margin: -136px 1400px; width:200px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <!-- ตารางแสดงผล -->
    <table class="table table-bordered" style="margin: 145px 100px; font-size: 12px; width: 1500px;">
        <thead>
            <tr style="text-align: center;">
                <td scope="col"><input type="checkbox" name="Alls" onclick="SelAll(this);"></td>
                <td scope="col">No.</td>
                <td scope="col">วันที่สร้าง</td>
                <td scope="col">วันที่สั่งจ่าย</td>
                <td scope="col">ค่าใช้จ่ายบริษัท</td>
                <td scope="col">CashID</td>
                <td scope="col">Attach</td>
                <td scope="col">Copy</td>
                <td scope="col">แก้ไข</td>
                <td scope="col">ส่งเรื่องให้บัญชี</td>
                <td scope="col">TOTAL</td>
                <td scope="col">EmpID</td>
                <td scope="col">จ่ายให้แก่</td>
                <td scope="col">Section</td>
                <td scope="col">Division</td>
                <td scope="col">Department</td>
                <td scope="col">Company</td>
                <td scope="col">ผู้ขอเบิก</td>
            </tr>
        </thead>
        <tbody>
            <tr style="text-align: center;">
                <td valign="top" colspan="18">No data available in table</td>
            </tr>
        </tbody>
        <tfoot>
            <tr style="text-align: center;">
                <td scope="col"></td>
                <td scope="col"></td>
                <td scope="col">วันที่สร้าง</td>
                <td scope="col">วันที่สั่งจ่าย</td>
                <td scope="col">ค่าใช้จ่ายบริษัท</td>
                <td scope="col">CashID</td>
                <td scope="col">Attach</td>
                <td scope="col">Copy</td>
                <td scope="col">แก้ไข</td>
                <td scope="col">ส่งเรื่องให้บัญชี</td>
                <td scope="col">TOTAL</td>
                <td scope="col">EmpID</td>
                <td scope="col">จ่ายให้แก่</td>
                <td scope="col">Section</td>
                <td scope="col">Division</td>
                <td scope="col">Department</td>
                <td scope="col">Company</td>
                <td scope="col">ผู้ขอเบิก</td>
            </tr>
        </tfoot>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\petty-cash-project\resources\views/cash.blade.php ENDPATH**/ ?>