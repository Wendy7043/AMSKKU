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
        $request->validate([
            'activityName' => 'required ',
            'activityType' => 'required ',
            'activityPlace' => 'required ',
            'activityResponsible' => 'required',
            'activityStartDate' => 'required ',
            'activityEndDate' => 'required ',
            'activityTarget' => 'required ',
            'activityBudget' => 'required ',
            'activityFile' => 'required '
        ]);

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
        $data->activityStatusName = '????????????????????????????????????????????????????????????';
        $data->save();
        return back()->with('post_update', '??????????????????????????????????????????????????????');
    }

    public function submitCreateActivityDormitory_Chairman(Request $request)
    {
        $request->validate([
            'activityName' => 'required ',
            'activityType' => 'required ',
            'activityPlace' => 'required ',
            'activityResponsible' => 'required',
            'activityStartDate' => 'required ',
            'activityEndDate' => 'required ',
            'activityTarget' => 'required ',
            'activityBudget' => 'required ',
            'activityFile' => 'required '
        ]);

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
        $data->activityStatusName = '?????????????????????????????????????????????????????????????????????';
        $data->save();
        return back()->with('post_update', '??????????????????????????????????????????????????????');
    }

    public function submitCreateActivityHead_Information_Unit(Request $request)
    {
        $request->validate([
            'activityName' => 'required ',
            'activityType' => 'required ',
            'activityPlace' => 'required ',
            'activityResponsible' => 'required',
            'activityStartDate' => 'required ',
            'activityEndDate' => 'required ',
            'activityTarget' => 'required ',
            'activityBudget' => 'required ',
            'activityFile' => 'required '
        ]);

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
        $data->activityStatusName = '??????????????????????????????????????????????????????????????????';
        $data->save();
        return back()->with('post_update', '??????????????????????????????????????????????????????');
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
        $request->validate([
            'activityFile' => 'required '
        ]);

        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status = 2;
        $activityStatusName = '?????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '???????????????????????????????????????????????????');
    }

    public function submitNotApproveDormitory_Chairman(Request $request)
    {
        $request->validate([
            'activityAdvice' => 'required '
        ]);
        $status = 0;
        $activityStatusName = '???????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request->activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);


        return back()->with('post_update', '????????????????????????????????????????????????????????????');
    }

    public function submitApproveDormitory_Counselor(Request $request)
    {
        $request->validate([
            'activityFile' => 'required '
        ]);
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status = 3;
        $activityStatusName = '????????????????????????????????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '???????????????????????????????????????????????????');
    }

    public function submitNotApproveDormitory_Counselor(Request $request)
    {
        $request->validate([
            'activityAdvice' => 'required '
        ]);
        $status = 0;
        $activityStatusName = '????????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request->activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '????????????????????????????????????????????????????????????');
    }

    public function submitApproveHead_Dormitory_Service(Request $request)
    {
        $request->validate([
            'activityFile' => 'required '
        ]);
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status = 4;
        $activityStatusName = '??????????????????????????????????????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '???????????????????????????????????????????????????');
    }
    public function submitNotApproveHead_Dormitory_Service(Request $request)
    {
        $request->validate([
            'activityAdvice' => 'required '
        ]);
        $status = 0;
        $activityStatusName = '???????????????????????????????????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request->activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '????????????????????????????????????????????????????????????');
    }

    public function submitApproveDirector_Dormitory_Service_Division(Request $request)
    {
        $request->validate([
            'activityFile' => 'required '
        ]);
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $status = 5;
        $activityStatusName = '???????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '???????????????????????????????????????????????????');
    }

    public function submitNotApproveDirector_Dormitory_Service_Division(Request $request)
    {
        $request->validate([
            'activityAdvice' => 'required '
        ]);
        $status = 0;
        $activityStatusName = '?????????????????????????????????????????????????????????????????????????????????????????????????????????';
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityStatus' => $status,
            'activityAdvice' => $request->activityAdvice,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '????????????????????????????????????????????????????????????');
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


    public function deleteActivity_Dormitory_Chairman(Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', '????????????????????????????????????');
    }

    public function deleteActivity_Dormitory_Director(Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', '????????????????????????????????????');
    }
    public function deleteActivityAll_Head_Information_Unit(Request $request)
    {
        DB::table('activities')->where('activityId', $request->activityId)->delete();
        return back()->with('post_delete', '????????????????????????????????????');
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

    public function submitCreateActivityOutlineDormitory_Director(Request $request)
    {
        $request->validate([
            'activityName' => 'required | max:50',
        ]);

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
        $data->activityStatus = 6;
        $data->activityStatusName = '?????????????????????????????????????????????????????????';
        $data->save();
        return back()->with('post_update', '?????????????????????????????????????????????????????????????????????????????????????????????');
    }


    public function submitEditActivity_DormitorsubmitCreateActivityOutlineEditActivityDormitory_Directory_Director(Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }
        $activityStatus = 1;
        $activityStatusName = '????????????????????????????????????????????????????????????';

        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityName' => $request->activityName,
            'activityType' =>  $request->activityType,
            'activityPlace' => $request->activityPlace,
            'activityResponsible' =>  $request->activityResponsible,
            'activityStartDate' => $request->activityStartDate,
            'activityEndDate' => $request->activityEndDate,
            'activityTarget' =>  $request->activityTarget,
            'activityBudget' => $request->activityBudget,
            'activityStatus' =>  $activityStatus,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '??????????????????????????????????????????????????????????????????');
    }



    public function submitsaveActivityOutlineEditActivityDormitory_Director(Request $request)
    {
        if ($request->file('activityFile')) {
            $activityFile = $request->file('activityFile');
            $filename = time() . '.' . $activityFile->getClientOriginalExtension();
            $request->activityFile->move('storage/', $filename);
            DB::table('activities')->where('activityId', $request->activityId)->update([
                'activityFile' => $filename
            ]);
        }

        $activityStatus = 6;
        $activityStatusName = '?????????????????????????????????????????????????????????';;
        DB::table('activities')->where('activityId', $request->activityId)->update([
            'activityName' => $request->activityName,
            'activityType' =>  $request->activityType,
            'activityPlace' => $request->activityPlace,
            'activityResponsible' =>  $request->activityResponsible,
            'activityStartDate' => $request->activityStartDate,
            'activityEndDate' => $request->activityEndDate,
            'activityTarget' =>  $request->activityTarget,
            'activityBudget' => $request->activityBudget,
            'activityStatus' =>  $activityStatus,
            'activityStatusName' => $activityStatusName
        ]);
        return back()->with('post_update', '?????????????????????????????????????????????????????????????????????????????????????????????');
    }


    public function activityDetailStudent($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailStudent', compact('Activity'));
    }
    public function activityDetailDormitory_Director($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailDormitory_Director', compact('Activity'));
    }
    public function activityDetailDormitory_Chairman($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailDormitory_Chairman', compact('Activity'));
    }
    public function activityDetailDormitory_Counselor($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailDormitory_Counselor', compact('Activity'));
    }
    public function activityDetailHead_Dormitory_Service($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailHead_Dormitory_Service', compact('Activity'));
    }
    public function activityDetailDirector_Dormitory_Service_Division($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailDirector_Dormitory_Service_Division', compact('Activity'));
    }
    public function activityDetailHead_Information_Unit($activityId)
    {
        $file = Activity::all();
        $Activity = DB::table('activities')->where('activityId', $activityId)->first();
        return view('auth.Activity.activityDetailHead_Information_Unit', compact('Activity'));
    }
}
