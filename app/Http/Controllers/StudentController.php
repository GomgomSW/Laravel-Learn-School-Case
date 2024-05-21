<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index(){
        // dd('Nah ini udah bener masuk');

        $nama = "Jarno Opmeer";

        /*
            Cara Query di Laravel ada 3. yaitu:
            1. Eloquent ORM (paling di rekomendasikan)
            2. Query Builder (masih oke)
            3. Raw Query (Rawan terkena SQL Injection Not Recommended)
        */
        
        #Cara Eloquent ORM
        // $student = Student::all();
        // $student = Student::with('class')->get();
        // $student = Student::with(['class', 'extracurriculars'])->get();

        #pakai nested Relation di class
        #jadi yang memiliki relasi itu class dengan teacher
        #tapi dengan menggunakan " . " kita bisa mengakses data teacher melalui class dan bisa dipanggil di student
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->paginate(10);


        // Student::create([
        //     'name' => 'Eloquent',
        //     'gender' => 'L',
        //     'nis' => '02012012',
        //     'class_id' => 1,
        // ]);

        // Student::find(24)->update([
        //     'name'=> 'eloquent 2',
        //     'class_id' =>1
        // ]);

        // Student::find(24)->delete();



        // dd($student);
        return view('students', ['studentList' => $student]); 

    }

    public function show($id){
        // dd($id);
        

        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail',['studentDetail' => $student]);
    }

    /*
        Create bertujuan sebatas untuk tempat user
        untuk menginput file. jadi sebatas form
    */
    public function create(){
        // dd('berhasil masuk link');

        // $class = ClassRoom::all();
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['classList' => $class]);
    }

    /*
        setelah form di submit, maka kita masuk ke function sotre.
        Request berguna untuk menampung data yang diinput user
        dari form.
    */
    public function store(StudentCreateRequest $request){
    
        #validation
        #kita pake contohnya di file tersednirir
        // $validated = $request->validate([

        //     'nis' => 'unique:students|max:10|required',
        //     'name' =>'max:50|required',
        //     'gender' => 'required',
        //     'class_id' => 'required'
        // ]);


        #cara 2, tapi harus set fillable di model
        $student= Student::create($request->all());
        $student->save();

        #Flash Message
        if($student){
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success');
        }


        return redirect('/students');
    }

    public function edit(Request $request, $id){

        // dd("Success");
        // dd($request->id);


        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id' ,'!=', $student->class_id)->select('id', 'name')->get();
        // dd($student);

        return view('student-edit',[
            'student' => $student,
            'classList' => $class
        ]);
    }

    public function update(Request $request, $id){
        // dd($request->all());

        $student = Student::findOrFail($id);

        $student->update($request->all());

        $student->save();

        return redirect('/students');

    }

    public function delete($id){


        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id){
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        if($deletedStudent){
            Session::flash('status', 'success');
            Session::flash('message', 'delete sutdent success');
        }


        return redirect('/students');
    }
}
