@extends('layouts.appHead_Information_Unit')

@section('content')
<a class="btn btn-success" href="/Head_Information_Unit/createActivity">สร้างกิจกรรม</a>
<div class="row ">
    <div class="col-2">

    </div>
    <a class="btn btn-secondary" href="/Dormitory_Chairman/manageActivity">กิจกรรมทั้งหมด</a>
    <a class="btn btn-info" href="/Dormitory_Chairman/manageActivity">กิจกรรมที่ผ่านการอนุมัติ</a>
    <a class="btn btn-danger" href="/Dormitory_Chairman/manageActivity/Fell">กิจกรรมที่ไม่อนุมัติ</a>
    <a class="btn btn-warning" href="/Dormitory_Chairman/manageActivity/Outline">เค้าโครงร่างกิจกรรม</a>


</div>


<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped w-auto">
                <thead>
                    <tr class="table-primary ">
                        <th scope="row">รหัสกิจกรรม</th>
                        <th>ชื่อโครงการ</th>
                        <th>ลักษณะโครงการ</th>
                        <th>สถานที่ปฏิบัติงาน</th>
                        <th>วันที่จัดกิจกรรม</th>
                        <th>เอกสารประกอบโครงการ</th>
                        <th>สถานะโครงการ</th>
                        <th>ดำเนินการ</th>
                    </tr>
                </thead>
                @foreach($file as $key=>$data)
                @if($data->activityStatus==1||$data->activityStatus==2||$data->activityStatus==3||$data->activityStatus==4||$data->activityStatus==5)
                <tbody>
                    <td>{{$data->activityId}}</td>
                    <td>{{$data->activityName}}</td>
                    <td>{{$data->activityType}}</td>
                    <td>{{$data->activityPlace}}</td>
                    <td>{{$data->activityStartDate}}</td>
                    <td><a class="btn btn-secondary" href="/activityFile/download/{{$data->activityFile}}">ดาวน์โหลด</a></td>
                    <td>{{$data->activityStatusName}}</td>
                    <td><a class="btn btn-secondary" href="">ดูรายละเอียด</a></td>

                </tbody>
                @endif
                @endforeach
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@endsection
