<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use database\Seeders\CreateUserSeeder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.Home');
});

Route::get('Student/home', [App\Http\Controllers\HomeController::class, 'Student'])->name('Student')->middleware('role');
Route::get('Dormitory_Director/home', [App\Http\Controllers\HomeController::class, 'Dormitory_Director'])->name('Dormitory_Director')->middleware('role');
Route::get('Dormitory_Chairman/home', [App\Http\Controllers\HomeController::class, 'Dormitory_Chairman'])->name('Dormitory_Chairman')->middleware('role');
Route::get('Dormitory_Counselor/home', [App\Http\Controllers\HomeController::class, 'Dormitory_Counselor'])->name('Dormitory_Counselor')->middleware('role');
Route::get('Head_Dormitory_Service/home', [App\Http\Controllers\HomeController::class, 'Head_Dormitory_Service'])->name('Head_Dormitory_Service')->middleware('role');
Route::get('Head_Information_Unit/home', [App\Http\Controllers\HomeController::class, 'Head_Information_Unit'])->name('Head_Information_Unit')->middleware('role');
Route::get('Director_Dormitory_Service_Division/home', [App\Http\Controllers\HomeController::class, 'Director_Dormitory_Service_Division'])->name('Director_Dormitory_Service_Division')->middleware('role');


Route::get('/Dormitory_Director/createActivity',[App\Http\Controllers\ActivityController::class, 'creatActivityDormitory_Director'])->name('creatActivityDormitory_Director');
Route::get('/Dormitory_Chairman/createActivity',[App\Http\Controllers\ActivityController::class, 'creatActivityDormitory_Chairman'])->name('creatActivityDormitory_Chairman');

Route::get('/Dormitory_Director/conductActivity',[App\Http\Controllers\ActivityController::class, 'conductActivityDormitory_Director'])->name('conductActivityDormitory_Director');
Route::get('/Dormitory_Chairman/conductActivity',[App\Http\Controllers\ActivityController::class, 'conductActivityDormitory_Chairman'])->name('conductActivityDormitory_Chairman');

Route::get('/Dormitory_Director/manageActivity', [App\Http\Controllers\ActivityController::class, 'manageActivityDormitory_Director'])->name('manageActivityDormitory_Director');
Route::get('/Dormitory_Chairman/manageActivity', [App\Http\Controllers\ActivityController::class, 'manageActivityDormitory_Chairman'])->name('manageActivityDormitory_Chairman');

Route::get('/Dormitory_Chairman/approveActivity', [App\Http\Controllers\ActivityController::class, 'approveActivityDormitory_Chairman'])->name('approveActivityDormitory_Chairman');
Route::get('/Director_Dormitory_Service_Division/approveActivity', [App\Http\Controllers\ActivityController::class, 'approveActivityDirector_Dormitory_Service_Division'])->name('approveActivityDirector_Dormitory_Service_Division');
Route::get('/Dormitory_Counselor/approveActivity', [App\Http\Controllers\ActivityController::class, 'approveActivityDormitory_Counselor'])->name('approveActivityDormitory_Counselor');
Route::get('/Head_Dormitory_Service/approveActivity', [App\Http\Controllers\ActivityController::class, 'approveActivityHead_Dormitory_Service'])->name('approveActivityHead_Dormitory_Service');

Route::get('/Dormitory_Counselor/viewAllActivity', [App\Http\Controllers\ActivityController::class, 'viewAllActivityDormitory_Counselor'])->name('viewAllActivityDormitory_Counselor');
Route::get('/Head_Dormitory_Service/viewAllActivity', [App\Http\Controllers\ActivityController::class, 'viewAllActivityHead_Dormitory_Service'])->name('viewAllActivityHead_Dormitory_Service');
Route::get('/Director_Dormitory_Service_Division/viewAllActivity', [App\Http\Controllers\ActivityController::class, 'viewAllActivityDirector_Dormitory_Service_Division'])->name('viewAllActivityDirector_Dormitory_Service_Division');

