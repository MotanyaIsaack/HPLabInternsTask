<?php

namespace App\Http\Controllers;

use App\Role;
use App\StudentCourse;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/students')->with('success', 'Logined in successfully !');
    }

    public function allStudents(){
        $students =  User::getAllStudents();
        return response()->json($students);
      
    }

    public function getChartData(){
        $data = StudentCourse::getChartData();
        return response()->json($data);
    }

    public function displayChart(){
        return view('chart', ['chartdata'=>StudentCourse::getChartData()]);
    }
}
