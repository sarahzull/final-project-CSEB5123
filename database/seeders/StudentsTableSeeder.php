<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'id'             => 1,
                'name'           => 'Siti Nursarah Binti Muhd Zulkapli',
                'student_id'          => 'SW01081924',
            ],
            [
                'id'             => 2,
                'name'           => 'Nur Fadlhlin Ellieya Binti Mohd Zainizam',
                'student_id'          => 'SW01081957',
            ],
        ];

        Student::insert($students);
    }
}
