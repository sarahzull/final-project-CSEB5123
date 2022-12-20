<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturers = [
            [
                'id'             => 1,
                'name'           => 'Zailani Bte. Ibrahim, Ts.',
            ],
            [
                'id'             => 2,
                'name'           => 'Muhammad Sufyian Bin Mohd Azmi, Ts',
            ],
        ];

        Lecturer::insert($lecturers);
    }
}
