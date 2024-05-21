<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table ='teachers';

    protected $fillable = [
        'name'
    ];

  
    public function class() 
    {
        return $this->hasOne(ClassRoom::class);
    }

    # Model ClassRoom punya relasi dengan Student, jadi kita nested


}
