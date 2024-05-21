<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index(){

        // $ekskul = Extracurricular::all();
        $ekskul = Extracurricular::with('students')->get();

        // dd($ekskul);

        return view('extracurricular',['extraCurricularList' => $ekskul]);
    }

    public function show($id){
        $ekskul = Extracurricular::with('students')->findOrFail($id);

        // dd($ekskul);

        return view('extracurricular-detail', ['extracurricularDetail' => $ekskul]);
    }

    public function create(){

        return view('extracurricular-add');
    }

    public function store(Request $request){

        // dd($request->all());

        $extracurricular = Extracurricular::create($request->all());
        $extracurricular->save();

        return redirect('/extracurricular');

    }
}
