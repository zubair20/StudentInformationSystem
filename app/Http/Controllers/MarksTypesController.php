<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkstypeValidator;
use App\Markstype;
use Illuminate\Http\Request;

class MarksTypesController extends Controller
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
        $markstypes = Markstype::all();
        return view('adminlte::markstypes.index', ['markstypes'=> $markstypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $markstypes = Markstype::all();
        return view('adminlte::markstypes.create', ['markstypes'=> $markstypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarkstypeValidator $request)
    {
        $markstype = Markstype::create([
            'name'=> $request->input('name')
        ]);
        if($markstype){
            return redirect()->route('markstypes.create')->with('success', 'Marks type has been created Successfully!!');
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
        $markstype = Markstype::find($id);
        return view('adminlte::markstypes.edit', ['markstype' => $markstype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarkstypeValidator $request, $id)
    {
        $updateMarkstype = Markstype::where('id', $id)->update([
            'name' => $request->name,
        ]);
        if($updateMarkstype){
            return redirect()->route('markstypes.index')->with('success', 'Markstype has been Updated Successfully!!');
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
        $markstype = Markstype::find($id);
        if($markstype->delete()){
            return redirect()->route('markstypes.index')->with('success', 'Markstype has been Deleted Successfully!!');
        }
        return redirect()->back();
    }
}
