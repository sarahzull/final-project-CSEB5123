<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'name' => 'Supervisor',
            ],
            [
                'id'    => 2,
                'name' => 'Examiner',
            ],
            [
                'id'    => 3,
                'name' => 'Student',
            ],
        ];

        Role::insert($roles);
    }
}
