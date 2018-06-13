<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:faculty');
  }

  public function vue(){
    return view('pages.vue');
  }


  public function login(){
    return view('pages.add_attendance');
  }

  public function add_attendance(){


    return view('pages.add_attendance');
  }

  public function edit_attendance(){
    return view('pages.edit_attendance');
  }

  public function add_evaluation(){
    return view('pages.add_evaluation');
  }

  public function edit_evaluation(){
    return view('pages.edit_evaluation');
  }

  public function make_announcement(){
    return view('pages.make_announcement');
  }

  public function edit_announcement(){
    return view('pages.edit_announcement');
  }

  public function edit_announcement_view($id){

    return view('pages.edit_announcement')->with('announcementId', $id);


  }

  public function feedback(){
    return view('pages.feedback');
  }




}
