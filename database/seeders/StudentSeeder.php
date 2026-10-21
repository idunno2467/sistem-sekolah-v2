<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['nis' => '1234', 'name' => 'Michelle Nathaliu', 'gender' => 'Perempuan', 'class' => 'XII TKJ 3', 'major' => 'TKJ'],
            ['nis' => '1233', 'name' => 'Michelle Nathaliu 123', 'gender' => 'Perempuan', 'class' => 'XII AKL', 'major' => 'AKL'],
        ];

        Student::upsert($students, ['nis'], ['name', 'gender', 'class', 'major']);
    }
}
