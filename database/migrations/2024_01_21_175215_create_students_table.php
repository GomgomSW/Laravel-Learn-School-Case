<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /*
            untuk mengupdate table, jika ada satu data yang lupa di masukin ke dalam tabel
            contoh di dalam students, gender lupa dimasukin, kita bisa membuat sebuah migration baru
            php artisan make:migration add_gender_column_to_students_table
        */
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->required();
            $table->string('nis', 10)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