Route::get('/Dormitory_Director/showDataStudentAll', [App\Http\Controllers\UserController::class, 'showDataStudentAllDormitory_Director'])->name('showDataStudentAllDormitory_Director');
Route::get('/Dormitory_Chairman/showDataStudentAll', [App\Http\Controllers\UserController::class, 'showDataStudentAllDormitory_Chairman'])->name('showDataStudentAllDormitory_Chairman');
Route::get('/Dormitory_Counselor/showDataStudentAll', [App\Http\Controllers\UserController::class, 'showDataStudentAllDormitory_Counselor'])->name('showDataStudentAllDormitory_Counselor');
Route::get('/Head_Dormitory_Service/showDataStudentAll', [App\Http\Controllers\UserController::class, 'showDataStudentAllHead_Dormitory_Service'])->name('showDataStudentAllHead_Dormitory_Service');
Route::get('/Director_Dormitory_Service_Division/showDataStudentAll', [App\Http\Controllers\UserController::class, 'showDataStudentAllDirector_Dormitory_Service_Division'])->name('showDataStudentAllDirector_Dormitory_Service_Division');

Route::get('/Student/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordStudent'])->name('changePasswordStudent');
Route::get('/Dormitory_Director/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordDormitory_Director'])->name('changePasswordDormitory_Director');
Route::get('/Dormitory_Chairman/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordDormitory_Chairman'])->name('changePasswordDormitory_Chairman');
Route::get('/Dormitory_Counselor/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordDormitory_Counselor'])->name('changePasswordDormitory_Counselor');
Route::get('/Head_Dormitory_Service/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordHead_Dormitory_Service'])->name('changePasswordHead_Dormitory_Service');
Route::get('/Director_Dormitory_Service_Division/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordDirector_Dormitory_Service_Division'])->name('changePasswordDirector_Dormitory_Service_Division');
Route::get('/Head_Information_Unit/changePassword', [App\Http\Controllers\UserController::class, 'changePasswordHead_Information_Unit'])->name('changePasswordHead_Information_Unit');

Route::get('/Student/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserStudent'])->name('showDataUserStudent');
Route::get('/Dormitory_Director/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserDormitory_Director'])->name('showDataUserDormitory_Director');
Route::get('/Dormitory_Chairman/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserDormitory_Chairman'])->name('showDataUserDormitory_Chairman');
Route::get('/Dormitory_Counselor/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserDormitory_Counselor'])->name('showDataUserDormitory_Counselor');
Route::get('/Head_Dormitory_Service/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserHead_Dormitory_Service'])->name('showDataUserHead_Dormitory_Service');
Route::get('/Director_Dormitory_Service_Division/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserDirector_Dormitory_Service_Division'])->name('showDataUserDirector_Dormitory_Service_Division');
Route::get('/Head_Information_Unit/showDataUser', [App\Http\Controllers\UserController::class, 'showDataUserHead_Information_Unit'])->name('showDataUserHead_Information_Unit');

Route::get('/Student/showDataActivity', [App\Http\Controllers\UserController::class, 'showDataActivityStudent'])->name('showDataActivityStudent');
Route::get('/Dormitory_Director/showDataActivity', [App\Http\Controllers\UserController::class, 'showDataActivityDormitory_Director'])->name('showDataActivityDormitory_Director');
Route::get('/Dormitory_Chairman/showDataActivity', [App\Http\Controllers\UserController::class, 'showDataActivityDormitory_Chairman'])->name('showDataActivityDormitory_Chairman');

Route::get('/Head_Information_Unit/manageActivityAll',[App\Http\Controllers\ActivityController::class, 'manageActivityAllHead_Information_Unit'])->name('manageActivityAllHead_Information_Unit');
Route::get('/Head_Information_Unit/manageUserAll', [App\Http\Controllers\UserController::class, 'manageUserAllHead_Information_Unit'])->name('manageUserAllHead_Information_Unit');


Route::get('/files/download/{file}', [App\Http\Controllers\ActivityController::class, 'download'])->name('download');


Route::get('/Dormitory_Chairman/approveActivity/approve/{id}', [App\Http\Controllers\ActivityController::class, 'approveDormitory_Chairman'])->name('approveDormitory_Chairman');
Route::get('/Dormitory_Chairman/approveActivity/notapprove/{id}', [App\Http\Controllers\ActivityController::class, 'notapproveDormitory_Chairman'])->name('notapproveDormitory_Chairman');

