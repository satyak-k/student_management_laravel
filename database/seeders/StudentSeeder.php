<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher1 = Teacher::first();
        $teacher2 = Teacher::skip(1)->first();

        Student::create([
            'student_name' => 'Alice Wonderland',
            'class_teacher_id' => $teacher1->id,
            'class' => '10A',
            'admission_date' => Carbon::parse('2023-09-01'),
            'yearly_fees' => 10000.00,
        ]);
        Student::create([
            'student_name' => 'Bob The Builder',
            'class_teacher_id' => $teacher2->id,
            'class' => '10B',
            'admission_date' => Carbon::parse('2023-09-01'),
            'yearly_fees' => 12000.00,
        ]);
        // Add more students
    }
}
