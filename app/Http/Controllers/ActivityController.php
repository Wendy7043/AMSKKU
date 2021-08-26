<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function createActivityDormitory_Director()
    {
        return view('auth.Activity.createActivityDormitory_Director');
    }
    public function createActivityDormitory_Chairman()
    {
        return view('auth.Activity.createActivityDormitory_Chairman');
    }
    public function createActivityHead_Information_Unit()
    {
        return view('auth.Activity.createActivityHead_Information_Unit');
    }

    




    public function manageActivityDormitory_Chairman()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityDormitory_Chairman', compact('file'));
    }




    public function approveActivityDormitory_Chairman()
    {
        $file = Activity::all();
        return view('auth.Activity.approveActivityDormitory_Chairman', compact('file'));
    }
    public function approveActivityDirector_Dormitory_Service_Division()
    {
        $file = Activity::all();
        return view('auth.Activity.approveActivityDirector_Dormitory_Service_Division', compact('file'));
    }
    public function approveActivityDormitory_Counselor()
    {
        $file = Activity::all();
        return view('auth.Activity.approveActivityDormitory_Counselor', compact('file'));
    }
    public function approveActivityHead_Dormitory_Service()
    {
        $file = Activity::all();
        return view('auth.Activity.approveActivityHead_Dormitory_Service', compact('file'));
    }


    public function conductActivityDormitory_Director()
    {
        $file = Activity::all();
        return view('auth.Activity.conductActivityDormitory_Director', compact('file'));
    }
    public function conductActivityDormitory_Chairman()
    {
        $file = Activity::all();
        return view('auth.Activity.conductActivityDormitory_Chairman', compact('file'));
    }


    public function viewAllActivityDormitory_Counselor()
    {
        $file = Activity::all();
        return view('auth.Activity.viewAllActivityDormitory_Counselor', compact('file'));
    }
    public function viewAllActivityDirector_Dormitory_Service_Division()
    {
        $file = Activity::all();
        return view('auth.Activity.viewAllActivityDirector_Dormitory_Service_Division', compact('file'));
    }
    public function viewAllActivityHead_Dormitory_Service()
    {
        $file = Activity::all();
        return view('auth.Activity.viewAllActivityHead_Dormitory_Service', compact('file'));
    }



    public function manageActivityAllHead_Information_Unit()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityAllHead_Information_Unit', compact('file'));
    }

    public function submitCreateActivityDormitory_Director(Request $request)
    {
        $data = new Activity;
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $activityFile = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $activityFile);
            $data->activityFile = $activityFile;
        }
        $data->activityName = $request->activityName;
        $data->activityType = $request->activityType;
        $data->activityPlace = $request->activityPlace;
        $data->activityResponsible = $request->activityResponsible;
        $data->activityStartDate = $request->activityStartDate;
        $data->activityEndDate = $request->activityEndDate;
        $data->activityTarget = $request->activityTarget;
        $data->activityBudget = $request->activityBudget;
        $data->activityStatus = 1;
        $data->activityStatusName ='รอประธานหอพักอนุมัติ';
        $data->save();
        return redirect()->back();
    }

    public function submitCreateActivityDormitory_Chairman(Request $request)
    {
        $data = new Activity;
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $activityFile = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $activityFile);
            $data->activityFile = $activityFile;
        }
        $data->activityName = $request->activityName;
        $data->activityType = $request->activityType;
        $data->activityPlace = $request->activityPlace;
        $data->activityResponsible = $request->activityResponsible;
        $data->activityStartDate = $request->activityStartDate;
        $data->activityEndDate = $request->activityEndDate;
        $data->activityTarget = $request->activityTarget;
        $data->activityBudget = $request->activityBudget;
        $data->activityStatus = 2;
        $data->activityStatusName ='รอที่ปรึกษาหอพักอนุมัติ';
        $data->save();
        return redirect()->back();
    }

    public function submitCreateActivityHead_Information_Unit(Request $request)
    {
        $data = new Activity;
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $activityFile = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $activityFile);
            $data->activityFile = $activityFile;
        }
        $data->activityName = $request->activityName;
        $data->activityType = $request->activityType;
        $data->activityPlace = $request->activityPlace;
        $data->activityResponsible = $request->activityResponsible;
        $data->activityStartDate = $request->activityStartDate;
        $data->activityEndDate = $request->activityEndDate;
        $data->activityTarget = $request->activityTarget;
        $data->activityBudget = $request->activityBudget;
        $data->activityStatus = 5;
        $data->activityStatusName ='สร้างโดยกองบริการหอพัก';
        $data->save();
        return redirect()->back();
    }
 


    public function manageActivityDormitory_Director()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityDormitory_Director', compact('file'));
    }

    public function download($activityFile)
    {
        return response()->download('storage/' . $activityFile);
    }


    public function approveDormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.approveDormitory_Chairman', compact('Activity'));
    }
    public function approveDormitory_Counselor($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.approveDormitory_Counselor', compact('Activity'));
    }
    public function approveHead_Dormitory_Service($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.approveHead_Dormitory_Service', compact('Activity'));
    }
    public function approveDirector_Dormitory_Service_Division($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.approveDirector_Dormitory_Service_Division', compact('Activity'));
    }



    public function notapproveDormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.notApproveDormitory_Chairman', compact('Activity'));
    }
    public function notapproveDormitory_Counselor($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.notApproveDormitory_Counselor', compact('Activity'));
    }
    public function notapproveHead_Dormitory_Service($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.notApproveHead_Dormitory_Service', compact('Activity'));
    }
    public function notapproveDirector_Dormitory_Service_Division($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.approveActivity.notApproveDirector_Dormitory_Service_Division', compact('Activity'));
    }



    
    public function submitApproveDormitory_Chairman(Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status =2;
        $activityStatusName = 'รอที่ปรึกษาหอพักอนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }
    public function submitNotApproveDormitory_Chairman(Request $request)
    {
        $status =0;
        $activityStatusName = 'ประธานหอพักไม่อนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request-> activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        

        return back()->with('post_update', 'ไม่อนุมัติสำเร็จแล้ว');
    }

    public function submitApproveDormitory_Counselor(Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status =3;
        $activityStatusName = 'รอหัวหน้าหน่วยบริการหอพักอนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }

    public function submitNotApproveDormitory_Counselor(Request $request)
    {
        $status =0;
        $activityStatusName = 'ที่ปรึกษาหอพักไม่อนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request-> activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'ไม่อนุมัติสำเร็จแล้ว');
    }

    public function submitApproveHead_Dormitory_Service(Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status =4;
        $activityStatusName = 'รอผู้อำนวยการกองบริการหอพักอนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }
    public function submitNotApproveHead_Dormitory_Service(Request $request)
    {
        $status =0;
        $activityStatusName = 'หัวหน้าหน่วยบริการหอพักไม่อนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request-> activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'ไม่อนุมัติสำเร็จแล้ว');
    }
    
    public function submitApproveDirector_Dormitory_Service_Division (Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status =5;
        $activityStatusName = 'อนุมัติสำเร็จ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }

    public function submitNotApproveDirector_Dormitory_Service_Division(Request $request)
    {
        $status =0;
        $activityStatusName = 'ผู้อำนวยการกองบริการหอพักไม่อนุมัติ';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request-> activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', 'ไม่อนุมัติสำเร็จแล้ว');
    }

    public function userConductActivityDormitory_Director($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.ConductActivity.userConductActivityDormitory_Director', compact('Activity'));
    }

    public function userConductActivityDormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.ConductActivity.userConductActivityDormitory_Chairman', compact('Activity'));
    }

    public function scoreConductActivityDormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.ConductActivity.scoreConductActivityDormitory_Chairman', compact('Activity'));
    }



    public function showActivityAdvice_Dormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.showActivityAdvice_Dormitory_Chairman', compact('Activity'));
    }
    public function showActivityAdvice_Dormitory_Director($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.showActivityAdvice_Dormitory_Director', compact('Activity'));
    }

    public function editActivity_Dormitory_Chairman($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.editActivity_Dormitory_Chairman', compact('Activity'));
    }
    public function editActivity_Head_Information_Unit($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.editActivity_Head_Information_Unit', compact('Activity'));
    }
    public function editActivity_Dormitory_Director($activityId)
    {
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.editActivity_Dormitory_Director', compact('Activity'));
    }

    public function submitEditActivity_Dormitory_Director (Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $activityName = $request->file('activityName');
        $activityType = $request->file('activityType');
        $activityPlace = $request->file('activityPlace');
        $activityResponsible = $request->file('activityResponsible');
        $activityStartDate = $request->file('activityStartDate');
        $activityEndDate = $request->file('activityEndDate');
        $activityTarget = $request->file('activityTarget');
        $activityBudget = $request->file('activityBudget');
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityName' => $activityName,
            'activityType' =>  $activityType,
            'activityPlace' => $activityPlace,
            'activityResponsible' =>  $activityResponsible,
            'activityStartDate' => $activityStartDate,
            'activityEndDate' => $activityEndDate,
            'activityTarget' =>  $activityTarget,
            'activityBudget' => $activityBudget
        ]);
        return back()->with('post_update', 'แก้ไขสำเร็จแล้ว');
    }

    public function submitEditActivity_Dormitory_Chairman (Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $activityName = $request->file('activityName');
        $activityType = $request->file('activityType');
        $activityPlace = $request->file('activityPlace');
        $activityResponsible = $request->file('activityResponsible');
        $activityStartDate = $request->file('activityStartDate');
        $activityEndDate = $request->file('activityEndDate');
        $activityTarget = $request->file('activityTarget');
        $activityBudget = $request->file('activityBudget');
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityName' => $activityName,
            'activityType' =>  $activityType,
            'activityPlace' => $activityPlace,
            'activityResponsible' =>  $activityResponsible,
            'activityStartDate' => $activityStartDate,
            'activityEndDate' => $activityEndDate,
            'activityTarget' =>  $activityTarget,
            'activityBudget' => $activityBudget
        ]);
        return back()->with('post_update', 'แก้ไขสำเร็จแล้ว');
    }

    public function submitEditActivity_Head_Information_Unit (Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $activityName = $request->file('activityName');
        $activityType = $request->file('activityType');
        $activityPlace = $request->file('activityPlace');
        $activityResponsible = $request->file('activityResponsible');
        $activityStartDate = $request->file('activityStartDate');
        $activityEndDate = $request->file('activityEndDate');
        $activityTarget = $request->file('activityTarget');
        $activityBudget = $request->file('activityBudget');
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityName' => $activityName,
            'activityType' =>  $activityType,
            'activityPlace' => $activityPlace,
            'activityResponsible' =>  $activityResponsible,
            'activityStartDate' => $activityStartDate,
            'activityEndDate' => $activityEndDate,
            'activityTarget' =>  $activityTarget,
            'activityBudget' => $activityBudget
        ]);
        return back()->with('post_update', 'แก้ไขสำเร็จแล้ว');
    }

    public function deleteActivity_Dormitory_Chairman (Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', 'ลบสำเร็จแล้ว');
    }

    public function deleteActivity_Dormitory_Director(Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', 'ลบสำเร็จแล้ว');
    }
    public function deleteActivityAll_Head_Information_Unit(Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', 'ลบสำเร็จแล้ว');
    }

    public function manageActivityOutlineDormitory_Director()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityOutlineDormitory_Director', compact('file'));
    }
    public function manageActivityFellDormitory_Director()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityFellDormitory_Director', compact('file'));
    }


    
    
    

}
