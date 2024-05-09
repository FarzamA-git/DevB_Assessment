<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin=User::create([
            'id'=>1,
            'name'=>'admin',
            'email'=>'Admin@devbunch.com',
            'password'=>Hash::make('12345678'),
        ]);
        $Admin->assignRole('admin');

        $Teacher=User::create([
            'id'=>2,
            'name'=>'teacher',
            'email'=>'Teacher@devbunch.com',
            'password'=>Hash::make('12345678'),
        ]);
        $Teacher->assignRole('teacher');


        $Student=User::create([
            'id'=>3,
            'name'=>'student',
            'email'=>'Student@devbunch.com',
            'password'=>Hash::make('12345678'),
        ]);
        $Student->assignRole('student');
    }
}
