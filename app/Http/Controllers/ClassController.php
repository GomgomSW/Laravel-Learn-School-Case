<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        //Lazzy Load
        // $class = ClassRoom::all(); // dia ambil data klo kita dibutuhkan aja
        #logic Lazzy Load
        /*
            Select * from table class
            select * from student where class = 1A
            select * from student where class = 1B
            select * from student where class = 1A
            select * from student where class = 1D

        */


        //Eager Load
        // $class = ClassRoom::with('students')->get(); //sudah ada relationsihp
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->get();
        return view('classroom', ['classList' => $class]);
        #Logic Eager Load
        /*
            Select * from table class
            Select * from student where class(1a,1b,1c,1d)
        */
    }

    public function show($id){
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('class-detail',['classDetail' => $class]);
    }

    public function create(){

        $teacher = Teacher::all();
        return view('class-add',['teacherList' => $teacher]);
    }

    public function store(Request $request){
        $class = ClassRoom::create($request->all());
        $class->save();

        return redirect('/class');
    }


    public function edit(Request $request, $id){
        $class = ClassRoom::with('homeroomTeacher')->findOrFail($id);
        $teacher = Teacher::where('id', '!=', $class->teacher_id)->select('id', 'name')->get();

        return view('class-edit', [
            'class' => $class,
            'teacherList' => $teacher,
        ]);
    }

    public function update(Request $request, $id){

        $class = ClassRoom::findOrFail($id);
        $class->update($request->all());
        $class->save();

        return redirect('/class');
    }
}
