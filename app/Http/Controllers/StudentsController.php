<?php

namespace App\Http\Controllers;

use App\Department;
use App\Semester;
use App\Session;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::all();
        $departments = Department::all();
        $semester = Semester::where('name', '1st')->first();
        return view('adminlte::students.create',[
            'sessions'=>$sessions , 
            'departments'=>$departments, 
            'semester'=>$semester
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'contact' => 'required|numeric',
            'email' => 'required|unique:students',
            'password' => 'required',
            'reg' => 'required|numeric',
            'address' => 'required',
            'session' => 'required',
            'department' => 'required',
            'semester' => 'required',
            'gender' => 'required',
        ]);

        $student = Student::create([
            'name' => $request->input('first_name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'reg' => $request->input('reg'),
            'address'=> $request->input('address'),
            'session_id'=> $request->input('session'),
            'department_id'=> $request->input('department'),
            'semester_id'=> $request->input('semester'),
            'gender'=> $request->input('gender'),
        ]);
        if($student){
            return redirect()->route('students.index')->with('success', 'Student has been created Successfully!!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
