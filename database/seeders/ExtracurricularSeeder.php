<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            ['name' => "basketball"], 
            ['name' => "Takraw"], 
            ['name' => "Pramuka"], 
            ['name' => "PMR"], 
            ['name' => "Volleyball"], 
            ['name' => "Football"], 
        ];

        foreach($data as $value){
            Extracurricular::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
