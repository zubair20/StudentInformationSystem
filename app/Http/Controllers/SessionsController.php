<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionValidator;
use App\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
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
        $sessions = Session::all();
        return view('adminlte::sessions.index', ['sessions' => $sessions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::all();
        return view('adminlte::sessions.create', ['sessions' => $sessions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SessionValidator $request)
    {
        $session = Session::create([
            'name'=> $request->input('name')
        ]);
        if($session){
            return redirect()->route('sessions.create')->with('success', 'Session has been created Successfully!!');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = Session::find($id);
        return view('adminlte::sessions.edit', ['session' => $session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SessionValidator $request, $id)
    {
        $updateSession = Session::where('id', $id)->update([
            'name' => $request->name,
        ]);
        if($updateSession){
            return redirect()->route('sessions.index')->with('success', 'Session has been Updated Successfully!!');
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
        $session = Session::find($id);
        if($session->delete()){
            return redirect()->route('sessions.index')->with('success', 'Session has been Deleted Successfully!!');
        }
        return redirect()->back();
    }
}
