<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Students::create(
            [
                'name' => 'John Doe',
                'age' => '18',
                'gender' => 'M',
                'teacher_id' => '1',
            ]
        );

        Students::create(
            [
                'name' => 'Mary',
                'age' => '23',
                'gender' => 'F',
                'teacher_id' => '2',
            ]
        );
    }
}
