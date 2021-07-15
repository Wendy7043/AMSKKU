@extends('layouts.appDormitory_Counselor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('กิจกรรม') }}</div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <table class="table"  border="1">
                            <thead>
                                <tr>
                                    <th>รหัสกิจกรรม</th>
                                    <th>ชื่อกิจกรรม</th>
                                    <th>คำอธิบาย</th>
                                    <th>Download</th>
                                    <th>สถานะ</th>
                                    <th>ดำเนินการ</th>
                                </tr>
                            </thead>
                            @foreach($file as $key=>$data)
                            @if($data->status==2)
                            <tbody>
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
                                    <td><a href="/files/download/{{$data->file}}">Download</a></td>
                                    <td>รอที่ปรึกษาหอพักอนุมัติ</td>
                                    <td><a href="/Dormitory_Counselor/approveActivity/approve/{{$data->id}}">อนุมัติ</a> |
                                   <a href="/Dormitory_Counselor/approveActivity/notApprove/{{$data->id}}">ไม่อนุมัติ</a></td>
                                </tr>
                            </tbody>
                            @endif
                            @endforeach
                            </form>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
