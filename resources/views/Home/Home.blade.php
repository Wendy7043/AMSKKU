@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    ยินดีต้อนรับ<br>
                    ระบบบริหารจัดการกิจกรรมสำหรับหอพักส่วนกลางของมหาวิทยาลัยขอนแก่น<br>
                    Activities management system for central dormitories of Khon Kaen University
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ปฏิทินกิจกรรม') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('กิจกรรมใหม่') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection