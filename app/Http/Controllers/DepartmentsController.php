<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\DepartmentValidator;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
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
        $departments = Department::all();
        return view('adminlte::departments.index', ['departments'=> $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('adminlte::departments.create', ['departments'=> $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentValidator $request)
    {

        $department = Department::create([
            'name'=> $request->input('name')
        ]);
        
        if($department){
            return redirect()->route('departments.create')->with('success', 'Department has been created Successfully!!');
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
        $department = Department::find($id);
        return view('adminlte::departments.edit', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentValidator $request, $id)
    {
        $updateDepartment = Department::where('id', $id)->update([
            'name' => $request->name,
        ]);
        if($updateDepartment){
            return redirect()->route('departments.index')->with('success', 'Department has been Updated Successfully!!');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        if($department->delete()){
            return redirect()->route('departments.index')->with('success', 'Department has been Deleted Successfully!!');
        }
        return redirect()->back();
    }
}
