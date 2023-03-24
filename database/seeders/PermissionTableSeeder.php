<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'coursetype_create',
            'coursetype_Home',
            'teacher_create',
            'teacher_Home',
            'ReadMore',
            'Home',
            'Manage User',
            'Manage Role',
            'Manager Rols',
            'lang',
            'create Course',
            'join Now',
            'create new user',
            'edit_user',
            'delete_user',
            'create new role',
            'edit_role',
            'delete_role',
            'dashbord',
            'create lesson',
            'show lesson'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
