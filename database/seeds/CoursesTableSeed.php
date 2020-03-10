<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $courses = ['ICS', 'BBIT', 'BTC'];
        foreach ($courses as $courses) {
            Course::create([
                'course_name' => $courses
            ]);
        }
    }
}
