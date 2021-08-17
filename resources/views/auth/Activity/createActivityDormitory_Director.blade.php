@extends('layouts.appDormitory_Director')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('สร้างกิจกรรม') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form action="/Dormitory_Director/createActivity/Submit" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-10">
                                    {{csrf_field()}}
                                    <input type="text" name="activityName" placeholder="ชื่อโครงการ"><br>
                                    <input type="text" name="activityType" placeholder="ลักษณะโครงการ"><br>
                                    <input type="text" name="activityPlace" placeholder="สถานที่ปฏิบัติงาน"><br>
                                    <input type="text" name="activityResponsible" placeholder="หน่วยงานที่รับผิดชอบโครงการ"><br>
                                    ตั้งแต่วันที่<br>
                                    <input type="text" name="activityStartDate" placeholder="วันที่"><br>ถึง<br>
                                    <input type="text" name="activityEndDate" placeholder="วันที่"><br>
                                    <input type="text" name="activityTarget" placeholder="จำนวนเป้าหมายผู้เข้าร่วมโครงการ"><br>
                                    <input type="text" name="activityBudget" placeholder="งบประมาณที่ใช้ดำเนินโครงการ"><br>
                                    <input type="file" name="activityFile">เอกสารประกอบโครงการ<br>
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection