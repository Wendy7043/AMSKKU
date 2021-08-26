@extends('layouts.appDormitory_Director')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/Dormitory_Director/createActivity/Submit" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="activityName" class="form-control" placeholder="ชื่อโครงการ"><br>
                    <input type="text" name="activityType" class="form-control" placeholder="ลักษณะโครงการ"><br>
                    <input type="text" name="activityPlace" class="form-control" placeholder="สถานที่ปฏิบัติงาน"><br>
                    <input type="text" name="activityResponsible" class="form-control" placeholder="หน่วยงานที่รับผิดชอบโครงการ"><br>
                    ตั้งแต่วันที่<br>
                    <input type="text" name="activityStartDate" class="form-control" placeholder="วันที่"><br>ถึง<br>
                    <input type="text" name="activityEndDate" class="form-control" placeholder="วันที่"><br>
                    <input type="text" name="activityTarget" class="form-control" placeholder="จำนวนเป้าหมายผู้เข้าร่วมโครงการ"><br>
                    <input type="text" name="activityBudget" class="form-control" placeholder="งบประมาณที่ใช้ดำเนินโครงการ"><br>
                    เอกสารประกอบโครงการ<br><br>
                    <input type="file" name="activityFile"><br><br>
                    <input type="submit" class="btn btn-success" value="สร้างกิจกรรม">
                    <input type="submit" class="btn btn-warning" value="บันทึกร่างโครงการ">

            </form>
        </div>
    </div>
</div>


@endsection