<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index(){

        $teacher = Teacher::all();

        return view('teacher',['teacherList' =>$teacher] );
    }

    public function show($id){
        // $teacher = Teacher::findOrFail($id);
        $teacher = Teacher::with('class.students')->findOrFail($id);
        // dd($teacher);

        return view('teacher-detail', ['teacherDetail' => $teacher]);
    }

    public function create(){
        
        return view('teacher-add');
    }

    public function store(Request $request){
        // dd($request->all());

        $teacher = Teacher::create($request->all());

        $teacher->save();

        return redirect('/teacher');
    }
}
