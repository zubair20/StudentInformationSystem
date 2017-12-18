<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class TeacherLoginController extends Controller
{
    public function __construct(){
    	$this->middleware('guest:teacher');
    }

    public function showLoginForm()
    {
        return view('adminlte::auth.teacher-login');
    }

    public function login(Request $request){
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

    	if(Auth::guard('teacher')->attempt(['email'=> $request->email , 'password' => $request->password] , $request->remember)){
    		return redirect()->intended(route('teachers.index'));
    	}
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
