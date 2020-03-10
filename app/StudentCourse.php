<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
class StudentCourse extends Model
{
    //
    protected $table = "student_courses";
    public $timestamps = false;
    protected $primaryKey = 'studentcourse_id';

    public static function getChartData()
    {
        $totalCount = 0;
        $studentsPerCourse = [];
        $courses = Course::all();
        foreach ($courses as $course) {
            $count = StudentCourse::where('course_id', $course->course_id)->count();
            array_push($studentsPerCourse, array('course' => $course->course_name . '/' . $count));
            $totalCount = $totalCount + $count;
        }
        return ['totalStudents' => $totalCount, "countPerCourse" => $studentsPerCourse];
}

    function User(){
	return $this->belongsTo(\App\User::class);
    }
}
