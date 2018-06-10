<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Classes;
use App\Faculty;

use App\Section;
use App\Http\Requests\AssignSubjectRequest;
use App\AssignSubject;


class AdminController extends Controller
{
    public function assign_subject_view() {

        $subjects = Subject::all();
        $classes = Classes::all();

        // dd(Subject::all());
        return view('pages.assign_subject')->with([
            "subjects" => $subjects,
            "classes" => $classes
        ]);
    }

    public function assign_subject(AssignSubjectRequest $request){
        $class = $request->class;
        $subject = $request->subject;

        // if(AssignSubject::find())
        AssignSubject::create(['classId'=>$class, 'subjectId'=>$subject]);


        \Session::flash('flash_message', 'You have assigned the subject successfully');

        return redirect('assign_subject');

    }

    public function assign_teacher_view(){
        $subjects = Subject::all();
        $section = Section::all();
        $faculty = Faculty::all();

        // dd(Subject::all());
        return view('pages.assign_teacher')->with([
            "subjects" => $subjects,
            "section" => $section,
            "faculty" => $faculty
        ]);
    }

    public function assign_teacher() {
        return view('pages.assign_teacher');
    }

}
