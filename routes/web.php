<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', 
        [
            'name' => 'Sondi',
            'role' => 'admin',
            'buah' => ['pisang', 'apel','jeruk','semangka','kiwi'],
        ]
    );
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/students-add', [StudentController::class, 'create']);
Route::post('student-saved', [StudentController::class, 'store']);
route::get('/student-edit/{id}', [StudentController::class, 'edit']);
route::put('/student-edited/{id}', [StudentController::class, 'update']);
route::get('/student-delete/{id}', [StudentController::class, 'delete']); 
route::delete('/student-destroy/{id}', [StudentController::class,'destroy']);


Route::get('/class', [ClassController::class, 'index']);
Route::get('class/{id}', [ClassController::class, 'show']);
Route::get('/classroom-add', [ClassController::class, 'create']);
Route::post('/class-saved', [ClassController::class, 'store']);
Route::get('/classroom-edit/{id}',[ClassController::class, 'edit']);
Route::put('classroom-edited{id}', [ClassController::class, 'update']);


Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular-saved',[ExtracurricularController::class, 'store']);

Route::get('/teacher',[TeacherController::class, 'index']);
Route::get('/teacher/{id}',[TeacherController::class, 'show']);
Route::get('/teacher-add',[TeacherController::class, 'create']);
Route::post('/teacher-saved',[TeacherController::class, 'store']);


