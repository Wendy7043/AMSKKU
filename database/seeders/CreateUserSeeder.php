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
                'name' => 'Student',
                'email' => '1@1',
                'role' => '1',
                'password' => bcrypt('1')
            ], [
                #กรรมการหอพัก
                'name' => 'Dormitory_Director',
                'email' => '2@2',
                'role' => '2',
                'password' => bcrypt('2')
            ], [
                #ประธานหอพัก
                'name' => 'Dormitory_Chairman',
                'email' => '3@3',
                'role' => '3',
                'password' => bcrypt('3')
            ], [
                #ที่ปรึกษาหอพัก
                'name' => 'Dormitory_Counselor',
                'email' => '4@4',
                'role' => '4',
                'password' => bcrypt('4')
            ], [
                #หัวหน้าหน่วยบริการหอพัก
                'name' => 'HeadDormitoryService',
                'email' => '5@5',
                'role' => '5',
                'password' => bcrypt('5')
            ], [
                #หัวหน้าหน่วยสารสนเทศ
                'name' => 'HeadInformationUnit',
                'email' => '6@6',
                'role' => '6',
                'password' => bcrypt('6')
            ], [
                #ผู้อำนวยการกองบริการหอพัก
                'name' => 'DirectorDormitoryServiceDivision',
                'email' => '7@7',
                'role' => '7',
                'password' => bcrypt('7')
            ]

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
