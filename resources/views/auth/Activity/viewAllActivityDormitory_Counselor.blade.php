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
                                </tr>
                            </thead>
                            @foreach($file as $key=>$data)
                            @if($data->status==5)
                            <tbody>
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->description}}</td>
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
