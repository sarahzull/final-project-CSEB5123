<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'access-student' => true,
                'view-student' => true,
                'edit-student' => true,
                'delete-student' => true,
            ]
        ]);
        $lecturer = Role::create([
            'name' => 'Lecturer',
            'slug' => 'lecturer',
            'permissions' => [
                'view-student' => true,
            ]
        ]);
    }
}
