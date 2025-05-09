<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create(['teacher_name' => 'John Doe']);
        Teacher::create(['teacher_name' => 'Jane Smith']);
        // Add more teachers as needed
    }
}
