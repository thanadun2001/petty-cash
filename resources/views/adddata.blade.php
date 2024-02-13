@extends('layouts.app')
@section('title', 'Add Data')
@section('content')
    @include('layouts.nav')

    <nav class="navbar navbar-expand-md navbar-light  shadow-sm"
        style="background: linear-gradient(-135deg, #0c8c44, #30b38e);  
       margin:100px;
       height:54px; 
       width:1500px;
       border-radius: 10px;">

        <div class="container">
            <form action="" method="post">
                @csrf
                <div class="col-auto">
                    <img src="{{ URL('image/add.png') }}" style="width: 45px; height: 35px; margin:200px 380px -340px;">
                </div>
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label"
                        style="color: white;  margin:240px 440px 255px; font-size:30px;">ADD DATA สร้างใบเงินสดย่อย</label>
                </div>
            </form>
        </div>
    </nav>
    <!-- form -->
    @csrf
    <nav class="navbar navbar-expand-md navbar-light  " style="margin:-100px 350px -150px; font-size: 12px; width: 1500px;">
        <form action="" name="form" method="POST" enctype="multipart/form-data" id="myForm">
            <div class="row g-3 align-items-center">
                <!-- จ่ายให้แก่ -->
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label"
                        style="color: #287abc;">จ่ายให้แก่(EmpID):</label>
                </div>
                <div class="col-auto">
                    <select class="form-select form-select-sm selectpicker" aria-label="Small select example"
                        style="float: right; width:180px;" name="employee" id="employee" >
                        @foreach ($employee as $item)
                            <option
                                value="{{ $item->EmpID }}:{{ $item->Name }}:{{ $item->LastName }}:{{ $item->Company }}:{{ $item->Department }}:{{ $item->Division }}">
                                {{ $item->EmpID }}:{{ $item->Name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="EmpIDDisplay" class="form-label" style="color: #287abc;" id="EmpIDDisplay"></label>
                    <label for="NameDisplay" class="form-label" style="color: #287abc;" id="NameDisplay"></label>
                    <label for="LastNameDisplay" class="form-label" style="color: #287abc;" id="LastNameDisplay"></label>
                    <label for="CompanyDisplay" class="form-label" style="color: #287abc;" id="CompanyDisplay"></label>
                    <label for="DepartmentDisplay" class="form-label" style="color: #287abc;"
                        id="DepartmentDisplay"></label>
                    <label for="DivisionDisplay" class="form-label" style="color: #287abc;" id="DivisionDisplay"></label>
                </div>

                <!-- Date -->
                @csrf
                <hr style="color: white; margin:-45px 0px; -120px;">
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label " style="color: #287abc;">DATE(วันที่) :</label>
                </div>
                <div class="col-auto">
                    <script>
                        $(function() {
                            $("#datepicker").datepicker({
                                dateFormat: 'yy-mm-dd'
                            });
                        });
                    </script>
                    <input type="text" id="datepicker">
                </div>
                <!-- ผู้ขอเบิก -->
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">ผู้ขอเบิก :</label>
                </div>
                <div class="col-auto">
                    <select class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="employee" id="employee">
                        @foreach ($employee as $item)
                            <option value="{{ $item->EmpID }}">{{ $item->EmpID }}</option>
                        @endforeach
                    </select>
                </div>
                @csrf
                <hr style="color: white; margin:-45px 0px; -120px;">
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">Company :</label>
                </div>
                <div class="col-auto">
                    <select class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="company" id="company">
                        @foreach ($company as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">สาขา Branch:TAP
                        01,ALL 00 </label>
                </div>
                <div class="col-auto">
                    <select class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="branch" id="branch">
                        @foreach ($branch as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">รหัสบัญชี :</label>
                </div>
                <div class="col-auto">
                    <select id="segment" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="segment">
                        @foreach ($segment as $item)
                            <option value="{{ $item->ACCOUNT_NO }}">{{ $item->ACCOUNT_NO }} :
                                {{ $item->ACCOUNT_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <hr style="color: white; margin:-45px 0px; -120px;">
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">COST CENTER
                        :</label>
                </div>
                <div class="col-auto">
                    <select id="costcenter" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="costcenter">
                        @foreach ($costcenter as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">Project :</label>
                </div>
                <div class="col-auto">
                    <select id="project" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="project">
                        @foreach ($project as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">Product :</label>
                </div>
                <div class="col-auto">
                    <select id="product" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="product">
                        @foreach ($product as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <hr style="color: white; margin:-45px 0px; -120px;">
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">BOI :</label>
                </div>
                <div class="col-auto">
                    <select id="bois" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="bois">
                        @foreach ($bois as $boi)
                            <option value="{{ $boi->COMP_NO }}">{{ $boi->COMP_NO }} :
                                {{ $boi->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">Intercompany
                        :</label>
                </div>
                <div class="col-auto">
                    <select id="intercompany" class="form-select form-select-sm" aria-label="Small select example"
                        style="float: right; width:180px;" name="intercompany">
                        @foreach ($intercompany as $boi)
                            <option value="{{ $boi->COMP_NO }}">{{ $boi->COMP_NO }} :
                                {{ $boi->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label" style="color: #287abc;">Reserve :</label>
                </div>
                <div class="col-auto">
                    <select id="reserve" class="form-select form-select-sm" aria-label="Small select example"
                        name="reserve" style="float: right; width:180px;">
                        @foreach ($reserve as $item)
                            <option value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                {{ $item->COMP_NAME }}</option>
                        @endforeach
                    </select>
                </div>

                <hr style="color: white; margin:-45px 0px; -120px; ">
                <div class="col-auto">
                    <label style="color: #287abc; font-weight:bold;" id="mergedValueDisplay">GEN :</label>

                </div>

            </div>
        </form>
    </nav>
    <hr style="margin:150px 100px -130px; font-size: 12px; width: 1500px;">
    <!-- เอาขีดเส้นใต้ออกจาก a -->
    <STYLE TYPE="TEXT/CSS">
        A:link {
            text-decoration: none;
        }

        A:visited {
            text-decoration: none;
        }
    </STYLE>
    @csrf
    <!-- ตารางแสดงผล -->
    <nav class="navbar navbar-expand-md navbar-light  "style="margin: 145px 100px; font-size: 12px; width: 1500px;">
        <table class="table table-bordered">
            <thead>
                <tr style="text-align: center;  padding: .7em .5em .6em; vertical-align: middle;">
                    <td scope="col" style="background-color: #287abc; color:white;">No.</td>
                    <!-- ค้นหา -->

                    <td scope="col" style="background-color: #287abc; color:white;">AccID(รหัส)</td>
                    <div>
                        <td scope="col" style="background-color: #287abc; color:white;">
                            <button type="button" class="btn btn-primary" style="background-color: #2a4d6a">
                                <img src="{{ URL('image/search.png') }}" style="width: 35px; height: 30px;">
                                Find
                            </button>
                            จำนวน <input type="text" id="item_count" class="form-control-sm" style="width: 50px;"
                                onchange="generateRows()">
                            รายการ
                        </td>
                    </div>
<!--โชว์ตารางร input เพื่อให้กรอกข้อมูล -->
                    <td scope="col" style="background-color: #287abc; color:white;">Combination</td>
                    <td scope="col" style="background-color: #287abc; color:white;">INVOICE <br> เลขที่กำกับภาษี</td>
                    <td scope="col" style="background-color: #287abc; color:white;">วันที่ออกใบภาษี <br> ปี-เดือน-วัน
                    </td>
                    <td scope="col" style="background-color: #287abc; color:white;">vat</td>
                    <td scope="col" style="background-color: #287abc; color:white;">ประเภท</td>
                    <td scope="col" style="background-color: #287abc; color:white;">Description <br> รายละเอียด</td>
                    <td scope="col" style="background-color: #287abc; color:white;">Amount <br> เป็นเงิน</td>
                </tr>
            </thead>
            <tbody id="table_body">
                <!-- Table rows will be generated here -->
            </tbody>
        </table>
    </nav>


    <nav class="navbar navbar-expand-md navbar-light  "style="margin: -170px 100px ; font-size: 12px; ">
        <div class="col-auto">
            <label for="exampleFormControlInput1" class="form-label">หากไม่ระบุ
                1.AccID(รหัสบัญชี).2.ประเภท.3.รายละเอียดและ.4.ยอดเงิน รายการนั้นจะไม่บันทึก</label>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light  "style="margin: 130px 1050px ; font-size: 12px; font-weight:bold;">
        <div class="col-auto">
            <label for="exampleFormControlInput1" class="form-label">
                TOTAL(สุทธิ)</label>
        </div>
        <div class="col-auto" style="margin: 0px 430px ; font-size: 12px; font-weight:bold;">
            <label for="exampleFormControlInput1" class="form-label" id="totalLabel">
                0.00 THB</label>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-light  "style="margin: -150px 600px ; font-size: 12px; ">
        <input type="radio" name="CashType" value="IN"> ในวงเงินงบประมาณ
        &nbsp; &nbsp;
        <input type="radio" name="CashType" value="OUT"> นอกงบประมาณ
        &nbsp; &nbsp;
        <input type="radio" name="CashType" value="OVER"> เกินงบประมาณ
    </nav>
    <nav class="navbar navbar-expand-md navbar-light  "style="margin: 150px 10px ; font-size: 12px; ">
        <a href="#"><button type="button" class="btn btn-success"
                style="font-weight:bold; margin:-170px 650px;"><img src="{{ URL('image/save.png') }}" height="29">
                SAVE</button></a>
        &nbsp; &nbsp; &nbsp;
        <a href="/cash"><button type="button" class="btn btn-danger"
                style="font-weight:bold; margin:-170px -650px;"><img src="{{ URL('image/back.png') }}" height="29">
                BACK</button></a>
    </nav>

    <script src="/js/add.js">//ตัวดึงjs</script>
   
    <script>
        // Function to generate table rows
        function generateRows() {
            var count = document.getElementById('item_count').value;
            var tableBody = document.getElementById('table_body');
            var tableValue = document.getElementById('company').value;

            // Clear existing rows
            tableBody.innerHTML = '';

            // Generate new rows
            for (var i = 1; i <= count; i++) {
                var row = `
                    <tr>
                        <td>${i}</td>
                        <td style="color:green;">${tableValue}</td>
                        <td><input type="text" class="form-control form-control-sm" style="color:green;"></td>
                        <td></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm datepicker"></td>
                        <td><input  class=" form-control-sm" type="text" style="width:50px;">%</td>
                        <td>
                            <select class="form-select form-select-sm" aria-label="Small select example"
                                    name="reserve" style="float: right; width:180px;">
                                @foreach ($type as $item)
                                <option selected value="{{ $item->COMP_NO }}">{{ $item->COMP_NO }} :
                                    {{ $item->COMP_NAME }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input class="costInput form-control-sm" type="text" style="width:50px;" onchange="calculateTotal()"> THB</td>
                        <!-- Add more columns as needed -->
                    </tr>
                `;
                tableBody.innerHTML += row;
            }

            // Activate datepicker for new rows
            $('.datepicker').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        }

        // Call generateRows when company value changes
        $('#company').on('change', generateRows);
    </script>
    
@endsection
