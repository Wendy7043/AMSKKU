@extends('layouts.appDormitory_Chairman')

@section('content')
<div class="col-sm-6">
    <h3>   จัดการกิจกรรม 
    </h3>
</div><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('กิจกรรม') }}</div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <table class="table" border="1">
                        <thead>
                                <tr>
                                <th>รหัสกิจกรรม</th>
                                    <th>ชื่อโครงการ</th>
                                    <th>ลักษณะโครงการ</th>
                                    <th>สถานที่ปฏิบัติงาน</th>
                                    <th>หน่วยงานที่รับผิดชอบโครงการ</th>
                                    <th>วันที่เริ่มจัด</th>
                                    <th>ถึงวันที่</th>
                                    <th>จำนวนเป้าหมายผู้เข้าร่วมโครงการ</th>
                                    <th>งบประมาณที่ใช้ดำเนินโครงการ</th>
                                    <th>เอกสารประกอบโครงการ</th>
                                    <th>สถานะโครงการ</th>
                                    <th>ดำเนินการ</th>
                                </tr>
                            </thead>
                            @foreach($file as $key=>$data)
                            <tbody>
                                <tr>
                                <td>{{$data->activityId}}</td>
                                    <td>{{$data->activityName}}</td>
                                    <td>{{$data->activityType}}</td>
                                    <td>{{$data->activityPlace}}</td>
                                    <td>{{$data->activityResponsible}}</td>
                                    <td>{{$data->activityStartDate}}</td>
                                    <td>{{$data->activityEndDate}}</td>
                                    <td>{{$data->activityTarget}}</td>
                                    <td>{{$data->activityBudget}}</td>
                                    <td><a href="/activityFile/download/{{$data->activityFile}}">Download</a></td>
                                    <td>{{$data->activityStatusName}}</td>
                                    <td><a href="/Dormitory_Chairman/showActivityAdvice/{{$data->activityId}}">ดูคำอธิบาย</a> |
                                   <a href="/Dormitory_Chairman/manageActivity/editActivity/{{$data->activityId}}">แก้ไข</a>|
                                   <a href="/Dormitory_Chairman/manageActivity/deleteActivity/{{$data->activityId}}">ลบกิจกรรม</a></td>



                            </tbody>
                            @endforeach
                            </form>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/Dormitory_Chairman/createActivity">สร้างกิจกรรม</a>

@endsection
