<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table = 'class';

    protected $fillable =[
        'name', 'teacher_id', 'location'
    ];


    #Classroom With Students :: One TO Many
    public function students() //students itu nama tabel dalam database
    {

        /*
            Karena nama modelnya ClassRoom, jadi yang dibaca class_room_id makanya erro
            karena itu kita harus ketik manual
        */

        return $this->hasMany(Student::class, 'class_id', 'id'); 
        //dimana 'class_id'adalah foreign key, dan ID adalah primary key dalam table class


    }

    #nested Relationship

    #Model Student terhubung dengan ClassRoom.php yang dimana 
    #ClassRoom.php punya function homeroomTeacher
    #Dari situ kita bisa mengakses homeRoom Teacher hanya dengan menginisiasi relationship dengan class antara 
    #student dengan classroom. Cek di Student.php
    public function homeroomTeacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    } 


}
