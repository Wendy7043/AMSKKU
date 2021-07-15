<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function changePasswordStudent()
    {
        return view('auth.ManagerUser.changePasswordStudent'); 
    }
    public function changePasswordDormitory_Director()
    {
        return view('auth.ManagerUser.changePasswordDormitory_Director'); 
    }
    public function changePasswordDormitory_Chairman()
    {
        return view('auth.ManagerUser.changePasswordDormitory_Chairman'); 
    }
    public function changePasswordDormitory_Counselor()
    {
        return view('auth.ManagerUser.changePasswordDormitory_Counselor'); 
    }
    public function changePasswordHead_Dormitory_Service()
    {
        return view('auth.ManagerUser.changePasswordHead_Dormitory_Service'); 
    }
    public function changePasswordDirector_Dormitory_Service_Division()
    {
        return view('auth.ManagerUser.changePasswordDirector_Dormitory_Service_Division'); 
    }
    public function changePasswordHead_Information_Unit()
    {
        return view('auth.ManagerUser.changePasswordHead_Information_Unit'); 
    }
    
    
    
    
    
    

    public function showDataUserStudent()
    {
        return view('auth.ManagerUser.showDataUserStudent');
    }
    public function showDataUserDormitory_Director()
    {
        return view('auth.ManagerUser.showDataUserDormitory_Director');
    }
    public function showDataUserDormitory_Chairman()
    {
        return view('auth.ManagerUser.showDataUserDormitory_Chairman');
    }
    public function showDataUserDormitory_Counselor()
    {
        return view('auth.ManagerUser.showDataUserDormitory_Counselor');
    }
    public function showDataUserHead_Dormitory_Service()
    {
        return view('auth.ManagerUser.showDataUserHead_Dormitory_Service');
    }
    public function showDataUserDirector_Dormitory_Service_Division()
    {
        return view('auth.ManagerUser.showDataUserDirector_Dormitory_Service_Division');
    }
    public function showDataUserHead_Information_Unit()
    {
        return view('auth.ManagerUser.showDataUserHead_Information_Unit');
    }
    
    
    
    
    
    
    

    public function showDataActivityStudent()
    {
        return view('auth.ManagerUser.showDataActivityStudent');
    }
    public function showDataActivityDormitory_Director()
    {
        return view('auth.ManagerUser.showDataActivityDormitory_Director');
    }
    public function showDataActivityDormitory_Chairman()
    {
        return view('auth.ManagerUser.showDataActivityDormitory_Chairman');
    }

    


    public function showDataStudentAllDormitory_Director()
    {
        return view('auth.ManagerUser.showDataStudentAllDormitory_Director');
    }
    public function showDataStudentAllDormitory_Chairman()
    {
        return view('auth.ManagerUser.showDataStudentAllDormitory_Chairman');
    }
    public function showDataStudentAllDormitory_Counselor()
    {
        return view('auth.ManagerUser.showDataStudentAllDormitory_Counselor');
    }
    public function showDataStudentAllHead_Dormitory_Service()
    {
        return view('auth.ManagerUser.showDataStudentAllHead_Dormitory_Service');
    }
    public function showDataStudentAllDirector_Dormitory_Service_Division()
    {
        return view('auth.ManagerUser.showDataStudentAllDirector_Dormitory_Service_Division');
    }





    
    public function manageUserAllHead_Information_Unit()
    {
        return view('auth.ManagerUser.manageUserAllHead_Information_Unit');
    }

    
    
    
    

    
    
}
