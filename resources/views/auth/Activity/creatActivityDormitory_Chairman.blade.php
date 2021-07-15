@extends('layouts.appDormitory_Chairman')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('สร้างกิจกรรม') }}</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <form action="/Dormitory_Chairman/createActivity/Submit" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-10">
                                    {{csrf_field()}}
                                    <input type="text" name="title" placeholder="ชื่อกิจกรรม"><br>
                                    <input type="text" name="description" placeholder="รายละเอียดกิจกรรม"><br>
                                    <input type="file" name="file"><br>
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
