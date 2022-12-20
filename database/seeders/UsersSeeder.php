<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('password'),
                'role'           => 'admin'
            ],
            [
                'id'             => 2,
                'name'           => 'Lecturer',
                'email'          => 'lecturer@gmail.com',
                'password'       => bcrypt('password'),
                'role'           => 'lecturer'
            ]
        ];

        User::insert($users);
    }
}
