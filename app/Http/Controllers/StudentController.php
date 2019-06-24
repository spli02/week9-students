<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    //
    public function show($student_slug)
    {
        $student = DB::table('students')->where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

    public function index()
    {
        //Test No.7
        $view = view('student/index');
        // return $view;

        //Test No.10
        $students = DB::table('students')->orderBy('name', 'asc')->get();;
        return view('student/index',compact('students'));

    }

    public function store(Request $request){

        $subject = $request->subject;
        $description = $request->description;

        $detentions = DB::table('detentions');
        $detentions->student_id = $student->id;
        $detentions->user_id = Auth::user()->id;
        $detentions->subject = $subject;
        $detentions->description = $description;
        $detentions->save();

        return redirect(action('StudentController@index'));
    }
}
