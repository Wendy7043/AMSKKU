<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function creatActivityDormitory_Director()
    {
        return view('auth.Activity.creatActivityDormitory_Director');
    }
    public function creatActivityDormitory_Chairman()
    {
        return view('auth.Activity.creatActivityDormitory_Chairman');
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
        return view('auth.Activity.manageActivityAllHead_Information_Unit');
    }

    public function submitCreatActivityDormitory_Director(Request $request)
    {
        $data = new Activity;
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file = $filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = 1;
        $data->save();
        return redirect()->back();
    }

    public function submitCreatActivityDormitory_Chairman(Request $request)
    {
        $data = new Activity;
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file = $filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = 2;
        $data->save();
        return redirect()->back();
    }



    public function manageActivityDormitory_Director()
    {
        $file = Activity::all();
        return view('auth.Activity.manageActivityDormitory_Director', compact('file'));
    }

    public function download($file)
    {
        return response()->download('storage/' . $file);
    }


    public function approveDormitory_Chairman($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.approveActivity.approveDormitory_Chairman', compact('Activity'));
    }
    public function approveDormitory_Counselor($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.approveActivity.approveDormitory_Counselor', compact('Activity'));
    }
    public function approveHead_Dormitory_Service($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.approveActivity.approveHead_Dormitory_Service', compact('Activity'));
    }
    public function approveDirector_Dormitory_Service_Division($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.approveActivity.approveDirector_Dormitory_Service_Division', compact('Activity'));
    }

    public function submitApproveDormitory_Chairman(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            DB::table('activities')->where('id', $request->id)->update([
                'file' => $filename
            ]);
        }
        $status =2;
        DB::table('activities')->where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $status
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }

    public function submitApproveDormitory_Counselor(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            DB::table('activities')->where('id', $request->id)->update([
                'file' => $filename
            ]);
        }
        $status =3;
        DB::table('activities')->where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $status
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }

    public function submitApproveHead_Dormitory_Service(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            DB::table('activities')->where('id', $request->id)->update([
                'file' => $filename
            ]);
        }
        $status =4;
        DB::table('activities')->where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $status
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }
    
    public function submitApproveDirector_Dormitory_Service_Division (Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            DB::table('activities')->where('id', $request->id)->update([
                'file' => $filename
            ]);
        }
        $status =5;
        DB::table('activities')->where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $status
        ]);
        return back()->with('post_update', 'อนุมัติสำเร็จแล้ว');
    }

    public function userConductActivityDormitory_Director($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.ConductActivity.userConductActivityDormitory_Director', compact('Activity'));
    }

    public function userConductActivityDormitory_Chairman($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.ConductActivity.userConductActivityDormitory_Chairman', compact('Activity'));
    }

    public function scoreConductActivityDormitory_Chairman($id)
    {
        $Activity = DB::table('activities')->where('id', $id)->first();
        return view('auth.ConductActivity.scoreConductActivityDormitory_Chairman', compact('Activity'));
    }
    

}