Route::get('/Dormitory_Counselor/approveActivity/approve/{id}', [App\Http\Controllers\ActivityController::class, 'approveDormitory_Counselor'])->name('approveDormitory_Counselor');
Route::get('/Dormitory_Counselor/approveActivity/notapprove/{id}', [App\Http\Controllers\ActivityController::class, 'notapproveDormitory_Counselor'])->name('notapproveDormitory_Counselor');

Route::get('/Head_Dormitory_Service/approveActivity/approve/{id}', [App\Http\Controllers\ActivityController::class, 'approveHead_Dormitory_Service'])->name('approveHead_Dormitory_Service');
Route::get('/Head_Dormitory_Service/approveActivity/notapprove/{id}', [App\Http\Controllers\ActivityController::class, 'notaHead_Dormitory_Service'])->name('notaHead_Dormitory_Service');

Route::get('/Director_Dormitory_Service_Division/approveActivity/approve/{id}', [App\Http\Controllers\ActivityController::class, 'approveDirector_Dormitory_Service_Division'])->name('approveDirector_Dormitory_Service_Division');
Route::get('/Director_Dormitory_Service_Division/approveActivity/notapprove/{id}', [App\Http\Controllers\ActivityController::class, 'notDirector_Dormitory_Service_Division'])->name('notDirector_Dormitory_Service_Division');




Route::post('/Dormitory_Chairman/approveActivity/approve/submit', [App\Http\Controllers\ActivityController::class, 'submitApproveDormitory_Chairman'])->name('submitApproveDormitory_Chairman');
Route::post('/Dormitory_Chairman/approveActivity/notapprove/submit', [App\Http\Controllers\ActivityController::class, 'submitNotapproveDormitory_Chairman'])->name('submitNotapproveDormitory_Chairman');

Route::post('/Dormitory_Counselor/approveActivity/approve/submit', [App\Http\Controllers\ActivityController::class, 'submitApproveDormitory_Counselor'])->name('submitApproveDormitory_Counselor');
Route::post('/Dormitory_Counselor/approveActivity/notapprove/submit', [App\Http\Controllers\ActivityController::class, 'submitNotapproveDormitory_Counselor'])->name('submitNotapproveDormitory_Counselor');

Route::post('/Head_Dormitory_Service/approveActivity/approve/submit', [App\Http\Controllers\ActivityController::class, 'submitApproveHead_Dormitory_Service'])->name('submitApproveHead_Dormitory_Service');
Route::post('/Head_Dormitory_Service/approveActivity/notapprove/submit', [App\Http\Controllers\ActivityController::class, 'submitNotaHead_Dormitory_Service'])->name('submitNotaHead_Dormitory_Service');

Route::post('/Director_Dormitory_Service_Division/approveActivity/approve/submit', [App\Http\Controllers\ActivityController::class, 'submitApproveDirector_Dormitory_Service_Division'])->name('submitApproveDirector_Dormitory_Service_Division');
Route::post('/Director_Dormitory_Service_Division/approveActivity/notapprove/submit', [App\Http\Controllers\ActivityController::class, 'submitNotDirector_Dormitory_Service_Division'])->name('submitNotDirector_Dormitory_Service_Division');

Route::post('/Dormitory_Director/createActivity/Submit', [App\Http\Controllers\ActivityController::class, 'submitCreatActivityDormitory_Director'])->name('submitCreatActivityDormitory_Director');
Route::post('/Dormitory_Chairman/createActivity/Submit', [App\Http\Controllers\ActivityController::class, 'submitCreatActivityDormitory_Chairman'])->name('submitCreatActivityDormitory_Chairman');

Route::get('/Dormitory_Director/conductActivity/user/{id}', [App\Http\Controllers\ActivityController::class, 'userConductActivityDormitory_Director'])->name('userConductActivityDormitory_Director');
Route::get('/Dormitory_Chairman/conductActivity/user/{id}', [App\Http\Controllers\ActivityController::class, 'userConductActivityDormitory_Chairman'])->name('userConductActivityDormitory_Chairman');

Route::get('/Dormitory_Chairman/conductActivity/score/{id}', [App\Http\Controllers\ActivityController::class, 'scoreConductActivityDormitory_Chairman'])->name('scoreConductActivityDormitory_Chairman');

Auth::routes();