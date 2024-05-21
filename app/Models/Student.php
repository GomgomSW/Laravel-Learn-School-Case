<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    #Model bertujuan untuk menyambungkan data dari database ke Model sebelum di bawa ke controller

    /*
        referensikan models ke dalam table dalam migration.
        Hanya saja laravel pintar jadi selama data dari migration 
        bentuknya plural = students dan model berbentuk singluarnya = Student
        maka Model secara otomatis mereferensikan migrationnya

        karena itu line of code di bawah ini tidak diperlukan
        protected $table = 'students

        untuk Primary Key juga sama, kita tidak perlu menggunakan
        protected $primaryKey = 'id'
        karena larave sudah bisa langsung membaca primary key dari table kita
        
    */

    #klo mau buat auto increment false, awalnya auto incremnet
    // public $incrementing = false;

    #klo mau buat primary key kita jadi string untuk data seperti AA001, AA002
    // protected $keyType = 'string';


    /*
        timestamps ini adalah data kita pada base yang bernama
        created_at
        updated_at

        Jika valuenya kita ubah menjadi false maka datanya pada database akan hilang
    */
    // public $timestamps = false;


    /*
        kalo mau insert data/update data pada controller dengan eloquent
         harus make fillable

         Untuk membuat relationship antar table kita pake di Model
         hanya saja terlebih dahulu kita sudah menentukan Foreign Key
         dalam migration
    */


    protected $table = 'students';

    // Ini Hubungannya antara Student dan Class, Belongs TO
    // Karena itu nama functionnya di bawah pakai class

    #student with class :: Many to one
    public function class(){ //class itu nama dalam tabel database
        return $this->belongsTo(ClassRoom::class);
    }

    #ini untuk mass input
    protected $fillable =[
        'name', 'gender', 'nis', 'class_id'
    ];


    public function extracurriculars(){
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'extracurricular_id');
    }
}
