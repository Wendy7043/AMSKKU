@extends('layouts.appDormitory_Director')

@section('content')
<a class="btn btn-success" href="/Dormitory_Director/createActivity">สร้างกิจกรรม</a>
<div class="row ">
    <div class="col-2">

    </div>
    <a class="btn btn-info" href="/Dormitory_Director/manageActivity">กิจกรรมที่กำลังดำเนินการ</a>
    <a class="btn btn-warning" href="/Dormitory_Director/manageActivity/Outline">เค้าโครงร่างกิจกรรม</a>
    <a class="btn btn-danger" href="/Dormitory_Director/manageActivity/Fell">กิจกรรมที่ไม่อนุมัติ</a>

</div>


<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
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
                @if($data->activityStatus==0)
                <tbody>
                    <td>{{$data->activityId}}</td>
                    <td>{{$data->activityName}}</td>
                    <td>{{$data->activityType}}</td>
                    <td>{{$data->activityPlace}}</td>
                    <td>{{$data->activityStartDate}}</td>
                    <td><a class="btn btn-secondary" href="/activityFile/download/{{$data->activityFile}}">Download</a></td>
                    <td>{{$data->activityStatusName}}</td>
                    <td><a class="btn btn-info" href="/Dormitory_Director/showActivityAdvice/{{$data->activityId}}">ดูคำอธิบาย</a>
                        <a class="btn btn-warning" href="/Dormitory_Director/manageActivity/editActivity/{{$data->activityId}}">แก้ไขกิจกรรม</a>
                        <a class="btn btn-danger" href="/Dormitory_Director/manageActivity/deleteActivity/{{$data->activityId}}">ลบกิจกรรม</a>
                    </td>
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