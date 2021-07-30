<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                #นักศึกษา
                'name' => 'บุญมา ดัตวทฤษ',
                'email' => '1@1',
                'role' => 'Student',
                'password' => bcrypt('1'),
                'tel' =>'0812345678',
                'studentDegree' =>'1',
                'studentFaculty' =>'วิทยาศาสตร์',
                'studentScore' =>'100',
                'dormitory' =>'หอพักชายที่5',
                'dormitoryService' =>'หน่วยบริการหอพักที่5',


            ], [
                #กรรมการหอพัก
                'name' => 'ชาครีย์สร เถกิงศักดิ์',
                'email' => '2@2',
                'role' => 'Dormitory_Director',
                'password' => bcrypt('2'),
                'tel' =>'0812345678',
                'studentDegree' =>'2',
                'studentFaculty' =>'วิศวกรรมศาสตร์',
                'studentScore' =>'100',
                'dormitory' =>'หอพักชายที่22',
                'dormitoryService' =>'หน่วยบริการหอพักที่5',
            ], [
                #ประธานหอพัก
                'name' => 'วเรณย์ กัญจนญากิตติ์',
                'email' => '3@3',
                'role' => 'Dormitory_Chairman',
                'password' => bcrypt('3'),
                'tel' =>'0812345678',
                'studentDegree' =>'3',
                'studentFaculty' =>'นิติศาสตร์',
                'studentScore' =>'100',
                'dormitory' =>'หอพักชายที่11',
                'dormitoryService' =>'หน่วยบริการหอพักที่6',
            ], [
                #ที่ปรึกษาหอพัก
                'name' => 'ธีร์สิรธนัศ ปรีย์สุนาเรศ',
                'email' => '4@4',
                'role' => 'Dormitory_Counselor',
                'password' => bcrypt('4'),
                'tel' =>'0812345678',
                'studentDegree' =>'',
                'studentFaculty' =>'',
                'studentScore' =>'',
                'dormitory' =>'หอพักชายที่11',
                'dormitoryService' =>'หน่วยบริการหอพักที่6',
            ], [
                #หัวหน้าหน่วยบริการหอพัก
                'name' => 'ปัณฑ์ธร คุณัญญา',
                'email' => '5@5',
                'role' => 'Head_Dormitory_Service',
                'password' => bcrypt('5'),
                'tel' =>'0812345678',
                'studentDegree' =>'',
                'studentFaculty' =>'',
                'studentScore' =>'',
                'dormitory' =>'',
                'dormitoryService' =>'หน่วยบริการหอพักที่6',
            ],[
                #ผู้อำนวยการกองบริการหอพัก
                'name' => 'อุตสาหะ ภัคศิณีพิชญ์',
                'email' => '6@6',
                'role' => 'Director_Dormitory_Service_Division',
                'password' => bcrypt('6'),
                'tel' =>'0812345678',
                'studentDegree' =>'',
                'studentFaculty' =>'',
                'studentScore' =>'',
                'dormitory' =>'',
                'dormitoryService' =>'',
            ],[
                #หัวหน้าหน่วยสารสนเทศ
                'name' => 'สิฏฐิณิศา พัทธ์ธนามาศ',
                'email' => '7@7',
                'role' => 'Head_Information_Unit',
                'password' => bcrypt('7'),
                'tel' =>'0812345678',
                'studentDegree' =>'',
                'studentFaculty' =>'',
                'studentScore' =>'',
                'dormitory' =>'',
                'dormitoryService' =>'',
            ]

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
