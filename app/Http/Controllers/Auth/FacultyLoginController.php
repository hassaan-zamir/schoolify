<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class FacultyLoginController extends Controller
{

  public function __construct(){
    $this->middleware('guest:faculty');
  }

  public function showLoginForm(){
    return view('auth.faculty-login');
  }

  public function login(Request $request){

    $this->validate($request,[
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (Auth::guard('faculty')->attempt( ['email' => $request->email, 'password' => $request->password] , $request->remember)){
      return redirect()->intended(route('pages.add_attendance'));
    }

    return redirect()->back()->withInput($request->only('email','remember'));
  }
}
