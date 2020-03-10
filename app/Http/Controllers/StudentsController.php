<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;
use App\Course;
use App\StudentCourse;

class StudentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('user_role_id', 1)->paginate(5);
        $courses = Course::all();
        $courses = Course::pluck('course_name', 'course_id');
        return view('students.index', compact('courses'))->with('students', $students);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $c = Course::pluck('course_name', 'course_id');
        return view('students.create')->with('courses', $c);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'course' => 'required',
            ]
        );

        $user = new User;
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->user_role_id = 1;
        $user->password = '$2y$10$m84sgbtRI3eCBl.F0z6q5eAz5rNeNLAX7RG7RInA1WCz/DjvPKuzu';
        $user->suspended = 0;

        $user->save();


        $student_course = new StudentCourse;
        $student_course->user_id = $user->user_id;
        $student_course->course_id = $request->input('course');

        $student_course->save();
        return redirect('/students')->with('success', 'Student Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        //$course_data = DB::table('student_courses')->where('user_id', '=', $id)->get();;
        $course_name = StudentCourse::with('User')->find($id);
        $course = Course::find($course_name['course_id'])["course_name"];
        //return $course;

        $courses = Course::all();
        $c = Course::pluck('course_name', 'course_id');

        return view('students.edit', compact('c', 'course', 'student'))->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'course' => 'required'
            ]
        );

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->user_role_id = 1;
        $user->password = '$2y$10$m84sgbtRI3eCBl.F0z6q5eAz5rNeNLAX7RG7RInA1WCz/DjvPKuzu';

        if ($request->input('status') == '0')
            $user->suspended = 0;
        else {
            $user->suspended = 1;
        }

        $user->save();


        $student_course = DB::table('student_courses')->where('user_id', '=', $id)->get();
        //return $student_course;
        $student_course->course_id = $request->input('course');

        // $student_course->save();
        return redirect('/students')->with('success', 'Update success !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
