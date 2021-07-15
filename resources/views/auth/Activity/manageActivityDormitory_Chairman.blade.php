@extends('layouts.appDormitory_Chairman')

@section('content')
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
                                    <th>ลำดับ</th>
                                    <th>ชื่อกิจกรรม</th>
                                    <th>คำอธิบาย</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            @foreach($file as $key=>$data)
                            <tbody>
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>{{$data->status}}</td>



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
