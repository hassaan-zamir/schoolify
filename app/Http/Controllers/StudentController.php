<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('pages.studentDashboard');
    }
    public function attendance()
    {
        return view('pages.attendance');
    }
    public function academic()
    {
        return view('pages.academic');
    }
    public function academic_details($subject)
    {
        return view('pages.academic')->with('subject', $subject);
    }
    public function announcement()
    {
        return view('pages.announcement');
    }
    public function feedback()
    {
        return view('pages.give_feedback');
    }
}
