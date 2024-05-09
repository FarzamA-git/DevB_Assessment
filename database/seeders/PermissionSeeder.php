<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            'name'=>'create-course'
        ]);

        Permission::firstOrCreate([
            'name'=>'edit-course'
        ]);

        Permission::firstOrCreate([
            'name'=>'delete-course'
        ]);

        Permission::firstOrCreate([
            'name'=>'show-course'
        ]);

        $admin=Role::where('name','admin')->first();
        $admin->givePermissionTo([
            'create-course',
            'edit-course',
            'delete-course',
            'show-course'
        ]);

        $teacher=Role::where('name','teacher')->first();
        $teacher->givePermissionTo([
            'create-course',
            'edit-course',
            'delete-course',
            'show-course'
        ]);

        $student=Role::where('name','student')->first();
        $student->givePermissionTo([
            'show-course'
        ]);
    }
}
