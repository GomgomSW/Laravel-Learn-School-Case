<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();

        // $data = [
        //     [
        //         'name' => 'aiu', 
        //         'gender' => 'P', 
        //         'nis' => '0101001',
        //         'class_id' => 1
        //     ],
        //     [
        //         'name' => 'Ryan Gosling', 
        //         'gender' => 'L', 
        //         'nis' => '0101002',
        //         'class_id' => 2
        //     ],
        //     [
        //         'name' => 'Tonny Jaya', 
        //         'gender' => 'L', 
        //         'nis' => '0101003',
        //         'class_id' => 1
        //     ],
        // ];

        // foreach($data as $value){
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nis' => $value['nis'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }



        Student::factory()->count(10)->create();
    }
}
