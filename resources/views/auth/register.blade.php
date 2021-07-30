@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ - นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                                @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roleName" class="col-md-4 col-form-label text-md-right">{{ __('สิทธิ์ผู้ใช้') }}</label>

                            <div class="col-md-6">
                                <input id="roleName" type="roleName" class="form-control" name="roleName" value="{{ old('roleName') }}" required autocomplete="roleName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userTel" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์') }}</label>

                            <div class="col-md-6">
                                <input id="userTel" type="userTel" class="form-control" name="userTel" value="{{ old('userTel') }}" required autocomplete="userTel">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="studentDegree" class="col-md-4 col-form-label text-md-right">{{ __('ชั้นปี') }}</label>

                            <div class="col-md-6">
                                <input id="studentDegree" type="studentDegree" class="form-control" name="studentDegree" value="{{ old('studentDegree') }}" required autocomplete="studentDegree">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dormitory" class="col-md-4 col-form-label text-md-right">{{ __('หอพัก') }}</label>

                            <div class="col-md-6">
                                <input id="dormitory" type="dormitory" class="form-control" name="dormitory" value="{{ old('dormitory') }}" required autocomplete="dormitory">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dormitoryService" class="col-md-4 col-form-label text-md-right">{{ __('หน่วยบริการหอพัก') }}</label>

                            <div class="col-md-6">
                                <input id="dormitoryService" type="dormitoryService" class="form-control" name="dormitoryService" value="{{ old('dormitoryService') }}" required autocomplete="dormitoryService">
                            </div>
                        </div> 



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
