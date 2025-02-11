<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    protected $table = 'extracurriculars';

    protected $fillable =[
        'name'
    ];

    #Extracurricular to stundets :: Many to  Many
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_extracurricular', 'extracurricular_id', 'student_id');

    }
}
