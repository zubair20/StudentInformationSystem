<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemesterValidator;
use App\Semester;
use Illuminate\Http\Request;

class SemestersController extends Controller
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
        $semesters = Semester::all();
        return view('adminlte::semesters.index', ['semesters'=> $semesters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        return view('adminlte::semesters.create', ['semesters'=> $semesters]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemesterValidator $request)
    {
        $session = Semester::create([
            'name'=> $request->input('name')
        ]);
        if($session){
            return redirect()->route('semesters.create')->with('success', 'Semester has been created Successfully!!');
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
        $semester = Semester::find($id);
        return view('adminlte::semesters.edit', ['semester' => $semester]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SemesterValidator $request, $id)
    {
        $updateSemester = Semester::where('id', $id)->update([
            'name' => $request->name,
        ]);
        if($updateSemester){
            return redirect()->route('semesters.index')->with('success', 'Semester has been Updated Successfully!!');
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
        $semester = Semester::find($id);
        if($semester->delete()){
            return redirect()->route('semesters.index')->with('success', 'Semester has been Deleted Successfully!!');
        }
        return redirect()->back();
    }
}
