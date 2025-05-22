<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Dwi Candra Andika',
                'student_id_number' => 'F55123028',
                'email' => 'dwicandraandika4@gmail.com',
                'phone_number' => '085298852805',
                'birth_date' => '2005-02-24',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Dyah Kumala Sari',
                'student_id_number' => 'F55123029',
                'email' => 'Dyah@gmail.com',
                'phone_number' => '087291723019',
                'birth_date' => '2004-07-14',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}
